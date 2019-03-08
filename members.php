<html>
	<head>
            <title>Brockhampton</title>
            <link  type="text/css" rel="stylesheet" href="css/estilo.css"/> 
            <link rel="shortcut icon" href="FAVICON.ico">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
            <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	</head>
	<body>
            <div id="container">      
                
                <div id="banner">
                    <img src="imagens/logo.jpg">
                </div>	
                
                <div id="menu">
                    <?php
                    include('menu.php');
                    ?>
		</div> <!-- Fecha a div 'menu '-->
			
                <div id="espaco01">
                </div>
                        
		<div id="corpo">
                    
                    <table cellspacing="17">
                        <td>
                            <div class="demo-card-wide mdl-card mdl-shadow--2dp"> 
                                <div class="mdl-card__title"  style="background: url('../imagens/matt.jpg') center / cover;">
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <button type="submit" name="abrir" value="matt" class="mdl-button mdl-js-button mdl-js-ripple-effect nome">
					Matt Champion
                                    </button>
                                </div>                          
                            </div>
                            
                            </td>
                            
                        <td>
                            <div class="demo-card-wide mdl-card mdl-shadow--2dp"> 
                                <div class="mdl-card__title"  style="background: url('../imagens/joba.jpg') center / cover;">
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <button type="submit" name="abrir" value="matt" class="mdl-button mdl-js-button mdl-js-ripple-effect nome">
					Joba
                                    </button>
                                </div>
                            </div>
                        </td>
                        
                    </table>
                 
		</div> <!-- Fecha a div 'corpo' -->
			
                <div id="espaco02">
                </div>
                        
		<div id="rodape">
                    <?php
                    include('rodape.php');
                    ?>
		</div>>
            </div> <!-- Fecha a div 'container' -->
	</body>
</html>