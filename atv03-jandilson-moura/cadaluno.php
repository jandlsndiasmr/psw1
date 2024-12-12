<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAD-ALUNO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <div class="header">
            <div class="div1">
                <a href="#"><img src="img/logoif.jpg" alt="" id="logoif"></a>
            </div>
            <div class="div2">
                <h1>SIS-ALUNO</h1>
            </div>
            <div class="div3">
                <a href="#  "><img src="img/logoceteia.png" alt="" id="logoceteia"></a>
            </div>
        </div>
        <div class="links">
            <button>
                <a href="index.php">Página inicial</a>
            </button>
            <button>
                <a href="listaaluno.php">Lista de dados</a>
            </button>
        </div>
        <div class="content">
            <h2>Formulário de Cadastro</h2><br><br>
            <form action="listaaluno.php"  method="post">
                <div class="form">
                    
                    <div class="div01">
                        <div class="nome_estado">
                            <label for="nome">Nome:</label><br>
                            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required><br><br>
                            
                            <label for="estado">Estado:</label><br>
                            <select id="estado" name="estado" required>
                                <option value="">Selecione o estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select><br><br>    
                        </div>
                        <div class="cidade_rua">
                            <label for="cidade">Cidade:</label><br>
                            <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" required><br><br>
                            
                            <label for="rua">Rua:</label><br>
                            <input type="text" id="rua" name="rua" placeholder="Digite sua rua" required><br><br>
                        </div>
                        <div class="cpf_celular">
                            <label for="cpf">CPF:</label><br>
                            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required><br><br>
                            
                            <label for="celular">Celular:</label><br>
                            <input type="text" id="celular" name="celular" placeholder="Digite seu celular" required><br><br>
                        </div>
                        <div class="whatsapp_datadenascimento">
                            <label for="zap">WhatsApp:</label><br>
                            <input type="text" id="zap" name="zap" placeholder="Digite seu WhatsApp"><br><br>
                            
                            <label for="data_nascimento">Data de Nascimento:</label><br>
                            <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>                            
                        </div>
                    </div>
                    <div class="div0102">
                        <div class="div02">
                            <label for="disciplinas_cursadas">Disciplinas Cursadas:</label><br>
                            <div class="disccurs">
                                <div class="l">
                                    <input type="checkbox" id="leitura" name="disciplinas_cursadas" value="Leitura e produção textual">
                                    <label for="leitura">Leitura e produção textual</label><br>
                                    <input type="checkbox" id="educacao_fisica" name="disciplinas_cursadas" value="Educação física">
                                    <label for="educacao_fisica">Educação física</label><br>
                                    <input type="checkbox" id="historia" name="disciplinas_cursadas" value="História">
                                    <label for="historia">História</label><br>
                                    <input type="checkbox" id="rede_computadores" name="disciplinas_cursadas" value="Rede de computadores">
                                    <label for="rede_computadores">Rede de computadores</label><br>
                                    <input type="checkbox" id="quimica" name="disciplinas_cursadas" value="Química">
                                    <label for="quimica">Química</label><br>
                                    <input type="checkbox" id="espanhol" name="disciplinas_cursadas" value="Espanhol">
                                    <label for="espanhol">Espanhol</label><br>
                                    <input type="checkbox" id="banco_dados" name="disciplinas_cursadas" value="Banco de dados">
                                    <label for="banco_dados">Banco de dados</label><br>
                                    <input type="checkbox" id="projeto_integrador" name="disciplinas_cursadas" value="Projeto integrador">
                                    <label for="projeto_integrador">Projeto integrador</label><br>
                                    <input type="checkbox" id="filosofia" name="disciplinas_cursadas" value="Filosofia">
                                    <label for="filosofia">Filosofia</label><br>    
                                </div>
                
                                <div class="r">
                                    <input type="checkbox" id="geografia" name="disciplinas_cursadas" value="Geografia">
                                    <label for="geografia">Geografia</label><br>
                                    <input type="checkbox" id="programacao_web" name="disciplinas_cursadas" value="Programação de sistemas web">
                                    <label for="programacao_web">Programação de sistemas web</label><br>
                                    <input type="checkbox" id="ingles" name="disciplinas_cursadas" value="Inglês">
                                    <label for="ingles">Inglês</label><br>
                                    <input type="checkbox" id="portugues" name="disciplinas_cursadas" value="Língua portuguesa e literatura">
                                    <label for="portugues">Língua portuguesa e literatura</label><br>
                                    <input type="checkbox" id="matematica" name="disciplinas_cursadas" value="Matemática">
                                    <label for="matematica">Matemática</label><br>
                                    <input type="checkbox" id="sociologia" name="disciplinas_cursadas" value="Sociologia">
                                    <label for="sociologia">Sociologia</label><br>
                                    <input type="checkbox" id="biologia" name="disciplinas_cursadas" value="Biologia">
                                    <label for="biologia">Biologia</label><br>
                                    <input type="checkbox" id="analise_sistemas" name="disciplinas_cursadas" value="Análise de sistemas para web">
                                    <label for="analise_sistemas">Análise de sistemas para web</label><br>
                                    <input type="checkbox" id="fisica" name="disciplinas_cursadas" value="Física">
                                    <label for="fisica">Física</label><br><br>    
                                </div>
                
                            </div>
        
                        </div>
                        <div class="div03">
                            <label for="discpref">Disciplina Preferida:</label><br>
                            <div class="discpref">
                                <div class="l">
                                    <input type="checkbox" id="leitura" name="disciplinas_preferidas" value="Leitura e produção textual">
                                    <label for="leitura">Leitura e produção textual</label><br>
                                    <input type="checkbox" id="educacao_fisica" name="disciplinas_preferidas" value="Educação física">
                                    <label for="educacao_fisica">Educação física</label><br>
                                    <input type="checkbox" id="historia" name="disciplinas_preferidas" value="História">
                                    <label for="historia">História</label><br>
                                    <input type="checkbox" id="rede_computadores" name="disciplinas_preferidas" value="Rede de computadores">
                                    <label for="rede_computadores">Rede de computadores</label><br>
                                    <input type="checkbox" id="quimica" name="disciplinas_preferidas" value="Química">
                                    <label for="quimica">Química</label><br>
                                    <input type="checkbox" id="espanhol" name="disciplinas_preferidas" value="Espanhol">
                                    <label for="espanhol">Espanhol</label><br>
                                    <input type="checkbox" id="banco_dados" name="disciplinas_preferidas" value="Banco de dados">
                                    <label for="banco_dados">Banco de dados</label><br>
                                    <input type="checkbox" id="projeto_integrador" name="disciplinas_preferidas" value="Projeto integrador">
                                    <label for="projeto_integrador">Projeto integrador</label><br>
                                    <input type="checkbox" id="filosofia" name="disciplinas_preferidas" value="Filosofia">
                                    <label for="filosofia">Filosofia</label><br>
                                </div>
                                <div class="r">
                                    <input type="checkbox" id="geografia" name="disciplinas_preferidas" value="Geografia">
                                    <label for="geografia">Geografia</label><br>
                                    <input type="checkbox" id="programacao_web" name="disciplinas_preferidas" value="Programação de sistemas web">
                                    <label for="programacao_web">Programação de sistemas web</label><br>
                                    <input type="checkbox" id="ingles" name="disciplinas_preferidas" value="Inglês">
                                    <label for="ingles">Inglês</label><br>
                                    <input type="checkbox" id="portugues" name="disciplinas_preferidas" value="Língua portuguesa e literatura">
                                    <label for="portugues">Língua portuguesa e literatura</label><br>
                                    <input type="checkbox" id="matematica" name="disciplinas_preferidas" value="Matemática">
                                    <label for="matematica">Matemática</label><br>
                                    <input type="checkbox" id="sociologia" name="disciplinas_preferidas" value="Sociologia">
                                    <label for="sociologia">Sociologia</label><br>
                                    <input type="checkbox" id="biologia" name="disciplinas_preferidas" value="Biologia">
                                    <label for="biologia">Biologia</label><br>
                                    <input type="checkbox" id="analise_sistemas" name="disciplinas_preferidas" value="Análise de sistemas para web">
                                    <label for="analise_sistemas">Análise de sistemas para web</label><br>
                                    <input type="checkbox" id="fisica" name="disciplinas_preferidas" value="Física">
                                    <label for="fisica">Física</label><br><br>
                                </div>
                            </div>        
                        </div>
                    </div>                    
                    
                    <div class="btn">
                        <button type="reset">Limpar</button>
                        <button type="submit">Enviar</button>
                    </div>
                </div>
                
            </form>    
        </div>
        <div class="footer">
            <div class="div1">
                <p>Site desenvolvido por Jandilson Dias Moura - jandlsndiasmr@gmail.com - jandlsndsmoura@gmail.com</p>
            </div>
            <div class="div2">
                <a href="#"><img src="img/logojandy.png" alt="" id="logojandy"></a>
            </div>
        </div>
    </div>
</body>
</html>