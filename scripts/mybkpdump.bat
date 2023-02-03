@Echo OFF
setlocal enabledelayedexpansion
REM ====================================================================================================
REM O script realiza backup do database informado por tabela. Cada tabela vai ser salva da seguinte forma
REM "NomeTabela.Sql" 
REM
REM Na chamada do script pelo prompt, deve-se passar os parametros:
REM    Database, Host, Usuario e Senha para Mysql. 
REM
REM "DataBase" obrigatóriamente deve ser o primeiro parâmetro.
REM Os demais parametros enviar em qualquer ordem desde que identificados exemplo:
REM Para informar o host utilizar -hSERVIDOR, para informar o usuário -uyork e assim por diante;
REM Também pode-se enviar outros parâmetros do MySql como por exemplo o --compress
REM Ao todo temos previsto a possibilidade de envio de 9 parametros.
REM
REM Exemplo: 
REM C:\SourceMysql.bat MyCaixa -hservidor -uyork -p123 --compress
REM ====================================================================================================
del Dump.bat
del NumTabelas.txt
del Erro.log
del *.sql

set SQLExclui= 
for /F %%A IN (excluir.txt) DO ( 
    set SQLExclui=!SQLExclui! and table_name not like '%%A'
    )

REM ** Pegando as tabelas do banco de dados
mysql %1 %2 %3 %4 %5 %6 %7 %8 %9 --database=%1 --skip-column-names --execute="select table_name from information_schema.tables where table_schema = '%1' and table_name not like 'temp_%%' and table_name not like 'tmp_%%' %SQLExclui%" >Tables.txt

REM ** Varrendo as tabelas do banco de dados
set NumTabelas=0
echo set NumTabelas=0 >>Dump.bat
for /F %%A IN (tables.txt) DO ( 
    set /A NumTabelas+=1
    echo mysqldump --opt --triggers=false --routines=false --lock-tables=FALSE --max_allowed_packet=100000000 %2 %3 %4 %5 %6 %7 %8 %9 --log-error=Erro.log %1 %%A ^>%%A.sql >>Dump.bat
    echo IF %%ERRORLEVEL%% NEQ 0 ^( ECHO ERRO NA TABELA %%A ^>^>Erro.log ^) ELSE ^( set /A NumTabelas+=1 ^) >>Dump.bat
    )


REM ** Preparando o script final
echo Data do Log: >>NumTabelas.txt
echo %date% >>NumTabelas.txt
echo Tabelas Totais: >>NumTabelas.txt
echo %NumTabelas% >>NumTabelas.txt
echo Backup Realizado: >>NumTabelas.txt

REM ** Escrevendo o total de tabelas OK
echo ECHO %%NumTabelas%% ^>^>NumTabelas.txt >>Dump.Bat

REM ** Rodando o dump
call Dump.bat