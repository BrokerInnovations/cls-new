<?php

?>

<!DOCTYPE html>
<html ng-app='cls'>
<head>
    <title>Ticket Group</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/bootstrap.css" />
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
  <div>
    <header>
      <div class="row text-center header-class">
        <img src="images/homelogo.png" alt="Logo" class="text-center col-md-1 col-md-offset-1 col-sm-2 col-xs-3 img-responsive">
        <span class="col-md-9 col-sm-8 col-xs-6 padding-top">Centralized Login Screen</span>
        <span class="btn btn-sm col-md-1 col-sm-2 col-xs-3 padding-top">
          <a href="logout.php" class="logout">Logout</a>
        </span>
      </div>
    </header>
    <div class="row">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
        </div>
      </nav>
    </div>
    <div class="home">
      <div class="tool-wrapper" id="tool-wrapper">
      </div>
    </div>
  </div>

  <script>
  var search;
  function inputHandler() {
    search = document.getElementById('search').value;
    console.log(search);
  }
  var toolName = document.getElementById('tool-wrapper');
  var tools = [
          {
          name: 'PO Queue',
          link: 'http://brokerinnovations.net/ticketgroup/poqueue.php'
       },
        {
            name: 'Pricing Queue',
            link: 'http://brokerinnovations.net/ticketgroup/pricequeue.php'
        },
        {
            name: 'Pricing Tool',
            link: 'http://starstrucktickets.info/cws_pricing/'
        },
        {
            name: 'Live Order Queue',
            link: 'http://brokerinnovations.net/ticketgroup/liveorder/live_order.php'
        },
        {
            name: 'Live Order Queue User Management',
            link: 'http://brokerinnovations.net/ticketgroup/liveorder/add_user.php'
        },
        {
            name: 'SST Dropbox',
            link: 'http://www.dropbox.com'
        },
        {
            name: 'Bitrix24 / Tech Backlog',
            link: 'http://brokerinnovations.bitrix24.com/workgroups/group/8/tasks/'
        }
      ];
      tools.map(function(tool) {
        var aInside = document.createElement('a');
        aInside.setAttribute("href", tool.link);
        aInside.setAttribute("target", "_blank");
        var toola = toolName.appendChild(aInside);

        var toolDivInside = document.createElement('div');
        toolDivInside.className = "tool";
        var toolDiv = aInside.appendChild(toolDivInside);

        var toolRowInside = document.createElement('div');
        toolRowInside.className = "row tool-inner";
        var toolRowDiv = toolDivInside.appendChild(toolRowInside);


        var toolHInside = document.createElement('h4');
        var toolH = toolRowInside.appendChild(toolHInside).append(tool.name);

      });
  </script>

</body>
</html>
