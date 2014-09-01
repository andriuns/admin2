<!DOCTYPE html>
<html>
    <head>

        <?php echo $this->Html->charset('utf-8'); ?>
        <title> Sippreas:  <?php echo $title_for_layout; ?></title>       
        <?php
        echo $this->Html->meta('favicon.ico', '/favicon2.ico', array('type' => 'icon'));
        echo $this->Html->css(array('bootstrap.min','handsontable','edicioncss', 'font-awesome.min'));    
        echo $this->Html->script(array('Jquery','Handsontable11','bootstrap.min','highcharts' ,'exportarH','edicionjs'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?> 
    </head>
    <style>
        header {
  position: fixed;
  z-index: 10000;
  width: 100%;
  top: -9em;
  text-align: center;
  transition: all 0.4s; }
  header:hover {
    top: -6em; }
 
  header nav ul {
    margin: 0;
    color: #f7f7f7;
    font-weight: bold;
    padding-bottom: 1em; }
    header nav ul li {
      display: inline-block;
      padding: 0 10px; }
  header #logo {
    background-color: #000;
    position: relative;
    width: 20%;
    text-align: center;
    min-width: 100px;
    max-width: 100%;
    left: 43%;
    height: 100px;
    top: 140px;
    z-index: 5;
    border-radius: 5em 0; }
    header #logo img {
      margin-top: -30px;
      width: 100px; }

    </style>
    <body>
      
         <header>
             
            <div id="logo"><h1><?php echo $this->Html->image('LOGO1.png',array('alt'=>'logityo'));?></h1></div>
            <div id="navigation">
                <nav class='callig'>
                    <ul id='navegacionPrincipal'>
                        <li><a href='#index'>Inicio</a></li>
                        <li><a href='#costos'>Costos</a></li>
                        <li><a href='#cuartos'>Cuartos</a></li>
                        <li><a href='#contacto'>Contacto y Reservacciones</a></li>
                        <li><a href='#buffet'>Buffet</a></li>
                    </ul>
                </nav>
            </div>
        </header>
   
             
            <?php echo $this->Session->flash('auth'); ?>         
            <?php echo $this->Session->flash(); ?>
            
            <?php echo $this->fetch('content'); ?>
           
                       
    </body>

</html>



