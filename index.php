<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>GHreport</title>

    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/default.css" id="theme" rel="stylesheet">

</head>

<body class="fix-header">
    <div id="wrapper">
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav">
                <div class="sidebar-head">
                    <h3><span class="hide-menu">GHrport</span></h3>
                </div>
            </div>
        </div>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total reported Issues</h3>
                            <ul class="list-inline">
                                <li class="text-center"><span class="counter text-success">100</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Number of Current Month reported Issues</h3>
                            <ul class="list-inline">
                                <li class="text-center"><span class="counter text-info">100</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <h3 class="box-title">Reported Issues</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Issue Report</th>
                                            <th>Image Link</th>
                                            <th>Location name</th>
                                            <th>Location[latitude,longitude]</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                            $ussd = new ApplicationFunctions();
                                            $transactions = $ussd->getTransactions();
                                            //print_r($transactions);
                                            //var_dump($transactions);
                                            //echo $transactions['id'];
                                            //var_dump($transactions['id']);
                                            $i = 1;
                                            if($transactions != null){
                                                foreach ($transactions as $record) {
                                                    echo '<tr><td>'.$i.'</td>
                                                        <td class="txt-oflo">'.$record["sender_msisdn"].'</td>
                                                        <td class="txt-oflo">'.$record["recipient_msisdn"].'</td>
                                                        <td class="txt-oflo">'.$record['amount'].'</td>
                                                        <td class="txt-oflo">'.$record['timestamp'].'</td>
                                                        <td class="txt-oflo">'.$record['transactionID'].'</td>
                                                        <td class="txt-oflo">'.$record['debit_status'].'</td>
                                                        <td class="txt-oflo">'.$record['credit_status'].'</td></tr>';
                                                        $i++;
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; GHreport</footer>
        </div>

    </div>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
<script src="https://www.gstatic.com/firebasejs/4.8.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.0/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.0/firebase-storage.js">
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyColmH6hzWTA4awgNmv1cVYEAfp3qswJYs",
    authDomain: "ghanareport-8f09e.firebaseapp.com",
    databaseURL: "https://ghanareport-8f09e.firebaseio.com",
    projectId: "ghanareport-8f09e",
    storageBucket: "ghanareport-8f09e.appspot.com",
    messagingSenderId: "629066523099"
  };
  firebase.initializeApp(config);
</script>
</html>
