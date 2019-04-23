<h1>Como utilizar este projeto!</h1>
<h3>Siga as etapas abaixo:</h3>
<ol>
    <li>Requisitos do servidor</li>
	<li>Clonar o repositório.</li>
	<li>Configurar o arquivo "hosts" do sistema operacional.</li>
	<li>Configurar o virtual-host no servidor web.</li>
</ol>
&nbsp;
<h2>1. Requisitos do servidor</h2>
O framework Laravel possui alguns requisitos de sistema. 
É necessário verificar se o servidor atende aos seguintes requisitos antes de clonar o projeto:
<ul>
    <li>PHP >= 7.1.3</li>
	<li>Extensão PHP OpenSSL</li>
	<li>Extensão PHP PDO</li>
	<li>Extensão PHP Mbstring</li>
	<li>Extensão PHP Tokenizer</li>
	<li>Extensão PHP XML</li>
	<li>Extensão PHP Ctype</li>
	<li>Extensão PHP JSON</li>
	<li>Extensão PHP BCMath</li>
</ul>

&nbsp;
<h2>2. Clonar o repositório</h2>
O repositório deve ser clonado no diretório de publicação do servidor web, dependendo da plataforma pode ser: "htdocs", "/var/www"...
&nbsp;
```
git clone https://github.com/darleizillmer/tasklist.git
```
&nbsp;
Após o repositório clonado, vamos para a próxima etapa.
<h2>3. Instalar Dependências</h2>
Abra o Terminal, navegue até o diretório do projeto e instale as dependências do projeto com:
&nbsp;
```
composer install
```
&nbsp;

