<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Burviksväder</title>
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="expires" content="-1" />
  <meta http-equiv="Cache-control" content="no-cache" />
  <link href="styles.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="shortcut icon" href="favicon.ico" />
  <script type="text/javascript"> <!--
    var DayName = new Array("Söndag", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag");
    var MonthName = new Array("januari", "febuari", "mars", "april", "maj", "juni", "juli", "augusti", "september", "oktober", "november", "december");
    //-->
  </script>
</head>
<body>
<div id="page">
  <div id="header">
    <div id="header_part1">Burviksväder<br /><span>Väderdata direkt från Tallens väg i Burvik, varje minut sedan 2013</span></div>
    <div id="header_part2"></div>
  </div>
  <div id="menubar">
    <div id="header_left">
      <script type="text/javascript"> <!--
        var CurrentDate = new Date();
        var DateCur = CurrentDate.getDate();
        var DayNumber = CurrentDate.getDay();
        var MonthNumber = CurrentDate.getMonth();
        var Year = CurrentDate.getFullYear();
        document.write(DayName[DayNumber] + "en den " + DateCur + " " + MonthName[MonthNumber] + " " + Year); //-->
      </script>
    </div>
    <a id="home" href="index.php"> >> Hem</a>
    <div id="mainmenu">
      <ul>
        <li><a href="index.php?page=6hours" >6 timmarna</a></li>
        <li><a href="index.php?page=24hours" >Dygnet</a></li>
        <li><a href="index.php?page=7days" >Veckan</a></li>
        <li><a href="index.php?page=months" >Månaderna</a></li>
      </ul>
    </div>
    <div id="center_menubar">Observationer under senaste</div>
  </div>
  <div id="content_head"></div>
  <div id="content">
    <div id="left_col">
      <?php
				//<h2 class="no_margin">Prognos</h2>
				//<div id="today_forecast" class="forecast"></div>
        //require_once('data/forecast_icon.txt')
				//<br /><hr />
      ?>
      <h3 class="no_margin">Diagram</h3>
      <hr />
      <ul class="sidemenu">
        <li><a href="index.php?page=24h">Dygnet</a></li>
        <li><a href="index.php?page=7days_graph">Veckan</a></li>
        <li><a href="index.php?page=28days">Månaden</a></li>
        <li><a href="index.php?page=rose_24hrs">Dygnets vindar</a></li>
        <li><a href="index.php?page=rose_7days">Veckans vindar</a></li>
        <li><a href="index.php?page=rose_28days">Månadens vindar</a></li>
        <li><a href="index.php?page=2024">2024</a></li>
        <li><a href="index.php?page=2023">2023</a></li>
        <li><a href="index.php?page=2022">2022</a></li>
        <li><a href="index.php?page=2021">2021</a></li>
        <li><a href="index.php?page=2020">2020</a></li>
        <li><a href="index.php?page=2019">2019</a></li>
        <li><a href="index.php?page=2018">2018</a></li>
        <li><a href="index.php?page=2017">2017</a></li>
        <li><a href="index.php?page=2016">2016</a></li>
        <li><a href="index.php?page=2015">2015</a></li>
        <li><a href="index.php?page=2014">2014</a></li>
        <li><a href="index.php?page=2013">2013</a></li>
      </ul>
      <br /><hr />
      <h3 class="no_margin">Väderlänkar</h3>
      <hr />
      <ul class="sidemenu">
        <li><a href="https://wow.metoffice.gov.uk/observations/details?site_id=a081e1d1-4b22-eb11-8441-0003ff597f33" target="_blank">Met Office WOW</a></li>
        <li><a href="https://www.temperatur.nu/burvik" target="_blank">temperatur.nu</a></li>
        <li><a href="https://www.smhi.se/q/Burvik/Uppsala/2718677" target="_blank">SMHI</a></li>
        <li><a href="https://www.windy.com/station/pws-f0666c36?59.900,18.388,8" target="_blank">Windy.com</a></li>
        <li><a href="https://www.klart.se/se/uppsala-l%C3%A4n/v%C3%A4der-burviks-gk/" target="_blank">klart.se</a></li>
        <li><a href="https://www.yr.no/nb/v%C3%A6rvarsel/daglig-tabell/2-2718677/Sverige/Uppsala/Uppsala%20Kommun/Burvik" target="_blank">yr.no</a></li>
        <li><a href="http://www.foreca.se/Sverige/Uppsala/Burvik" target="_blank">Foreca</a></li>
        <li><a href="https://www.wunderground.com/dashboard/pws/IUPPSALA9" target="_blank">WUnderground</a></li>
        <li><a href="http://www.wunderground.com/wundermap/?lat=59.9&lon=18.4&zoom=12" target="_blank">WunderMap</a></li>
      </ul>			
    </div>
    <div id="main_panel">
      <div id="weather_infos">
        <?php
          if (!isset($_GET['page'])) {
            require_once('index.txt');
          }
          else {
            $page = $_GET['page'];
            // echo '<h1>'.$page.'</h1>';
            switch ($page) {
              case "6hours":
                    require_once('data/6hrs.txt');
                    break;
              case "24hours":
                    require_once('data/24hrs.txt');
                    break;
              case "7days":
                    require_once('data/7days.txt');
                    break;
              case "months":
                    require_once('data/allmonths.txt');
                    break;
              case "24h":
                    echo '<p><img src="data/24hrs.png" alt="" title=""  /></p>';
                    break;
              case "24hfull_graph":
                    echo '<p><img src="data/24hrs_full_features.png" alt="" title=""  /></p>';
                    break;
              case "7days_graph":
                    echo '<p><img src="data/7days.png" alt="" title=""  /></p>';
                    break;
              case "28days":
                    echo '<p><img src="data/28days.png" alt="" title=""  /></p>';
                    break;
              case "2024":
                    echo '<p>2024</p>';
                    echo '<p><img src="data/2024.png" alt="" title=""  /></p>';
                    break;
              case "2023":
                    echo '<p>2023</p>';
                    echo '<p><img src="data/2023.png" alt="" title=""  /></p>';
                    break;
                case "2022":
                    echo '<p>2022</p>';
                    echo '<p><img src="data/2022.png" alt="" title=""  /></p>';
                    break;
              case "2021":
                    echo '<p>2021</p>';
                    echo '<p><img src="data/2021.png" alt="" title=""  /></p>';
                    break;
              case "2020":
                    echo '<p>2020</p>';
                    echo '<p><img src="data/2020.png" alt="" title=""  /></p>';
                    break;
              case "2019":
                    echo '<p>2019</p>';
                    echo '<p><img src="data/2019.png" alt="" title=""  /></p>';
                    break;
              case "2018":
                    echo '<p>2018</p>';
                    echo '<p><img src="data/2018.png" alt="" title=""  /></p>';
                    break;
              case "2017":
                    echo '<p>2017</p>';
                    echo '<p><img src="data/2017.png" alt="" title=""  /></p>';
                    break;
              case "2016":
                    echo '<p>2016</p>';
                    echo '<p><img src="data/2016.png" alt="" title=""  /></p>';
                    break;
              case "2015":
                    echo '<p>2015</p>';
                    echo '<p><img src="data/2015.png" alt="" title=""  /></p>';
                    break;
              case "2014":
                    echo '<p>2014</p>';
                    echo '<p><img src="data/2014.png" alt="" title=""  /></p>';
                    break;
              case "2013":
                    echo '<p>2013</p>';
                    echo '<p><img src="data/2013.png" alt="" title=""  /></p>';
                    break;
              case "rose_24hrs":
                    echo '<p><img src="data/rose_24hrs.png" alt="" title=""  /></p>';
                    break;
              case "rose_7days":
                    echo '<p><img src="data/rose_7days_nights.png" alt="" title=""  /></p>';
                    break;
              case "rose_28days":
                    echo '<p><img src="data/rose_28days_nights.png" alt="" title=""  /></p>';
                    break;
              case "humidex":
                    echo '<p><img src="data/humidex.png" alt="" title=""  /></p>';
                    break;
            };
          }
        ?>
      </div>
    </div>
    <div style="clear: both"></div>
  </div>
  <div id="content_footer"></div>
  <div id="footer">
    <a id="pywws-link" href="https://github.com/jim-easterbrook/pywws" target="_blank">&nbsp;</a>
    <p>&copy;<small> 2024</small> Burviksväder</p>
  </div>
  <div id="copyright">
    Provided By <a href="http://www.weatherbyyou.com/" target="_blank">Weather by You &copy; 2012</a>
  </div>
</div>
</body>
</html>
