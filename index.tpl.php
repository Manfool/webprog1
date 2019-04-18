<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
    <?= $fejléc['cím'] .
    ( (isset($fejléc['mottó'])) ? ('|' . $fejléc['mottó']) : '' ) ?>
    </title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="wrapper">
    <div id="header"> </div>
    <div id="right">
    <?php
        include(dirname(__FILE__)."/{$keres['fájl']}.tpl.html");
    ?>
    </div>
    <div id="left">
      <div id="logo">
        <h1><strong>
             <?= $fejléc['cím'] ?>
        </strong></h1>
        <? if (isset($fejléc['mottó']))
        { ?>
        <p>
            <?= $fejléc['mottó'] ?>
        </p>
        <? } ?>
       </div>
    <div id="nav">
        <b>
    <ul>
        <?php foreach ($oldalak as $url => $oldal)
        { ?>
            <li<?= (($oldal == $keres) ? ' class="aktiv"' : '') ?>>
                <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $oldal['fájl']) ?>">
                    <?php echo $oldal['szoveg'] ?>
                </a>
            </li>
            <?php  ?>
        <?php } ?>
    </ul>
    </div>
    </div>
      </b>
      
    <div id="nav2">
	<form method=get action="http://www.google.com/search">
        <img src="http://www.google.com/logos/Logo_40wht.gif" align="absmiddle">
        <input type=text name=q size=23 maxlength=255 value="">
        <input type=submit name=btng value="Keresés">
    </form>
	<br></br>
        <h2><strong>Videó</strong></h2>
        <br></br>
            <iframe width="200" height="150" src="https://www.youtube.com/embed/Kcz3FStl5zA" frameborder="0" allowfullscreen></iframe><br>   
        <br></br>
        <video width="200" height="150" controls>
  <source src="video1.mpg" type="video1.mpg">
</video>


        <h2><strong>Térkép</strong></h2>
        <br></br>
            <iframe width="200" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6478.162331582477!2d19.673604127737985!3d46.947311257187366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x71783311ba7b0bdb!2sFreetime+Park+-+Paintball+P%C3%A1lya!5e0!3m2!1shu!2shu!4v1448010356916"></iframe><br /><small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6478.162331582477!2d19.673604127737985!3d46.947311257187366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x71783311ba7b0bdb!2sFreetime+Park+-+Paintball+P%C3%A1lya!5e0!3m2!1shu!2shu!4v1448010356916" style="color:#0000FF;text-align:left">Nagyobb térképre váltás</a></small>
        <br></br>
    </div>
    </div>
     <div class="clear"> </div>
    <div id="spacer"> </div>
    <div id="footer">
      <div id="copyright">
        Ölei András (D4JCRJ) andras.olei@hotmail.com
      </div>
	  <div id="footerline"></div>
    </div>
    </div>
</body>
</html>