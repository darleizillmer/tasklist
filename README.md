<h1>Como utilizar este projeto!</h1>
<h3>Siga as etapas abaixo:</h3>
<ol>
    <li>Requisitos do servidor</li>
	<li>Clonar o reposit�rio.</li>
	<li>Configurar o arquivo "hosts" do sistema operacional.</li>
	<li>Configurar o virtual-host no servidor web.</li>
</ol>
&nbsp;
<h2>1. Requisitos do servidor</h2>
O framework Laravel possui alguns requisitos de sistema. 
� necess�rio verificar se o servidor atende aos seguintes requisitos antes de clonar o projeto:
<ul>
    <li>PHP >= 7.1.3</li>
	<li>Extens�o PHP OpenSSL</li>
	<li>Extens�o PHP PDO</li>
	<li>Extens�o PHP Mbstring</li>
	<li>Extens�o PHP Tokenizer</li>
	<li>Extens�o PHP XML</li>
	<li>Extens�o PHP Ctype</li>
	<li>Extens�o PHP JSON</li>
	<li>Extens�o PHP BCMath</li>
</ul>

&nbsp;
<h2>2. Clonar o reposit�rio</h2>
O reposit�rio deve ser clonado no diret�rio de publica��o do servidor web, dependendo da plataforma pode ser: "htdocs", "/var/www"...

```
git clone https://github.com/darleizillmer/tasklist.git
```

Ap�s o reposit�rio clonado, vamos para a pr�xima etapa.
<h2>3. Instalar Depend�ncias</h2>
Abra o Terminal, navegue at� o diret�rio do projeto e instale as depend�ncias do projeto com:

```
composer install
```

Ap�s instalar todos os pacotes necess�rios � preciso copiar o arquivo .env de exemplo para a raiz do projeto,
isso pode ser feito manualmente ou atrav�s da linha de comando:

```
cp .env.example .env
//ou copy .env.example .env
```

Feito isso, voc� deve gerar uma chave para a aplica��o.

```
php artisan key:generate
```

<h2>4. Configurar Base de Dados</h2>
Crie um banco de dados vazio para o projeto e especifique os detalhes no arquivo .env.
O arquivo de exemplo j� cont�m um host, banco e usu�rio configurados para testes.

```
DB_HOST=HOST
DB_PORT=3306
DB_DATABASE=DATABASE
DB_USERNAME=USERNAME
DB_PASSWORD=SENHA
```

Ap�s criar e configurar as credenciais, migre o banco de dados da aplica��o:

```
php artisan migrate
```

Observa��o: Caso voc� configure algum host no Windows, subdom�nio no servidor, ou algo do genero, n�o esque�a de apontar o host para pasta public do projeto.