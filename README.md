TESTE
---------------------------------------
- O que devo utilizar?
	A linguagem (web) e banco de dados que mais se sentir a vontade
	

- Construir uma tela de cadastro 
	- Campos:
		- CNPJ, checkbox (ativo = true, não ativo = false), Razão Social, nome fantasia, pais, bairro, cidade, Uf, site da empresa,
	
- Construir uma segunda tela das empresas que foram cadastradas (pode ser um grid)

- Parte de logica e backend:
	. Construir um CRUD.
	. Construir a validação e função no backend para que quando o usuario colocar o cnpj, para que ele possa checar se já existe no banco e caso exista trazer todos os dados em seus campos.
	. Caso o CNPJ não for cadastrado, inserir esse registro na tabela.
     . Abaixo segue a estrutura para a tabela como mencionado que sera sua base dados, porém a inserção de dados, deve vir do seu cadastro.

Estrutura para tabela:
create table manufacturer_base (
	manufacture_id serial4,
	manufacturer_name varchar,
	manufacturer_cnpj varchar,
	manufacturer_fantasy_name varchar,
	manufacturer_social_name varchar,
	manufacturer_active bool,
	manufacturer_site varchar,
	manufacturer_country varchar,
	manufacturer_city varchar,
	manufacturer_bairro varchar
):
