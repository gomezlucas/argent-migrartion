<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <title> Argent Sentinel | Argent
    </title>


    <!-- Fancy Box -->
    <link rel='stylesheet' id='fancybox.css-css' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' type='text/css' media='all' />
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js' id='fancybox.min.js-js'></script>

    <!-- Bootstrap CDN-->
    <link rel="stylesheet" id="bootstrap.min-css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css" media="all">
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' id='jquery-cdn-js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' id='bootstrap.min.js-cdn-js'></script>

     <!-- Custom styles -->
     <link rel="stylesheet" href="../assets/css/swiper.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js' id='fancybox.min.js-js'></script>



</head>

<body class="font-cairo">
<?php $current_dir = dirname($_SERVER['PHP_SELF']) ?>
    <!--  Navbar  -->
    <?php include('../layout/navbar.php'); ?>


    <main>
        <!-- <div class="crust-page-loader crust-animated-load" id="loader">
            <div class="crust-inner-loader">
                <div class="crust-loader-3">
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Header -->
        <section class="banner inner" style="background-image: url(https://www.argent.com/wp-content/uploads/2022/10/inner-banner.png);">
            <div class="container">
                <div class="text-center ">
                    <h1>Products</h1>
                </div>
            </div>
        </section>

        <section class="productswrap">
            <div class="container">
                <div class="main-wrap">
                    <!-- accordion -->
                    <div class="accordions" id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading-12">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse12">
                                    System and Applications </button>
                            </div>
                            <div id="collapse-12" class="collapse " aria-labelledby="heading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Tabs List -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">


                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-omega.php"; ?>">
                                                Argent Omega </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link "  href="<?php echo $current_dir."/product/argent-guardian.php"; ?>"   >
                                                Argent Guardian Ultra </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link  " href="<?php echo $current_dir."/product/argent-aws.php"; ?>"  >
                                                Argent AWS </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-console.php"; ?>" >
                                                Argent Console </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-sentinel.php"; ?>">
                                                Argent for SharePoint </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-exchange.php"; ?>" >
                                                Argent for Exchange </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-java.php"; ?>" >
                                                Argent for Java </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/356-2.php"; ?>" >
                                                Argent for SNMP </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link  " href="<?php echo $current_dir."/product/argent-for-storage.php"; ?>" >
                                                Argent for Storage </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-xenapp.php"; ?>" >
                                                Argent for XenApp </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-active-directory.php"; ?>" >
                                                Argent for Active Directory </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-sap.php"; ?>" >
                                                Argent for SAP </a>
                                        </li>

                                    </ul>
                                    <!-- Tabs List -->
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-11">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse11">
                                    Batch Job Automation </button>
                            </div>
                            <div id="collapse-11" class="collapse " aria-labelledby="heading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Tabs List -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">


                                        <li class="nav-item">
                                            <a class="nav-link  " href="<?php echo $current_dir."/product/batch-job-automation.php"; ?>"  >
                                                Argent Job Scheduler </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-worldview.php"; ?>"  >
                                                Argent WorldView </a>
                                        </li>

                                    </ul>
                                    <!-- Tabs List -->
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-13">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-13" aria-expanded="true" aria-controls="collapse13">
                                    Web and Intranet </button>
                            </div>
                            <div id="collapse-13" class="collapse show " aria-labelledby="heading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Tabs List -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">


                                        <li class="nav-item">
                                            <a class="nav-link active" href="<?php echo $current_dir."/product/argent-sentinel-2.php"; ?>" >
                                                Argent Sentinel </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-sentry-ultra.php"; ?>" >
                                                Argent Sentry Ultra </a>
                                        </li>

                                    </ul>
                                    <!-- Tabs List -->
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-14">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-14" aria-expanded="false" aria-controls="collapse14">
                                    Security and Compliance </button>
                            </div>
                            <div id="collapse-14" class="collapse " aria-labelledby="heading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Tabs List -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">


                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-compliance.php"; ?>"  >
                                                Argent for Compliance </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-security.php"; ?>"  >
                                                Argent for Security </a>
                                        </li>

                                    </ul>
                                    <!-- Tabs List -->
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-15">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-15" aria-expanded="false" aria-controls="collapse15">
                                    Virtualization </button>
                            </div>
                            <div id="collapse-15" class="collapse " aria-labelledby="heading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Tabs List -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">


                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-hyper-v.php"; ?>"  >
                                                Argent for Hyper-V </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-vmware.php"; ?>"  >
                                                Argent for VMware </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-xenserver.php"; ?>" >
                                                Argent for XenServer </a>
                                        </li>

                                    </ul>
                                    <!-- Tabs List -->
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-16">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-16" aria-expanded="false" aria-controls="collapse16">
                                    Enterprise Overviews </button>
                            </div>
                            <div id="collapse-16" class="collapse " aria-labelledby="heading-16" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Tabs List -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">


                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-boardroom.php"; ?>" >
                                                Argent BoardRoom </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link "  href="<?php echo $current_dir."/product/argent-commander.php"; ?>">
                                                Argent Commander </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link "  href="<?php echo $current_dir."/product/argent-global-manager.php"; ?>">
                                                Argent Global Manager </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link "  href="<?php echo $current_dir."/product/argent-reports.php"; ?>">
                                                Argent Reports </a>
                                        </li>

                                    </ul>
                                    <!-- Tabs List -->
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-17">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-17" aria-expanded="false" aria-controls="collapse17">
                                    Databases </button>
                            </div>
                            <div id="collapse-17" class="collapse " aria-labelledby="heading-17" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Tabs List -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">


                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-mysql.php"; ?>" >
                                                Argent for MySQL </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link "  href="<?php echo $current_dir."/product/argent-for-oracle.php"; ?>" >
                                                Argent for Oracle </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link "   href="<?php echo $current_dir."/product/argent-for-sql-server.php"; ?>">
                                                Argent for SQL Server </a>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo $current_dir."/product/argent-for-sybase.php"; ?>">
                                                Argent for Sybase </a>
                                        </li>

                                    </ul>
                                    <!-- Tabs List -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade " id="first283" role="tabpanel" aria-labelledby="first283-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview283" aria-controls="overview283" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#tool-sets283" aria-controls="tool-sets283" role="tab" data-toggle="tab">Tool Sets</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview283">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent Omega </h2>
                                        <p>Argent Omega is the next-generation Argent monitoring product.</p>
                                        <p>Argent Omega provides an easy-to-use interface with integrated AI learning.</p>
                                        <p>For a free 14-day evaluation simply&nbsp;<a href="https://help.argent.com/product_downloads/product_downloads_omega/" target="_blank" rel="noopener">click here</a></p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent Omega" data-src="../assets/images/products/omega_l1.png" target="_blank">
                                                <img src="../assets/images/products/omega_l1.png" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent Omega" data-src="../assets/images/products/omega_l2.png" target="_blank">
                                                <img src="../assets/images/products/omega_l2.png" alt="Image">
                                            </a>


                                        </div>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="tool-sets283">

                                        <!-- Inner Content Start -->
                                        <ul>
                                            <li>Argent Compliance Automator</li>
                                            <li>Argent Omega Baseline</li>
                                            <li>Argent Omega for Microsoft 365</li>
                                            <li>Argent Omega for SNMP</li>
                                            <li>Argent Omega for SQL Server</li>
                                            <li>Argent Omega Web Defender</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade  " id="first286" role="tabpanel" aria-labelledby="first286-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview286" aria-controls="overview286" role="tab" data-toggle="tab">Overview </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#windows286" aria-controls="windows286" role="tab" data-toggle="tab">Windows</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#linux-unix286" aria-controls="linux-unix286" role="tab" data-toggle="tab">Linux/Unix</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#iseries286" aria-controls="iseries286" role="tab" data-toggle="tab">iSeries</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview286">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent Guardian Ultra </h2>
                                        <p>Argent Guardian<sup>®</sup>&nbsp;Ultra is the world’s most scalable monitoring solution for all Windows, Linux, UNIX (AIX, HP-UX, SCO, Solaris), and iSeries Servers. Using a patented agent-optional architecture, Argent Guardian<sup>®</sup>&nbsp;Ultra monitors servers with or without installing agents, providing the power and flexibility to define the monitoring architecture to match customers’ exact needs.</p>
                                        <p>Argent Guardian<sup>®</sup>&nbsp;Ultra monitors the health and performance of servers and when issues arise, alerts are executed via Argent Console. Argent Console can be viewed using both a traditional GUI interface, as well as a web-based interface. Over a dozen different types of alerts can be executed using Argent Console, such as alphanumeric paging, email, and SMS. Argent also can take corrective measures, such as restarting stopped or stalled services and even rebooting servers. As a result, IT personnel are notified and issues are addressed automatically before end users even know problems exist. Argent makes SLA commitments easy to meet.</p>
                                        <p>Find out why more than 2,000 organizations worldwide rely on Argent to enhance the reliability and performance of their enterprise.</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent Guardian Ultra" data-src="../assets/images/products/agu_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/agu_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent Guardian Ultra" data-src="../assets/images/products/console_l_b-1.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-1.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Agent-Optional Architecture</h3>
                                        <p>Using a unique and patented agent-optional architecture, Argent Guardian® Ultra is the leading solution for monitoring all aspects of the enterprise from a central console. Argent Guardian® Ultra supports all Windows, Linux, Unix and iSeries systems. The product is delivered with powerful, pre-defined Rule Sets containing over 10,000 Rules and pre-defined reports enabling customers to immediately maximize the reliability of production servers and applications through the automatic detection and correction of problems and issues. For example, Service Level Agreement reports can be generated each day and then automatically emailed to management.</p>
                                        <h3>Lower Support Costs And Increased Reliability</h3>
                                        <p>Argent Guardian® Ultra decreases the Total Cost of Ownership (TCO) while at the same time increasing the reliability of production servers, all from a central console that can be viewed using both a traditional GUI interface, as well as a web-based interface. Over 10,000 pre-defined Rules enable customers to effectively and comprehensively monitor all production servers within two hours of installation.</p>
                                        <h3>Flexible Architecture: Scales To Meet Requirements</h3>
                                        <p>Only Argent supports a number of different monitoring architectures. Install Argent Guardian® Ultra on a single server and, in a matter of minutes, monitor all the servers in the enterprise. For larger organizations, install Regional Agents for greater flexibility. For customers with unique needs, Argent Guardian® Ultra supports both remote (agentless) and agent-based monitoring in the same domain. As a result, whether there are 10 servers or 10,000 servers, Argent Guardian® Ultra is the ideal solution.</p>
                                        <p>Argent is the choice of four of the five largest law firms on the world.</p>
                                        <h3>Unique n-Tier Architecture</h3>
                                        <p>No other product has Argent Guardian® Ultra’s true n-tier architecture. Monitoring Groups and SuperConsoles can easily be created to group servers along business lines, geographic location, or server type; the possibilities are unlimited.</p>
                                        <p>Only Argent Console enables customers to view all outstanding alerts from all Monitoring Groups worldwide on a central console as well as issue alerts when problems arise. For example, servers can be grouped by type – all SQL Servers in one monitoring environment, all Exchange Servers in another, all IIS Servers in another, and so on and yet still view them all on the same console.</p>
                                        <h3>A Total Solution</h3>
                                        <p>Argent Guardian® Ultra is a complete and integrated solution. Unlike other vendors who sell separate consoles and GUIs, Argent Guardian® Ultra provides everything needed to completely monitor the enterprise at one cost-effective price. Argent Guardian® Ultra integrates with help desk solutions such as Remedy, as well as all common hardware monitors, such as Dell OpenManage and IBM Director.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="windows286">

                                        <!-- Inner Content Start -->
                                        <h3>Windows Monitoring</h3>
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically.</strong></p>
                                        <h4>CPU</h4>
                                        <ul>
                                            <li>CPU overload</li>
                                            <li>Processor bottleneck</li>
                                            <li>Excessive CPU utilization by process</li>
                                            <li>Processor errors</li>
                                        </ul>
                                        <h4>Disk</h4>
                                        <ul>
                                            <li>Free space</li>
                                            <li>Used space</li>
                                            <li>Disk queue length</li>
                                            <li>Disk I/O by processes</li>
                                        </ul>
                                        <h4>Memory</h4>
                                        <ul>
                                            <li>Available memory</li>
                                            <li>Excessive memory usage by processes</li>
                                            <li>Memory shortage</li>
                                        </ul>
                                        <h4>Network</h4>
                                        <ul>
                                            <li>Network bottleneck</li>
                                            <li>Network availability</li>
                                            <li>Inbound traffic</li>
                                            <li>Outbound traffic</li>
                                            <li>Network errors</li>
                                            <li>Cluster network availability</li>
                                            <li>Cluster network interface availability</li>
                                        </ul>
                                        <h4>Processes</h4>
                                        <ul>
                                            <li>Hung processes</li>
                                            <li>Key application processes</li>
                                        </ul>
                                        <h4>Service Level Agreement</h4>
                                        <ul>
                                            <li>Windows API</li>
                                            <li>TCP/IP Ping</li>
                                            <li>Port Status Checks</li>
                                            <li>File Share Accessibility</li>
                                            <li>SSH Logons</li>
                                        </ul>
                                        <h4>Services</h4>
                                        <ul>
                                            <li>ArcServe</li>
                                            <li>Backup Exec</li>
                                            <li>DB2</li>
                                            <li>DHCP Client/DHCP Server</li>
                                            <li>Lotus Domino</li>
                                            <li>IBM Websphere HTTP</li>
                                            <li>IIS</li>
                                            <li>Oracle</li>
                                            <li>Routing And Remote Access</li>
                                            <li>Print Spooler</li>
                                            <li>SQL Server</li>
                                            <li>ICA Browser</li>
                                            <li>Terminal Services</li>
                                        </ul>
                                        <h4>System</h4>
                                        <ul>
                                            <li>Availability</li>
                                            <li>Registry Keys</li>
                                            <li>System Uptime</li>
                                            <li>Service Pack Levels</li>
                                            <li>PowerShell/WMI Connectivity</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="linux-unix286">

                                        <!-- Inner Content Start -->
                                        <h3>Linux/Unix Monitoring</h3>
                                        <p>Because of Argent’s unique architecture, Argent installs in under 10 minutes and is monitoring your environment in under an hour.<br>
                                            Argent gives you the choice of any – or all – of the following seven methods to monitor your Linux and Unix servers:</p>                                        
                                        <p><img decoding="async" loading="lazy" class="alignnone size-full wp-image-657" src="../assets/images/products/agu_linux.png" alt="" width="604" height="338" srcset="../assets/images/products/agu_linux.png 604w, ../assets/images/products/agu_linux-300x168.png 300w" sizes="(max-width: 604px) 100vw, 604px"></p>
                                        <h3>Centrally Located Scripts – No Confusion</h3>
                                        <p>Argent holds all Unix and Linux Rule Scripts on central W200x servers, so all your Rule Scripts for all Unix and Linux platforms are centrally maintained – easy to find, easy to use, and easy to backup. No more searching for the machine holding that critical but elusive script, and no more confusion with 10 different versions of the same script on 10 different servers.</p>
                                        <p>Argent gives you the choice of any – or all – of seven methods to access your Unix and Linux servers.</p>
                                        <h3>Script-based Flexibility – No Learning Curve</h3>
                                        <p>Argent monitors all Unix and Linux platforms using Rule Scripts, providing Customers with complete flexibility and ease of use. Argent provides a complete set of Rule Scripts for all platforms covering all your common, day-to-day monitoring needs. And you can easily add to your own scripts.</p>
                                        <h3>Total Testing – Saving You Time</h3>
                                        <p>Argent provides total testing for all scripts before they go live – even today most vendors have no test facilities or test logs. Argent is designed for the real world, where you reside.</p>
                                        <h3>Partial Rule List</h3>
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, Argent handles over 95% of your day-to-day needs.</p>
                                        <h4>CPU</h4>
                                        <ul>
                                            <li>CPU utilization</li>
                                            <li>CPU trend analysis</li>
                                            <li>1-minute load average</li>
                                            <li>Excessive CPU by process</li>
                                        </ul>
                                        <h4>Disk</h4>
                                        <ul>
                                            <li>Free disk space</li>
                                            <li>Used disk space</li>
                                            <li>Swap space used</li>
                                            <li>Available swap space</li>
                                        </ul>
                                        <h4>Memory</h4>
                                        <ul>
                                            <li>Free memory</li>
                                            <li>Excessive memory usage by process</li>
                                        </ul>
                                        <h4>Network</h4>
                                        <ul>
                                            <li>Network bandwidth</li>
                                            <li>Network traffic</li>
                                            <li>Network issues</li>
                                            <li>Network performance</li>
                                            <li>Network connections</li>
                                        </ul>
                                        <h4>Processes</h4>
                                        <ul>
                                            <li>Oracle user processes</li>
                                            <li>Running processes</li>
                                            <li>Sleeping processes</li>
                                            <li>Zombie processes</li>
                                        </ul>
                                        <h4>Databases</h4>
                                        <ul>
                                            <li>Oracle</li>
                                            <li>MySQL</li>
                                            <li>Sybase</li>
                                        </ul>
                                        <h4>System</h4>
                                        <ul>
                                            <li>TCP/IP Ping</li>
                                            <li>DB2 port check</li>
                                            <li>Oracle listener port check</li>
                                            <li>SMTP port check</li>
                                            <li>POP3 protocol verification</li>
                                            <li>SMTP protocol verification</li>
                                            <li>Server response time</li>
                                            <li>Connected users</li>
                                            <li>OS level</li>
                                        </ul>
                                        <h4>Daemons</h4>
                                        <ul>
                                            <li>lpsched</li>
                                            <li>NFS biod</li>
                                            <li>NFS lockd</li>
                                            <li>NFS mountd</li>
                                            <li>NFS nfsd</li>
                                            <li>NFS statd</li>
                                        </ul>
                                        <h4>Miscellaneous</h4>
                                        <ul>
                                            <li>System log</li>
                                            <li>Boot log</li>
                                            <li>Cron log</li>
                                            <li>FTP log</li>
                                            <li>Sendmail log</li>
                                            <li>Postfix log</li>
                                            <li>NTP log</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="iseries286">

                                        <!-- Inner Content Start -->
                                        <h3>iSeries/AS400 Monitoring</h3>
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically.</strong></p>
                                        <h4>CPU</h4>
                                        <ul>
                                            <li>CPU utilization</li>
                                            <li>Job CPU usage</li>
                                        </ul>
                                        <h4>Disk</h4>
                                        <ul>
                                            <li style="text-align: left;">Free disk space</li>
                                            <li style="text-align: left;">Used disk space</li>
                                        </ul>
                                        <h4>Jobs</h4>
                                        <ul>
                                            <li>Job not active</li>
                                            <li>Job state</li>
                                            <li>Job Queue status</li>
                                            <li>Batch jobs ended with</li>
                                            <li>Batch jobs ending</li>
                                            <li>Batch jobs held</li>
                                            <li>Batch jobs held on job</li>
                                            <li>Batch jobs on held job</li>
                                            <li>Batch jobs on unassigned</li>
                                            <li>Batch jobs running</li>
                                            <li>Batch jobs scheduled</li>
                                            <li>Batch jobs waiting</li>
                                        </ul>
                                        <h4>Network</h4>
                                        <p>Line/Control Unit/Device/Network Interface/Network Server status<br>
                                            TCP stack not active</p>
                                        <h4>System</h4>
                                        <ul>
                                            <li>Oracle</li>
                                            <li>Server response time</li>
                                            <li>TCP/IP ping</li>
                                            <li>Library size</li>
                                            <li>Concurrent users</li>
                                            <li>Messages in Message Queue</li>
                                            <li>Output Queue status</li>
                                            <li>Subsystem not active</li>
                                            <li>System ASP utilization</li>
                                            <li>System Pool size</li>
                                            <li>System Pool status</li>
                                            <li>Job Audit log</li>
                                            <li>Journal Audit log</li>
                                            <li>QHST log</li>
                                            <li>Concurrent users</li>
                                            <li>Additional storage too low</li>
                                            <li>ASP system storage too low</li>
                                            <li>Auxiliary storage lower limit too low</li>
                                            <li>Current unprotected storage used too high</li>
                                            <li>Main storage size too low</li>
                                            <li>Main storage size of all pools too low</li>
                                            <li>Maximum unprotected storage too high</li>
                                            <li>Overflow storage too low</li>
                                            <li>Total auxiliary storage too low</li>
                                            <li>Users signed off</li>
                                            <li>Users signed off with printer output</li>
                                            <li>Users signed on</li>
                                            <li>Users suspended due to group jobs</li>
                                            <li>Users suspended due to SYSREQ</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first288" role="tabpanel" aria-labelledby="first288-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview288" aria-controls="overview288" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored288" aria-controls="whats-monitored288" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview288">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent AWS </h2>
                                        <p>AWS is new, AWS is exciting, and AWS is grossly undermanaged.</p>
                                        <p>While Amazon has done a superb job, an independent, agnostic, and even-handed outside auditor and monitor is essential for all production AWS implementation.</p>
                                        <p>This is precisely what the new Argent for AWS provides.</p>
                                        <p>AWS is growing by the day, and it is getting more and more difficult to have a global view of your entire AWS environment.</p>
                                        <p>Argent for AWS provides the following baseline facilities:</p>
                                        <ul>
                                            <li>Ability To Monitor All Aspects Exposed By AWS Console And AWS SDK</li>
                                            <li>Integration With Argent Console, The World’s Leading Alerting Console</li>
                                            <li>Integration With Argent Predictor For Long-Term Trend Analysis (Not Just 14 Days)</li>
                                            <li>Capable Of Native Monitoring of Windows And Linux Applications</li>
                                            <li>Comprehensive S3 Monitoring</li>
                                            <li>Complete Log Monitoring On S3, EBS Volume Or EC2 Instance Store Volume</li>
                                        </ul>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent AWS" data-src="../assets/images/products/agu_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/agu_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent AWS" data-src="../assets/images/products/console_l_b-1.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-1.jpg" alt="Image">
                                            </a>


                                        </div>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored288">

                                        <!-- Inner Content Start -->
                                        <h4>EC2</h4>
                                        <ul>
                                            <li>Instance State</li>
                                            <li>Instance Status</li>
                                            <li>System Status</li>
                                            <li>CPU</li>
                                            <li>Disk Read Operations</li>
                                            <li>Disk Write Operations</li>
                                            <li>Disk Read Bytes</li>
                                            <li>Disk Write Bytes</li>
                                            <li>Network Incoming Bytes</li>
                                            <li>Network Outgoing Bytes</li>
                                            <li>Network Incoming Packets</li>
                                            <li>Network Outgoing Packets</li>
                                        </ul>
                                        <h4>EC2 Credits</h4>
                                        <ul>
                                            <li>CPU Credit Usage</li>
                                            <li>CPU Credit Balance</li>
                                        </ul>
                                        <h4>EC2 Operating System</h4>
                                        <ul>
                                            <li>Windows Performance Rules</li>
                                            <li>Windows Service Rules</li>
                                            <li>Windows Event Rules</li>
                                            <li>Windows File Log Rules</li>
                                            <li>Linux Script Rules</li>
                                            <li>LINUX File Log Rules</li>
                                        </ul>
                                        <h4>Elastic Beanstalk Application</h4>
                                        <ul>
                                            <li>Health Status</li>
                                            <li>Health Color</li>
                                            <li>App Events</li>
                                        </ul>
                                        <h4>RDS</h4>
                                        <p>Database Status<br>
                                            RDS Events<br>
                                            DB Connections<br>
                                            Free Storage Space<br>
                                            CPU<br>
                                            Freeable Memory<br>
                                            Swap Usage<br>
                                            IO Disk Queue Depth<br>
                                            IO Read IO OP<br>
                                            IO Write IO OP<br>
                                            IO Read Throughput<br>
                                            IO Write Throughput<br>
                                            Network Receive Throughput<br>
                                            Network Transmit Throughput<br>
                                            Replica Lag</p>
                                        <h4>RDS Credits</h4>
                                        <ul>
                                            <li>CPU Credit Usage</li>
                                            <li>CPU Credit Balance</li>
                                        </ul>
                                        <h4>DynamoDB</h4>
                                        <ul>
                                            <li>Table Row Count</li>
                                            <li>Table Size</li>
                                            <li>Conditional Check Failed Requests</li>
                                            <li>Consumed Read Capacity Units</li>
                                            <li>Consumed Write Capacity Units</li>
                                            <li>Provisioned Read Capacity Units</li>
                                            <li>Provisioned Write Capacity Units</li>
                                            <li>IO Read Throttle Events</li>
                                            <li>Query Returned Item Count</li>
                                            <li>Stream Returned Bytes</li>
                                            <li>Stream Returned Records Count</li>
                                            <li>IO Successful Request Latency</li>
                                            <li>IO Successful Request Count</li>
                                            <li>System Errors</li>
                                            <li>IO Throttled Requests</li>
                                            <li>User Errors</li>
                                            <li>IO Write Throttle Events</li>
                                        </ul>
                                        <h4>S3</h4>
                                        <ul>
                                            <li>S3 Object</li>
                                            <li>S3 Log</li>
                                            <li>Bucket Size</li>
                                            <li>Object Count</li>
                                        </ul>
                                        <h4>CloudWatch</h4>
                                        <ul>
                                            <li>All CloudWatch Metrics</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first290" role="tabpanel" aria-labelledby="first290-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview290" aria-controls="overview290" role="tab" data-toggle="tab">Overview </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#alerts290" aria-controls="alerts290" role="tab" data-toggle="tab">Alerts</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#supermaps290" aria-controls="supermaps290" role="tab" data-toggle="tab">SuperMaps</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview290">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent Console </h2>
                                        <p>Argent Console is the world’s leading alerting console.</p>
                                        <p>With Argent Console, Alerts can be consolidated from customer applications, third-party products, as well as from all Argent products.</p>
                                        <p>All Alerts and alarms from customer applications and third-party products can be consolidated using Argent’s powerful ActiveX and XML interfaces. Any number of third party packages can send Alerts directly to the console as well.</p>
                                        <p>Argent Console is the perfect solution for a customer’s central console. Argent Console allows tracking of and creates Alerts about all events as they occur on the network.</p>
                                        <p>Enterprise Application View</p>
                                        <p>What Argent provides today is an Enterprise View of Customer’s critical applications. Rather than just monitoring the CPU load in isolation, Argent integrates this single metric into a custom weighted scheme.</p>
                                        <p>For example, take an Exchange 2007 environment running on four servers.</p>
                                        <p>If one server fails, then Argent reports the Exchange environment has been degraded by 20% and sends out one set of Argent Alerts.</p>
                                        <p>If two servers fail, Argent Enterprise View reports a 50% degradation and send out additional Argent Alerts.</p>
                                        <p>If three servers fail, then Argent Enterprise View will report a 85% degradation.</p>
                                        <p>Customers can adjust the parameters to meet their needs. The impact of a single event can be entirely different than that of multiple events.</p>
                                        <p>Argent Enterprise View looks at all of the application’s critical components. It does not matter if the various components are distributed throughout the world.</p>
                                        <p>Argent monitors all aspects of your critical applications.</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent Console" data-src="../assets/images/products/aev1.jpg" target="_blank">
                                                <img src="../assets/images/products/aev1.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Unprecedented SNMP Support</h3>
                                        <p>Argent Console provides a new level of support to receive alarms and Alerts from any SNMP device and record it on the central Argent Console.</p>
                                        <h3>Unlimited Alerting And Alert Escalation</h3>
                                        <p>Argent Console has long been known for its powerful array of Alerts such as Email Alerts, Alphanumeric Pager Alerts, Network Message Alerts, SMS Alerts, SQL Alerts (that fire customer created SQL scripts as an Alert), and Service Alerts (to stop and restart Windows Services).</p>
                                        <p>These Alerts can be used with pre-existing applications — the alarm is simply sent to Argent Console, the customer specifies which alert is to be fired and Argent does the rest.</p>
                                        <p>Escalating Alerts allow customers the ability to specify a detailed alerting sequence for any particular issue. For instance, if employee X is alerted via email and does not respond, then employee Z will be alerted via pager, etc. Customers have complete control over escalation details including who will be notified and how the alert will be sent.</p>
                                        <h3>Ease Of Use</h3>
                                        <p>The Total Support Interface, part of Argent Console, enables the sending of any customized Alerts directly to the console.</p>
                                        <p>Because of the universal nature of Argent Console, the ActiveX interface allows the sending of alarms and Alerts from literally any language, from PERL to Visual Basic, to C++.</p>
                                        <p>The Total Support Interface provides complete code samples, technical notes, and engineering notes and an SDK.</p>
                                        <h3>Automation</h3>
                                        <p>Argent introduces a powerful new automatic report distribution facility to allow the receiving of specific reports that are considered important to the customer. Reports can be scheduled of the customer’s top-10 issues or weekly reports of the top-10 problematic servers. And of course, the revolutionary Argent calendaring features, popular in Argent AT and Argent Job Scheduler, are fully supported.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="alerts290">

                                        <!-- Inner Content Start -->
                                        <p>Argent divides Alerts into two categories, <strong>Notification</strong> and <strong>Correction</strong> Alerts.</p>
                                        <p>The following table lists some of the installed Alerts.</p>
                                        <h4>Notification Alerts</h4>
                                        <ul>
                                            <li>Alphanumeric Pager</li>
                                            <li>Email</li>
                                            <li>Network Message</li>
                                            <li>SMS</li>
                                            <li>System Alarm</li>
                                            <li>Third-Party Help Desk</li>
                                            <li>Twitter</li>
                                            <li>Unix Action Script</li>
                                            <li>Windows Event Log</li>
                                        </ul>
                                        <h4>Correction Alerts</h4>
                                        <ul>
                                            <li>iSeries Commands</li>
                                            <li>ODBC/SQL Query</li>
                                            <li>PowerShell Action Scripts</li>
                                            <li>Service Start/Stop/Restart</li>
                                            <li>SNMP</li>
                                            <li>System Commands</li>
                                            <li>System Reboot</li>
                                            <li>Linux/Unix Action Scripts</li>
                                            <li>WMI Action Scripts</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="supermaps290">

                                        <!-- Inner Content Start -->
                                        <p>SuperMaps lets you quickly see the Alerts for your entire enterprise</p>
                                        <p>Any image can be used as a SuperMap — geographical maps, network diagrams, floor plans or a even a digital photo of a server rack</p>
                                        <p>SuperMaps represents Alerts as dots, varying from red, orange, yellow, or green — all configurable of course</p>
                                        <p>Individual SuperMaps can also be hot-linked together, allowing you to effectively zoom in from macro to micro within a few mouse clicks</p>
                                        <p>SuperMaps can also be viewed and shared using a web browser through Argent’s revolutionary Web 2.0 dashboard — Argent Commander</p>
                                        <p><img decoding="async" loading="lazy" src="../assets/images/products/supermaps.png" alt="" width="949" height="307" class="alignnone size-full wp-image-683" srcset="../assets/images/products/supermaps.png 949w, ../assets/images/products/supermaps-300x97.png 300w, ../assets/images/products/supermaps-768x248.png 768w" sizes="(max-width: 949px) 100vw, 949px"></p>
                                        <p>To discuss SuperMaps with an Argent professional, please email<br>
                                            <a href="mailto:SuperMaps@Argent.com">SuperMaps@Argent.com</a>
                                        </p>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first292" role="tabpanel" aria-labelledby="first292-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview292" aria-controls="overview292" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#instant-best-practices292" aria-controls="instant-best-practices292" role="tab" data-toggle="tab">Instant Best Practices</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored292" aria-controls="whats-monitored292" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview292">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for SharePoint </h2>
                                        <div>
                                            <div>All SharePoint environments need complete automation and Instant Best Practices.</div>
                                            <div>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique <strong>Instant Best Practices</strong> is essential – who has the time to read White Papers?</div>
                                            <div>Keep your worldwide SharePoint environment running smoothly with Argent for SharePoint – Instant Best Practices, Automation, Crystal Reports, Management, and Monitoring all in one fully-integrated solution.</div>
                                            <div>If you’re serious about SharePoint, you’ll need a serious solution with Instant Best Practices.</div>
                                        </div>
                                        <p>For a live demo site, visit
                                            <a href="http://help.argent.com/#e_sp" target="_blank">http://help.argent.com/#e_sp</a>
                                        </p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for SharePoint" data-src="../assets/images/products/sp_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/sp_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for SharePoint" data-src="../assets/images/products/console_l_b-1.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-1.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <div>
                                            <h3>Details</h3>
                                            <div>Argent for SharePoint monitors and reports on SharePoint baselines, such as crawling properties, SSPs, fat documents, web applications, and site counts.</div>
                                            <div>Argent for SharePoint comes with pre-defined reports that can be automatically emailed every morning to show the actual health and performance of SharePoint.</div>
                                            <h3>Understanding SharePoint Monitoring</h3>
                                            <div>The do’s and dont’s of monitoring SharePoint are readily accessible as a free Argent White Paper</div>
                                        </div>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="instant-best-practices292">

                                        <!-- Inner Content Start -->
                                        <h3>What are Instant Best Practices?</h3>
                                        <p>Instant Best Practices are Argent’s unique technology that combines the best expert knowledge into one fully-integrated solution.</p>
                                        <p>Until Instant Best Practices, you’d have to read tedious White Papers, download and install quirky scripts, install so-called “Management” packs, find a slew of vendors’ add-ons, etc, etc, etc.</p>
                                        <p>All these tedious chores took you time and not to mention all the finger pointing from different vendors.</p>
                                        <p>Rather than being a manager and looking to move up the food chain, you were stuck wasting your time doing the donkey work of trying to make yet-another badly written script work for your environment.</p>
                                        <h4>Argent Instant Best Practices – Ready For Tomorrow</h4>
                                        <p>With Argent’s unique technology, hassles are a thing of the past.</p>
                                        <p>There are a lot of critical variables, thresholds, metrics and components you need to be on top of.</p>
                                        <p>But there’s the rub – <strong>what variables should you monitor?</strong></p>
                                        <p>Even after you’ve read all the dozens of Technical Papers, Tuning Guides, downloaded all the scripts, you now have to decide what values make sense.</p>
                                        <p>With Argent’s Instant Best Practices, all the donkey work is done for you – Instant Best Practices has all the critical variables and values defined.</p>
                                        <p>In one click you can have Argent Instant Best Practices working for you.</p>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored292">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box,<strong> Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems —<strong> automatically.</strong></p>
                                        <h4>MOSS Configuration</h4>
                                        <ul>
                                            <li>Excessive Keywords Per Site</li>
                                            <li>Excessive Managed Properties</li>
                                            <li>Excessive SSPs</li>
                                            <li>Excessive User Profiles</li>
                                        </ul>
                                        <h4>MOSS Search</h4>
                                        <ul>
                                            <li>Deep Crawls</li>
                                            <li>Excessive Crawls Per SSP</li>
                                        </ul>
                                        <h4>SharePoint Configuration</h4>
                                        <ul>
                                            <li>Excessive Web Applications</li>
                                        </ul>
                                        <h4>SharePoint File System</h4>
                                        <ul>
                                            <li>Excessive Fat Documents</li>
                                            <li>Excessive Flat Folders</li>
                                        </ul>
                                        <h4>SharePoint Sites</h4>
                                        <ul>
                                            <li>Excessive Number of Subsites</li>
                                            <li>Excessive Number of Sites</li>
                                            <li>Overloaded Web Sites</li>
                                        </ul>
                                        <h4>Connectivity</h4>
                                        <ul>
                                            <li>Windows NetRemote TOD API Check</li>
                                            <li>TCP/IP Ping</li>
                                        </ul>
                                        <h4>Performance</h4>
                                        <ul>
                                            <li>CPU Utilization</li>
                                            <li>Free Disk Space</li>
                                            <li>Memory Utilization</li>
                                            <li>Network Utilization</li>
                                            <li>SharePoint Search Query Count</li>
                                        </ul>
                                        <h4>PowerShell Management</h4>
                                        <ul>
                                            <li>Active Directory Disabled Accounts</li>
                                            <li>Unauthorized Network Shares</li>
                                        </ul>
                                        <h4>Services</h4>
                                        <ul>
                                            <li>SharePoint Search Service</li>
                                            <li>SharePoint Timer Service</li>
                                            <li>SharePoint Admin Service</li>
                                            <li>SharePoint Writer Service</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first294" role="tabpanel" aria-labelledby="first294-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview294" aria-controls="overview294" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#instant-best-practices294" aria-controls="instant-best-practices294" role="tab" data-toggle="tab">Instant Best Practices</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored294" aria-controls="whats-monitored294" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview294">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for Exchange </h2>
                                        <div>
                                            <div>Argent for Exchange is more than just a monitoring solution — like all Argent products, Argent for Exchange is a complete automation solution, automating all the essential but labor-intensive chores that all customers must perform to ensure Exchange runs smoothly.</div>
                                            <div>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique Instant Best Practices is essential – who has the time to read White Papers?</div>
                                            <div>The most significant aspect of Argent for Exchange is the use of a number of different approaches to monitoring Exchange: PowerShell, Exchange Management Shell, WMI, and classic Windows APIs are all used in different parts of the product. Think of Argent for Exchange as four or five discrete products all integrated into one super-product.</div>
                                        </div>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for Exchange" data-src="../assets/images/products/sp_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/sp_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for Exchange" data-src="../assets/images/products/console_l_b-1.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-1.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <div>
                                            <h3>Details</h3>
                                            <div>Exchange 2016 and below are fully supported — Argent for Exchange is tightly integrated with the Exchange Management Shell, and it can automate all the Exchange administration work. Also, any future Microsoft update on Exchange can easily be added.</div>
                                            <div>.NET environments are also fully supported by incorporating a powerful Argent PowerShell engine. Any custom Exchange script, either PowerShell or WMI, can easily be added.</div>
                                            <div>Product configuration is greatly simplified. No need to explicitly configure customer profiles, etc. Argent for Exchange also takes advantage of the auto-discover function in Exchange without tying to an explicit Exchange Client Access Server. In contrast, in other products, customers may need to configure customer profiles, which are customer-specific and confusing when the logon the customer uses is different from the monitoring service account.</div>
                                            <div>With Argent for Exchange, customers can now monitor Exchange from the viewpoint of an end user – the product supports the complete set of client-access protocols used in Exchange, namely:</div>
                                            <div>Round Trip Test</div>
                                            <div>MAPI interface, which is the default Exchange protocol for Outlook</div>
                                            <div>Outlook Anywhere, which is the mobile Exchange protocol for Outlook</div>
                                            <div>Outlook Web Access (OWA)</div>
                                            <div>Outlook Web Services</div>
                                            <div>With Argent for Exchange, customers can now monitor Exchange server baselines including DNS, Active Directory, Service Health, System Health and System Messages.</div>
                                            <div>With Argent for Exchange, customers can now monitor Exchange server infrastructure especially the Transport functionalities.</div>
                                            <div>With Argent for Exchange, customers can monitor Exchange mailbox servers as a whole, as well as the individual mailbox. The information is guaranteed to be consistent with the data reported by Exchange management tools.</div>
                                            <div>With Argent for Exchange, customers can now monitor mail flow by directly analyzing message tracking log. We detect bad mail as well as providing statistics on traffic of individual account.</div>
                                            <div><strong>With Argent for Exchange, customers can still monitor legacy Exchange 2003/Exchange 2000/Exchange 5.5 system through custom WMI rules, legacy protocol rules and legacy MAPI rules. This can help with a smooth migration process.</strong></div>
                                        </div>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="instant-best-practices294">

                                        <!-- Inner Content Start -->
                                        <h3>What are Instant Best Practices?</h3>
                                        <p>Instant Best Practices are Argent’s unique technology that combines the best expert knowledge into one fully-integrated solution.</p>
                                        <p>Until Instant Best Practices, you’d have to read tedious White Papers, download and install quirky scripts, install so-called “Management” packs, find a slew of vendors’ add-ons, etc, etc, etc.</p>
                                        <p>All these tedious chores took you time and not to mention all the finger pointing from different vendors.</p>
                                        <p>Rather than being a manager and looking to move up the food chain, you were stuck wasting your time doing the donkey work of trying to make yet-another badly written script work for your environment.</p>
                                        <h3>Argent Instant Best Practices – Ready For Tomorrow</h3>
                                        <p>With Argent’s unique technology, hassles are a thing of the past.</p>
                                        <p>There are a lot of critical variables, thresholds, metrics and components you need to be on top of.</p>
                                        <p>But there’s the rub –<strong> what variables should you monitor?</strong></p>
                                        <p>Even after you’ve read all the dozens of Technical Papers, Tuning Guides, downloaded all the scripts, you now have to decide what values make sense.</p>
                                        <p>With Argent’s Instant Best Practices, all the donkey work is done for you – Instant Best Practices has all the critical variables and values defined.</p>
                                        <p>In one click you can have Argent Instant Best Practices working for you.</p>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored294">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically.</strong></p>
                                        <h4>System Performance</h4>
                                        <ul>
                                            <li>CPU Utilization</li>
                                            <li>Free Disk Space</li>
                                            <li>Memory Utilization</li>
                                            <li>Network Utilization</li>
                                        </ul>
                                        <h4>End-to-End User Experience</h4>
                                        <ul>
                                            <li>Mail Flow (Round Trip) Latency</li>
                                            <li>MAPI Connectivity and Latency</li>
                                            <li>Outlook Anywhere Latency</li>
                                            <li>Outlook Web Access (OWA) Latency</li>
                                        </ul>
                                        <h4>Infrastructure</h4>
                                        <ul>
                                            <li>DNS Resolution Time</li>
                                            <li>Active Directory Logon Delays</li>
                                            <li>System Health</li>
                                            <li>Service Health</li>
                                            <li>Excessive Message Count In Queue</li>
                                            <li>Exchange Connector Down</li>
                                            <li>ActiveSync Testing</li>
                                            <li>Exchange Search Testing</li>
                                        </ul>
                                        <h4>Information Storage</h4>
                                        <ul>
                                            <li>Mailbox Database Size Too Large</li>
                                            <li>Mailbox Size Limit Exceeded</li>
                                            <li>Mailbox Message Count Exceeded</li>
                                            <li>Mailbox Inactivity</li>
                                            <li>Mailbox Quota Exceeded</li>
                                            <li>Public Folder Database Too Large</li>
                                            <li>Public Folder Size Limit Exceeded</li>
                                            <li>Public Folder Message Count Exceeded</li>
                                            <li>Public Folder Inactivity</li>
                                        </ul>
                                        <h4>Exchange Mail Flow</h4>
                                        <ul>
                                            <li>Undeliverable Email Events</li>
                                            <li>Delayed Email Events</li>
                                            <li>Delivery Status Notification Events</li>
                                            <li>Message Delivery Failed Events</li>
                                            <li>Maximum Delivery Attempts Exceeded Events</li>
                                            <li>Excessive Emails Sent From An Account</li>
                                            <li>Excessive Emails Received By An Account</li>
                                        </ul>
                                        <h4>Exchange Accounts</h4>
                                        <ul>
                                            <li>Account Creation</li>
                                            <li>Account Modification</li>
                                            <li>Account Deletion</li>
                                        </ul>
                                        <h4>Services</h4>
                                        <ul>
                                            <li>Exchange Services</li>
                                        </ul>
                                        <h4>Connectivity</h4>
                                        <ul>
                                            <li>MAPI Logon/Logoff</li>
                                            <li>TCP/IP Ping</li>
                                            <li>POP3, SMTP Protocol Verification</li>
                                            <li>Windows NetRemote TOD API Check</li>
                                            <li>Too Many Users Logged On</li>
                                            <li>Exchange Server Unreachable</li>
                                            <li>IMAP, NNTP, POP3, SMTP Server Stopped</li>
                                            <li>PowerShell Management</li>
                                        </ul>
                                        <h4>Clusters</h4>
                                        <ul>
                                            <li>Cluster Node/Group/Network/Network Interface/Resource Check</li>
                                            <li>Cluster Resource Offline/Failed</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade  " id="first298" role="tabpanel" aria-labelledby="first298-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview298" aria-controls="overview298" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored298" aria-controls="whats-monitored298" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview298">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for Java </h2>
                                        <div>
                                            <div>Designed and architected by technology visionary James Gosling in the mid-1990s, Java is a very popular programming language that has been adopted by many software developers. Programs written in Java are used today on millions of devices worldwide.</div>
                                            <div>Java is the buzzword today everywhere.</div>
                                            <div>Google’s Android phones are a key factor and, while Android dominates the smartphone industry, Java is increasingly used in home appliances like televisions, refrigerators, dishwashers, and security systems. Java is an important technology driving the explosive growth of the Internet, especially smart devices and the ‘Internet of Things’. Keep counting the number of computers and devices that use Java as the list is growing day by day.</div>
                                            <div>Java’s rapid adoption and growth cannot be attributed only to Android. Java can be easily ported to a wide variety of operating systems and platforms. Java can be used in Web applications, mobile apps, and complex user interface (UI) programs. Java can be used to integrate divergent legacy applications in extract-transfer-load (ETL) scenarios.</div>
                                            <div>With so many Java programs all around us, it is important to manage and monitor existing and emerging Java-based applications.</div>
                                            <h3>What is Argent for Java?</h3>
                                            <div>Argent for Java is a comprehensive tracking, monitoring, and management solution focused on Java-based applications across your enterprise.</div>
                                            <div>Argent for Java provides a rule-based monitoring engine that collects statistics and metrics about your Java applications and reports and generates alerts for exception conditions.</div>
                                            <h3>Why Argent for Java?</h3>
                                            <div>Although Java has been ported and migrated to many operating systems and platforms, the language and run time performance is rarely optimized for each particular platform. Independent Software Providers (ISPs) and IT departments are often most concerned about delivering application features and functionality as a priority ahead of performance and reliability.</div>
                                            <div>The performance and reliability of Java-based applications vary widely and are not consistent. A Java application developed for a UNIX platform may perform poorly on a Windows platform (and vice versa).</div>
                                            <div>Tracking, monitoring, and managing your Java-based applications’ performance and resource utilization is critically important, especially in non-stop environments such as customer-facing website applications.</div>
                                            <div>Monitoring CPU and memory utilization can provide useful information but does not help you relate that information to your Java applications.</div>
                                            <div>Argent for Java makes monitoring and managing your Java applications both easy and efficient. With Argent for Java you can forget about memory leaks, deadlocked and blocked threads, CPU overload, and more.</div>
                                            <div>Argent for Java helps ensure your Java-based applications perform smoothly and reliably across your entire enterprise.</div>
                                            <div><strong>Argent for Java screens both JVMs and base servers via Java Management Extensions (JMX) technology.</strong></div>
                                            <h3>The Java Virtual Machine (JVM)</h3>
                                            <div>Java incorporates a design architecture called the Java Virtual Machine (JVM). The JVM is a hypervisor that executes the Java programs written for it. An implementation of the JVM is part of making Java available on a given platform and operating system. Without an implementation of the JVM, Java programs can not run. Java programs running within the JVM provide platform independence. This is because JVM converts the Java program’s commands to the native language of the machine or device where the JVM and the Java program are installed.</div>
                                            <div>When a Java application is launched, a JVM is instantiated for that application and persists in memory until the application completes. Internally, within a given operating system, there will be as many JVMs as there are Java applications launched.</div>
                                            <div>Under Microsoft Windows, this is comparable to running a console-style application within a DOS command prompt window: There will be as many DOS command prompt windows as there are console-style command line programs active.</div>
                                            <div>Since a JVM is a run-time environment for a Java application, each JVM will consume computer resources such as memory, CPU, and so on.</div>
                                            <div>Argent for Java provides collects vital statistics for the JVM (and, correspondingly, the companion Java application).</div>
                                            <div>Metrics and statistics collected include: Memory and CPU usage, CPU time consumed, thread and handle usage, thread counts, locks/deadlocks, and many more.</div>
                                            <div>Argent for Java also keeps track of similar metrics for host machine where the JVM has been instantiated.</div>
                                            <h3>Memory Management</h3>
                                            <div>Within an instantiated JVM, memory must be allocated for new objects. Each JVM divides memory allocation into two categories: Heap Memory and Non-Heap Memory.</div>
                                            <h3>Heap Memory</h3>
                                            <div>Java heap memory from the Operating System is allocated by the JVM and it manages the heap for its Java Application. Every time the Java application creates a new object, the Java Virtual Machine gives out an adjacent space or an array of heap memory to store it within the heap memory already it took from the OS. “Live” objects that are frequently referenced by other objects are retained in the heap and those not referenced anymore are emptied from the heap or Garbage Collected by the JVM. This frees the heap memory.</div>
                                            <div>The most newly created objects are referred to as “Young” generation by JVM algorithms and they become “Old” generation after they endure a few garbage collection processes. The Young generation holds on to a small but extremely active segment of the heap where new objects are allocated. When the space allocated for Young generation gets full, a special garbage collection called Young collection frees up some of the Young heaps by moving or promoting the oldest of the Young heaps to the Old heap. This frees up some space in Young heap, which lets the JVM to allocate new objects again. Old collection frees up space in the Old heap by running a garbage collection in the Old heap.</div>
                                            <div>Young generation heap is again split into Eden Space and Survivor Space.</div>
                                        </div>
                                        <div class="Images-wrap">
                                        </div>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored298">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically.</strong></p>
                                        <h4>General</h4>
                                        <ul>
                                            <li>JVM Uptime</li>
                                            <li>JVM CPU Usage</li>
                                            <li>JVM CPU Time</li>
                                            <li>JVM Total Compile Time</li>
                                            <li>JVM Physical Memory Usage</li>
                                            <li>JVM Swap Space Usage</li>
                                            <li>Custom MBeans Attributes</li>
                                            <li>Unix Rules</li>
                                        </ul>
                                        <h4>Garbage Collector</h4>
                                        <ul>
                                            <li>JVM Garbage Collection Count</li>
                                            <li>JVM Garbage Collection Time</li>
                                        </ul>
                                        <h4>Heap Memory</h4>
                                        <ul>
                                            <li>JVM Survivor Space Statistics Rules</li>
                                            <li>JVM Eden Space Statistics Rules</li>
                                            <li>JVM Old Space Statistics Rules</li>
                                            <li>JVM Overal Heap Memory Space Utilization</li>
                                        </ul>
                                        <h4>Non-Heap Memory Statistics</h4>
                                        <ul>
                                            <li>JVM Metaspace</li>
                                            <li>JVM Compressed Class Space</li>
                                            <li>JVM Code Cache Statistics</li>
                                            <li>JVM Overall Non-Heap Memory Space Utilization</li>
                                        </ul>
                                        <h4>Class Loader Statistics</h4>
                                        <ul>
                                            <li>JVM Total Classes Loaded</li>
                                            <li>JVM Current Classes Loaded</li>
                                        </ul>
                                        <h4>Thread Statistics</h4>
                                        <ul>
                                            <li>JVM Live Thread Count</li>
                                            <li>JVM Live Daemon Thread Count</li>
                                            <li>JVM Peak Live Thread Count</li>
                                            <li>JVM Total Threads Started Count</li>
                                            <li>JVM Total Threads CPU Time</li>
                                            <li>JVM Deadlocked Threads</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade  " id="first356" role="tabpanel" aria-labelledby="first356-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview356" aria-controls="overview356" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored356" aria-controls="whats-monitored356" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview356">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for SNMP </h2>
                                        <p>Argent for SNMP is more than just a monitoring solution — like all Argent products, Argent for SNMP is a complete automation solution, automating all the essential, but labor-intensive chores that all customers must perform to ensure your SNMP devices run smoothly.</p>
                                        <h3>Here are some of the features that Argent for SNMP provides:</h3>
                                        <ul>
                                            <li>Reliable SNMP Discovery</li>
                                            <li>Network Topology Discovery</li>
                                            <li>Argent Universal MIB Library</li>
                                            <li>Support for all SNMP Versions</li>
                                            <li>Enhanced SNMP Trap Handling Model</li>
                                            <li>Readability of SNMP Events</li>
                                            <li>Automatic Monitoring — monitor devices in a few clicks</li>
                                        </ul>
                                        <p>For a live demo site, visit
                                            <a href="http://help.Argent.com/#e_afs" target="_blank">http://help.Argent.com/#e_afs</a>
                                        </p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for SNMP" data-src="../assets/images/products/asnmp_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/asnmp_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for SNMP" data-src="../assets/images/products/console_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Automation – Automate All Your Work</h3>
                                        <p>With uniquely powerful built-in scheduling, customers can prioritize SNMP monitoring and schedule data collection for performance reports to take place in real time, once an hour or only in the evenings and advanced calendaring options allow any number of different monitoring policies.</p>
                                        <h3><span class="subtitle">See The Benefits For Yourself</span></h3>
                                        <p>The benefits of Argent for SNMP over its venerable predecessor are numerous — read the Argent Encyclopedia document at <a href="http://help.Argent.com/#e_afs" rel="noopener" target="_blank">http://help.Argent.com/#e_afs</a></p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored356">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box,<strong> Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically.</strong></p>
                                        <h4>Management</h4>
                                        <ul>
                                            <li>Built-in MIB and OID Browser</li>
                                            <li>Formula Expressions</li>
                                            <li>Long Walk</li>
                                            <li>OID Aliases</li>
                                            <li>Walk Within Branch</li>
                                        </ul>
                                        <h4>SNMP Rules</h4>
                                        <ul>
                                            <li>3Com</li>
                                            <li>APC</li>
                                            <li>Banyan</li>
                                            <li>Brocade</li>
                                            <li>Checkpoint</li>
                                            <li>Cisco</li>
                                            <li>Compaq</li>
                                            <li>Dell</li>
                                            <li>Emulex</li>
                                            <li>Extreme Network</li>
                                            <li>Fortinet</li>
                                            <li>Foundry</li>
                                            <li>HP</li>
                                            <li>IBM</li>
                                            <li>Intermec</li>
                                            <li>JetDirect</li>
                                            <li>Lannet</li>
                                            <li>Lexmark</li>
                                            <li>Liebert</li>
                                            <li>Linux/Unix</li>
                                            <li>Lucent</li>
                                            <li>Microsoft</li>
                                            <li>Netscreen</li>
                                            <li>Novell</li>
                                            <li>Sonic</li>
                                            <li>UPS</li>
                                            <li>Web Logic</li>
                                        </ul>
                                        <h4>Performance and Latency</h4>
                                        <ul>
                                            <li>Bandwidth Usage</li>
                                            <li>Port Status</li>
                                            <li>Throughput</li>
                                            <li>TCP/IP Ping</li>
                                            <li>TCP Port Check</li>
                                            <li>Packet Loss %</li>
                                            <li>SNMP Service Availability</li>
                                        </ul>
                                        <h4>SNMP Trap Rules</h4>
                                        <ul>
                                            <li>3Com</li>
                                            <li>APC</li>
                                            <li>Banyan</li>
                                            <li>Brocade</li>
                                            <li>Checkpoint</li>
                                            <li>Cisco</li>
                                            <li>Compaq</li>
                                            <li>Dell</li>
                                            <li>Emulex</li>
                                            <li>Extreme Network</li>
                                            <li>Fortinet</li>
                                            <li>Foundry</li>
                                            <li>HP</li>
                                            <li>IBM</li>
                                            <li>Intermec</li>
                                            <li>JetDirect</li>
                                            <li>Lannet</li>
                                            <li>Lexmark</li>
                                            <li>Liebert</li>
                                            <li>Linux/Unix</li>
                                            <li>Lucent</li>
                                            <li>Microsoft</li>
                                            <li>Netscreen</li>
                                            <li>Novell</li>
                                            <li>Sonic</li>
                                            <li>UPS</li>
                                            <li>Web Logic</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade  " id="first397" role="tabpanel" aria-labelledby="first397-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview397" aria-controls="overview397" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored397" aria-controls="whats-monitored397" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview397">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for Storage </h2>
                                        <div>
                                            <div>Storage is a critical component in most enterprise networks, and like all critical components — it can’t go down.</div>
                                            <div>To make matters worse, storage devices have many sub-components in and of themselves — Storage Processors, Disk Array Enclosures, Buses, Disks, LUNs, Fibre Channel, Tape, Switches, Clusters — the list goes on.</div>
                                            <div>The question “What should I be monitoring, and what thresholds?” is the immediate response for most Storage Administrators.</div>
                                            <div>Argent for Storage’s <strong>Instant Best Practices</strong> does the heavy-lifting for administrators, and provides expert recommendations on thresholds that typical enterprises would need. With Argent for Storage you can be up and running in 45 minutes, not 45 days; Argent for Storage is meticulously engineered to ensure you are not flooded with thousands of meaningless alerts.</div>
                                            <div>And Argent is vendor-agnostic — Argent for Storage aims to cover all the major players: <strong>EMC, NetApp, HP, IBM and Dell.</strong></div>
                                        </div>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for Storage" data-src="../assets/images/products/agu_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/agu_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for Storage" data-src="../assets/images/products/console_l_b-1.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-1.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <div>
                                            <h3>Proactive Monitoring and Reporting</h3>
                                            <div>Argent for Storage proactively detects and stops SAN-related issues before your enterprise is impacted.</div>
                                            <div>Critical data is collected for historical reporting and trend analysis, and visualized through Argent Reports and Argent Commander.</div>
                                            <div>Argent for Storage also provides corrective actions by integrating with vendor-specific CLI or PowerShell that can be run in response to an issue. Additionally, detailed notifications that pinpoint the exact Disk, Bus, and Enclosure can be sent via email or SMS to the Storage team.</div>
                                        </div>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored397">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs</strong>.<br>
                                            Argent solves all your day-to-day problems —<strong> automatically.</strong></p>
                                        <h4>EMC VNX</h4>
                                        <ul>
                                            <li>Array Status</li>
                                            <li>Array Power Status</li>
                                            <li>Standby Power Supply Status</li>
                                            <li>Main Power Supply Status</li>
                                            <li>Storage Processor Engine Power Status</li>
                                            <li>Hard Read Error</li>
                                            <li>Hard Write Error</li>
                                            <li>Soft Read Error</li>
                                            <li>Soft Write Error</li>
                                            <li>Disk Utilization</li>
                                            <li>Raid Group Utilization</li>
                                            <li>Defragmentation\Expansion – Performance</li>
                                            <li>Storage Processor Utilization</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first399" role="tabpanel" aria-labelledby="first399-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview399" aria-controls="overview399" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored399" aria-controls="whats-monitored399" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview399">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for XenApp </h2>
                                        <p>Argent for XenApp is more than just a monitoring solution — like all Argent products, Argent for XenApp is a complete automation solution, automating all the essential but labor-intensive chores that all customers must perform to ensure XenApp runs smoothly.</p>
                                        <div>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique Instant Best Practices is essential – who has the time to read White Papers?<br>
                                            The most significant aspect of Argent for XenApp is the use of a number of different approaches to monitoring XenApp, unifying a centralized monitoring platform for XenApp running on all Windows or Linux/Unix systems. Think of Argent for XenApp as four or five discrete products all integrated into one super-product.</div>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for XenApp" data-src="../assets/images/products/agu_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/agu_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for XenApp" data-src="../assets/images/products/console_l_b-1.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-1.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Details</h3>
                                        <p>Argent for XenApp monitors and reports on XenApp baselines, such as availability, access rules, authentication, licensing and ICA session rules.<br>
                                            Argent for XenApp integrates with pre-defined Argent Reports that can be automatically emailed every morning to show the actual health and performance of XenApp.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored399">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box,<strong> Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically.</strong></p>
                                        <h4>XenApp Application Monitoring Rules</h4>
                                        <ul>
                                            <li>Anonymous Connection Rules</li>
                                            <li>Application Availability Rules</li>
                                            <li>Application User Count Rules</li>
                                            <li>Disabled Application Rules</li>
                                            <li>Process CPU Usage Rules</li>
                                            <li>Session Usage Time Rules</li>
                                        </ul>
                                        <h4>XenApp Availability Rules</h4>
                                        <ul>
                                            <li>AppController Rules</li>
                                            <li>Citrix License Server Rules</li>
                                            <li>Common Citrix Communication Port Rules</li>
                                            <li>EdgeSight Rules</li>
                                            <li>Password Manager Rules</li>
                                            <li>StageManager Rules</li>
                                            <li>XenApp Rules</li>
                                            <li>XenClient Rules</li>
                                        </ul>
                                        <h4>Accessibility Monitoring Rules</h4>
                                        <ul>
                                            <li>Desktop Access Rules</li>
                                            <li>Directory Access Rules</li>
                                            <li>RADIUS Rules</li>
                                        </ul>
                                        <h4>Agent Monitoring Rules</h4>
                                        <ul>
                                            <li>Citrix Safeword Rules</li>
                                            <li>RSA Rules</li>
                                            <li>User-Agent HTTP Header Rules</li>
                                        </ul>
                                        <h4>Authentication Monitoring Rules</h4>
                                        <ul>
                                            <li>Access Gateway Authentication Rules</li>
                                            <li>Anonymous Logon Rules</li>
                                            <li>Context Look-up Failure Rules</li>
                                            <li>Invalid Authentication Rules</li>
                                            <li>Novell Directory Services[NDS] Rules</li>
                                            <li>Two-factor Authentication Rules</li>
                                            <li>Web Interface Authentication Rules</li>
                                            <li>Workspace Control Rules</li>
                                        </ul>
                                        <h4>Miscellaneous</h4>
                                        <ul>
                                            <li>Citrix Online Plugin Monitoring Rules</li>
                                            <li>Citrix Streaming Service Monitoring Rules</li>
                                            <li>Citrix XML Service Monitoring Rules</li>
                                            <li>Client Detection Monitoring Rules</li>
                                            <li>Event ID File Monitoring Rules</li>
                                            <li>ICA File Signing Monitoring Rules</li>
                                            <li>Password Manager Monitoring Rules</li>
                                            <li>SSL Connection Monitoring Rules</li>
                                            <li>Secure Ticket Authority Monitoring Rules</li>
                                        </ul>
                                        <h4>Configuration Monitoring Rules</h4>
                                        <ul>
                                            <li>Protocol Transition Service Rules</li>
                                            <li>Site Configuration Rules</li>
                                            <li>Web Interface Configuration Rules</li>
                                        </ul>
                                        <h4>Permission Monitoring Rules</h4>
                                        <ul>
                                            <li>Client For Java Rules</li>
                                            <li>Client Installer Rules</li>
                                            <li>Language Pack File Rules</li>
                                            <li>Server Monitoring Rules</li>
                                        </ul>
                                        <h4>Server Error Rules</h4>
                                        <ul>
                                            <li>Server Farm Rules</li>
                                            <li>Server License Rules</li>
                                        </ul>
                                        <h4>Citrix CPU Utilization Management User Rules</h4>
                                        <ul>
                                            <li>CPU Entitlement Rules</li>
                                            <li>CPU Shares Rules</li>
                                            <li>CPU Usage Rules</li>
                                            <li>Long-term CPU Usage Rules</li>
                                        </ul>
                                        <h4>Citrix IMA Networking Rules</h4>
                                        <ul>
                                            <li>Bytes Received Per Second Rules</li>
                                            <li>Bytes Sent Per Second Rules</li>
                                            <li>Network Connections Rules</li>
                                        </ul>
                                        <h4>Citrix Licensing Rules</h4>
                                        <ul>
                                            <li>Average License Check-In Response Time Rules</li>
                                            <li>Average License Check-Out Response Time Rules</li>
                                            <li>Last Recorded License Check-In Response Time Rules</li>
                                            <li>Last Recorded License Check-Out Response Time Rules</li>
                                            <li>License Server Connection Failure Rules</li>
                                            <li>Maximum License Check-In Response Time Rules</li>
                                            <li>Maximum License Check-Out Response Time Rules</li>
                                        </ul>
                                        <h4>Citrix MetaFrame Presentation Server Rules</h4>
                                        <ul>
                                            <li>Application Resolution Time Rules</li>
                                            <li>Application Resolutions Per Second Rules</li>
                                            <li>Cumulative Server Load Rules</li>
                                            <li>Data Store Connection Failure Rules</li>
                                            <li>Data Store Bytes Read Rules</li>
                                            <li>Data Store Bytes Read Per Second Rules</li>
                                            <li>Data Store Bytes Written Per Second Rules</li>
                                            <li>Data Store Reads Rules</li>
                                            <li>Data Store Reads Per Second Rules</li>
                                        </ul>
                                        <h4>ICA Session Rules</h4>
                                        <ul>
                                            <li>Input Audio Bandwidth Rules</li>
                                            <li>Input Clipboard Bandwidth Rules</li>
                                            <li>Input COM Bandwidth Rules</li>
                                            <li>Input Control Channel Bandwidth Rules</li>
                                            <li>Input Drive Bandwidth Rules</li>
                                            <li>Input Font Data Bandwidth Rules</li>
                                            <li>Input Licensing Bandwidth Rules</li>
                                            <li>Input Printer Bandwidth Rules</li>
                                            <li>Input Seamless Bandwidth Rules</li>
                                            <li>Input Session Bandwidth Rules</li>
                                            <li>Input Session Compression Rules</li>
                                            <li>Input Session Line Speed Rules</li>
                                            <li>Latency – Last Recorded Rules</li>
                                            <li>Latency – Session Average Rules</li>
                                            <li>Latency – Session Deviation Rules</li>
                                            <li>Output Audio Bandwidth Rules</li>
                                            <li>Output Clipboard Bandwidth Rules</li>
                                            <li>Output COM Bandwidth Rules</li>
                                            <li>Output Control Channel Bandwidth Rules</li>
                                            <li>Output Drive Bandwidth Rules</li>
                                            <li>Output Font Data Bandwidth Rules</li>
                                            <li>Output Printer Bandwidth Rules</li>
                                            <li>Output Seamless Bandwidth Rules</li>
                                            <li>Output Session Bandwidth Rules</li>
                                            <li>Output Session Compression Rules</li>
                                            <li>Output Session Line Speed Rules</li>
                                            <li>Output ThinWire Bandwidth Rules</li>
                                        </ul>
                                        <h4>Secure Ticket Authority Rules</h4>
                                        <ul>
                                            <li>STA Count of Active Tickets Rules</li>
                                            <li>STA Good Data Request Count Rules</li>
                                            <li>STA Good Ticket Request Count Rules</li>
                                            <li>STA Peak All Request Rate Rules</li>
                                            <li>STA Peak Ticket Request Rate Rules</li>
                                            <li>STA Ticket Timeout Count Rules</li>
                                        </ul>
                                        <h4>XenApp Server Monitoring Rules</h4>
                                        <ul>
                                            <li>XenApp Server Load Rules</li>
                                        </ul>
                                        <h4>XenApp Service Status Monitoring Rules</h4>
                                        <ul>
                                            <li>CPU Rebalancer Service Rules</li>
                                            <li>Resource Management Service Rules</li>
                                            <li>Citrix Independent Management Architecture Service Rules</li>
                                            <li>Citrix Licensing Service Rules</li>
                                            <li>Citrix Licensing WMI Service Rules</li>
                                            <li>Citrix MFCOM Service Rules</li>
                                            <li>Citrix Print Manager Service Rules</li>
                                            <li>Citrix Streaming Service</li>
                                            <li>Citrix Virtual Memory Optimization Service Rules</li>
                                            <li>Citrix WMI Service Rules</li>
                                            <li>Citrix XML Service Rules</li>
                                            <li>Citrix XTE Server Service Rules</li>
                                            <li>Remote Desktop Service Rules</li>
                                        </ul>
                                        <h4>XenApp Session Monitoring Rules</h4>
                                        <ul>
                                            <li>Active Session Count Rules</li>
                                            <li>Connected Session Count Rules</li>
                                            <li>Disconnected Session Count Rules</li>
                                            <li>Listening Session Count Rules</li>
                                            <li>User Specific Session Count Rules</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first666" role="tabpanel" aria-labelledby="first666-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview666" aria-controls="overview666" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#instant-best-practices666" aria-controls="instant-best-practices666" role="tab" data-toggle="tab">Instant Best Practices</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored666" aria-controls="whats-monitored666" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview666">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for Active Directory </h2>
                                        <p>Argent for Active Directory is more than just a monitoring solution — like all Argent products, Argent for Active Directory is a complete automation solution, automating all the essential but labor-intensive chores that all customers must perform to ensure Active Directory runs smoothly.</p>
                                        <p>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique Instant Best Practices is essential – who has the time to read White Papers?</p>
                                        <p>The most significant aspect of Argent for Active Directory product is the use of a number of different approaches to monitoring Active Directory: PowerShell, WMI, and classic Windows APIs are all used in different parts of the product. Think of Argent for Active Directory as four or five discrete products all integrated into one super-product.</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for Active Directory" data-src="../assets/images/products/sybase_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/sybase_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for Active Directory" data-src="../assets/images/products/console_l_b-5.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-5.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Details</h3>
                                        <p>Argent for Active Directory monitors and reports on Active Directory baselines, such as DNS, LDAP response times, file replication, trusts and authentication.</p>
                                        <p>Argent for Active Directory comes with pre-defined SLA reports that can be automatically emailed every morning to show the actual health and performance of Active Directory.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="instant-best-practices666">

                                        <!-- Inner Content Start -->
                                        <h3>What are Instant Best Practices?</h3>
                                        <p>Instant Best Practices are Argent’s unique technology that combines the best expert knowledge into one fully-integrated solution.</p>
                                        <p>Until Instant Best Practices, you’d have to read tedious White Papers, download and install quirky scripts, install so-called “Management” packs, find a slew of vendors’ add-ons, etc, etc, etc.</p>
                                        <p>All these tedious chores took you time and not to mention all the finger pointing from different vendors.</p>
                                        <p>Rather than being a manager and looking to move up the food chain, you were stuck wasting your time doing the donkey work of trying to make yet-another badly written script work for your environment.</p>
                                        <h3>Argent Instant Best Practices – Ready For Tomorrow</h3>
                                        <p>With Argent’s unique technology, hassles are a thing of the past.</p>
                                        <p>There are a lot of critical variables, thresholds, metrics and components you need to be on top of.</p>
                                        <p>But there’s the rub – <strong>what variables should you monitor?</strong></p>
                                        <p>Even after you’ve read all the dozens of Technical Papers, Tuning Guides, downloaded all the scripts, you now have to decide what values make sense.</p>
                                        <p>With Argent’s Instant Best Practices, all the donkey work is done for you – Instant Best Practices has all the critical variables and values defined.</p>
                                        <p>In one click you can have Argent Instant Best Practices working for you.</p>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored666">

                                        <!-- Inner Content Start -->
                                        <h4>Active Directory</h4>
                                        <ul>
                                            <li>Bad Password Counts</li>
                                            <li>Created Users</li>
                                            <li>Disabled Users</li>
                                            <li>Group Members</li>
                                            <li>Locked User Counts</li>
                                            <li>Unchanged Passwords</li>
                                        </ul>
                                        <h4>Authentication</h4>
                                        <ul>
                                            <li>Kerberos Authentication Rates</li>
                                            <li>NTLM Authentication Rates</li>
                                            <li>Check Logon Authentication</li>
                                        </ul>
                                        <h4>Connectivity</h4>
                                        <ul>
                                            <li>Active Directory Web Services</li>
                                            <li>Distributed File System Replication</li>
                                            <li>Global Catalog Server</li>
                                            <li>Kerberos</li>
                                            <li>LDAP SSL</li>
                                            <li>RPC Server</li>
                                            <li>Server Message Block (SMB)</li>
                                            <li>SMTP Replication</li>
                                        </ul>
                                        <h4>Directory Services</h4>
                                        <ul>
                                            <li>DRA Inbound/Outbound Bytes/Sec</li>
                                            <li>DRA Pending Replications</li>
                                            <li>Name Cache Hit Rate</li>
                                        </ul>
                                        <h4>DNS</h4>
                                        <ul>
                                            <li>DNS Authentication</li>
                                            <li>DNS Event Logs</li>
                                            <li>DNS Resolution (Any Record Type)</li>
                                            <li>DNS Server Services</li>
                                            <li>Connectivity</li>
                                        </ul>
                                        <h4>File Replication</h4>
                                        <ul>
                                            <li>Binding Errors</li>
                                            <li>Change Orders</li>
                                            <li>File Errors</li>
                                            <li>Packets Sent/Received</li>
                                            <li>USN Records</li>
                                        </ul>
                                        <h4>LDAP</h4>
                                        <ul>
                                            <li>Bind Times</li>
                                            <li>Client Sessions</li>
                                            <li>Custom LDAP Queries</li>
                                            <li>Services</li>
                                            <li>Distributed File System</li>
                                            <li>Intersite Messaging</li>
                                            <li>Kerberos Key Distribution Center</li>
                                            <li>Net Logon</li>
                                            <li>Resultant Set of Policy Provider</li>
                                            <li>Routing and Remote Access</li>
                                            <li>Windows Time</li>
                                        </ul>
                                        <h4>System</h4>
                                        <ul>
                                            <li>CPU Usage</li>
                                            <li>Memory Usage</li>
                                            <li>Disk Storage Usage</li>
                                            <li>File Accessibility</li>
                                            <li>Protocol Verification</li>
                                            <li>System Uptime</li>
                                            <li>Service Pack Level</li>
                                            <li>TCP/IP Port Checks</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first690" role="tabpanel" aria-labelledby="first690-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview690" aria-controls="overview690" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#instant-best-practices690" aria-controls="instant-best-practices690" role="tab" data-toggle="tab">Instant Best Practices</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored690" aria-controls="whats-monitored690" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview690">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for SAP </h2>
                                        <p>SAP runs your business, Argent for SAP ensures your SAP runs flawlessly.</p>
                                        <p>Argent monitors your SAP landscape in real time ensuring critical business functions never slows down, or worse, stop.</p>
                                        <p>Argent simplifies monitoring the complex SAP environment and helps administrators troubleshoot issues before they become critical.</p>
                                        <p><strong>Argent for SAP installs in under 10 minutes, but has more power than any product on the market.</strong></p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for SAP" data-src="../assets/images/products/ao_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/ao_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for SAP" data-src="../assets/images/products/console_l_b-5.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-5.jpg" alt="Image">
                                            </a>


                                        </div>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="instant-best-practices690">

                                        <!-- Inner Content Start -->
                                        <h3>What are Instant Best Practices?</h3>
                                        <p>Instant Best Practices are Argent’s unique technology that combines the best expert knowledge into one fully-integrated solution.</p>
                                        <p>Until Instant Best Practices, you’d have to read tedious White Papers, download and install quirky scripts, install so-called “Management” packs, find a slew of vendors’ add-ons, etc, etc, etc.</p>
                                        <p>All these tedious chores took you time and not to mention all the finger pointing from different vendors.</p>
                                        <p>Rather than being a manager and looking to move up the food chain, you were stuck wasting your time doing the donkey work of trying to make yet-another badly written script work for your environment.</p>
                                        <h4>Argent Instant Best Practices – Ready For Tomorrow</h4>
                                        <p>With Argent’s unique technology, hassles are a thing of the past.</p>
                                        <p>There are a lot of critical variables, thresholds, metrics and components you need to be on top of.</p>
                                        <p>But there’s the rub – <strong>what variables should you monitor?</strong></p>
                                        <p>Even after you’ve read all the dozens of Technical Papers, Tuning Guides, downloaded all the scripts, you now have to decide what values make sense.</p>
                                        <p>With Argent’s Instant Best Practices, all the donkey work is done for you – Instant Best Practices has all the critical variables and values defined.</p>
                                        <p>In one click you can have Argent Instant Best Practices working for you.</p>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored690">

                                        <!-- Inner Content Start -->
                                        <h4>General</h4>
                                        <ul>
                                            <li>Access Point Status</li>
                                            <li>Dispatcher Queue Status</li>
                                            <li>Enqueue Lock Counts</li>
                                            <li>Enqueue Server Statistics</li>
                                            <li>Host Agent Status</li>
                                            <li>Instance Status</li>
                                            <li>Open Alerts</li>
                                            <li>Process Status</li>
                                            <li>SAP/Oraclce Services</li>
                                            <li>Trace Files</li>
                                        </ul>
                                        <h4>Java</h4>
                                        <ul>
                                            <li>Garbage Collection</li>
                                            <li>Heap Memory</li>
                                            <li>Java Instance Components</li>
                                            <li>Java Instance Thread</li>
                                            <li>Cache</li>
                                            <li>EJB Sessions</li>
                                            <li>Remote Object Connections</li>
                                            <li>Shared Memory Table</li>
                                        </ul>
                                        <h4>ABAP</h4>
                                        <ul>
                                            <li>System Log Rules</li>
                                            <li>Work Process Rules</li>
                                        </ul>
                                        <h4>ICM</h4>
                                        <ul>
                                            <li>Cache Entries Count</li>
                                            <li>Cache Size</li>
                                            <li>Proxy Connection Status</li>
                                            <li>Thread Status</li>
                                            <li>Worker Thread Count</li>
                                        </ul>
                                        <h4>Operating System</h4>
                                        <ul>
                                            <li>CPU Usage</li>
                                            <li>Disk Usage</li>
                                            <li>Memory Usage</li>
                                            <li>Service Level Agreement</li>
                                            <li>Windows Events</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first315" role="tabpanel" aria-labelledby="first315-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <h2>
                                    Argent Job Scheduler </h2>
                                <p>The days of manually scheduling and managing batch processes are over. Business process automation lowers overall IT costs, ensures application efficiency, enhances IT service, and assists with compliance automation. Argent Job Scheduler and Argent Queue Engine automate business processes, alert customers via Argent Console when issues occur, and provide Service Level Agreements so that management receives the Business View of IT. Argent Job Scheduler provides a single point of control across all operating systems, applications and databases for Windows, Linux, Solaris, HP-UX, AIX, SCO and iSeries Servers.</p>
                                <p>Business process automation is simplified with Argent Job Scheduler and Argent Queue Engine. Installation requires no reboot. Argent Job Scheduler has a comprehensive feature set, including complete forecasting, auditing, calendaring, and failover, as well as job and file dependency support.</p>
                                <h3>World View Web Interface</h3>
                                <p>Argent World View is a Web 2.0 interface for Argent Job Scheduler.</p>
                                <p>Argent World View integrates Argent Job Scheduler GUI and the Queue Engine functionalities into a single pane of glass.</p>
                                <p>Once installed, Argent World View can be browsed from anywhere as long as sufficient security and access rights are provided.</p>
                                <p>For a live demo site, visit
                                    <a href="http://WorldView.Argent.com" target="_blank">http://WorldView.Argent.com</a>
                                </p>
                                <div class="Images-wrap">

                                    <a href="javascript:;" data-fancybox="Argent Job Scheduler" data-src="../assets/images/products/js_l2.jpg" target="_blank">
                                        <img src="../assets/images/products/js_l2.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Job Scheduler" data-src="../assets/images/products/js_l1.jpg" target="_blank">
                                        <img src="../assets/images/products/js_l1.jpg" alt="Image">
                                    </a>


                                </div>
                                <h3>Centralized Job Scheduling</h3>
                                <p>From a central scheduling server, Argent Job Scheduler can submit jobs to an unlimited number of servers where the batch jobs actually execute. All jobs on all servers regardless of platform can be viewed on the central console, which is also web-enabled. Any user – with the appropriate rights – on any workstation or server can view the central job scheduling console. With the powerful filtering capabilities, administrators, operators, and users can quickly and easily obtain customized views of their own jobs. From a central client GUI, jobs can be submitted to an unlimited number of Argent Queue Engine Servers including Windows, Linux, Unix, iSeries and other platforms where the batch jobs actually execute.</p>
                                <h3>Queue Priorities: Critical Work Runs First</h3>
                                <p>Up to 256 batch queues can be defined on a server where batch jobs execute. Each queue can have its own execution priority – customers can define one queue for high-priority jobs, another queue for intermediate priority jobs, and a third queue for low-priority jobs. Thus all jobs in the high-priority queue get CPU resources before all jobs in the other two queues. Each batch queue can run almost 33,000 jobs.</p>
                                <h3>Argent Exploits SMP Architecture</h3>
                                <p>Individual queues can be associated with specific processors in an SMP environment. For example, on an 8-way server, CPU-7 can be associated with a queue and the jobs in that queue will only use that processor. This facility gives you the performance of true load balancing, and makes the most of expensive and powerful SMP Servers.</p>
                                <h3><span class="subtitle">Complete Work Load Balancing</span></h3>
                                <p>Argent Job Scheduler provides complete server load balancing, whereby a job can be submitted to the server that currently has the lowest CPU load. This enables the most efficient use of hardware resources. Once defined, this load balancing is automatic and requires no manual intervention.</p>
                                <h3>Total Job Dependency Support</h3>
                                <p>Argent Job Scheduler provides full job dependency support so that complex job streams are easily created and managed. Automatic job failure retry permits job streams to restart without manual intervention.</p>
                                <h3>Total File And ODBC Dependency Support</h3>
                                <p>File dependency support enables a job to automatically start executing only after all the files required are present on one or more servers. Argent Job Scheduler also has full file dependency support for files located on FTP sites.</p>
                                <h3>Uniquely Powerful Calendaring</h3>
                                <p>Some businesses may start the fiscal year on July 1st while the U.S. federal government starts its fiscal year on October 1st. Employees may get paid biweekly or on a monthly basis. Regardless of the calendar, Argent Job Scheduler is easily customized to meet specific needs. Argent Job Scheduler is delivered with a number of pre-built calendars that can be customized to meet exact requirements. Creating calendars based upon fiscal years, manufacturing cycles, payroll periods, etc., allows customers the freedom easily to customize the product to best suit their organization.</p>
                                <h3>Alerts You When Jobs Fail</h3>
                                <p>Argent Job Scheduler in conjunction with Argent Console has extensive alerting facilities so the appropriate parties can be alerted when jobs fail. Alerts can be issued via email, alphanumeric pager, SMS, pop-ups, and beeper. Argent Job Scheduler also provides the ability to automatically resubmit failed jobs. Argent Job Scheduler is tightly integrated with Argent Console, resulting in customers benefiting from all the advanced console and alert escalation features of Argent Console when jobs fail.</p>
                                <h3>Full Redundancy</h3>
                                <p>An unlimited number of backup servers can be defined for Argent Job Scheduler so that if the primary job scheduling server fails or it loses its network connection, job scheduling continues on a backup server. Once defined, the failover process is automatic. Once the primary scheduling server is operational again, all processing reverts back to the primary server.</p>
                                <h3>Reporting</h3>
                                <p>Argent Job Scheduler has a full set of reports, enabling Operations Managers to create reports that run on a daily, weekly, monthly, or on an ad-hoc basis. In addition, projected load reports are also available that enable seeing the CPU and other resources needed to run the day’s jobs.</p>
                                <h3>Uniquely Powerful Simulation</h3>
                                <p>Argent Job Scheduler’s job simulation feature allows the quick simulation of when and how often jobs will run over a period of time. A simulation of a large block of time, such as a full day, can be performed in just seconds since the computer’s time is rapidly incremented.</p>
                                <!-- Else OverView End-->
                            </div>

                        </div>

                        <div class="tab-pane fade" id="first339" role="tabpanel" aria-labelledby="first339-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <h2>
                                    Argent WorldView </h2>
                                <p>Argent WorldView is a Web 2.0 product that integrates with all your existing Argent Job Scheduler installations</p>
                                <p>Argent WorldView serves as a primary web interface for Argent Job Scheduler; here are the benefits:</p>
                                <ul>
                                    <li>Customers no longer need to login to the server physically, or using remote desktop to see the status of jobs.</li>
                                    <li>Overcomes the limitation on the number of users accessing the data through remote desktop</li>
                                    <li>Seamlessly integrates the Argent Job Scheduler and Argent Queue Engine functionalities into a single web console</li>
                                    <li>Once installed, Argent WorldView can be browsed literally from anywhere; provided you have sufficient access rights</li>
                                </ul>
                                <p><b>Supporting Browsers:</b>&nbsp;IE 9 and above, Firefox, Chrome, Safari</p>
                                <p><b>Supporting Devices:</b>&nbsp;Standard computers, Tablets, Smart phones</p>
                                <p>For a live demo site, visit
                                    <a href="http://WorldView.Argent.com" target="_blank">http://WorldView.Argent.com</a>
                                </p>
                                <div class="Images-wrap">

                                    <a href="javascript:;" data-fancybox="Argent WorldView" data-src="../assets/images/products/js_l1-1.jpg" target="_blank">
                                        <img src="../assets/images/products/js_l1-1.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent WorldView" data-src="../assets/images/products/js_l2-1.jpg" target="_blank">
                                        <img src="../assets/images/products/js_l2-1.jpg" alt="Image">
                                    </a>


                                </div>
                                <!-- Else OverView End-->
                            </div>

                        </div>

                        <div class="tab-pane fade  show active" id="first403" role="tabpanel" aria-labelledby="first403-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <h2>
                                    Argent Sentinel </h2>
                                <p>Argent Sentinel is a comprehensive web URL and Server monitoring product from Argent</p>
                                <p>Below are important features and benefits of Argent Sentinel</p>
                                <h3>1. End-To-End Web Monitoring:</h3>
                                <ul>
                                    <li>Handles all known HTTP error codes</li>
                                    <li>Check for one or more known error codes for each URL</li>
                                </ul>
                                <p>Example: Check bad request error (400) for a specific URL<br>
                                    Example: Check unauthorized error (401) for a secured URL<br>
                                    Example: Check all HTTP errors for a home page</p>
                                <h4>Benefit</h4>
                                <p>Preconfigured error cases: Argent Sentinel has a list of all known HTTP errors</p>
                                <p>These errors can be tested across all licensed URLs</p>
                                <h3>2. Root Cause Analysis And Correction</h3>
                                <p>• Run WMI and Linux/Unix scripts if a web server is offline or slow<br>
                                    • Preconfigured scripts for checking system resources like CPU, memory, NIC traffic, etc<br>
                                    • Screenshot capturing</p>
                                <h4>Benefit</h4>
                                <p>Identify and correct the root cause of an issue without manual intervention</p>
                                <h3>3. Load Testing For Web Sites Using Virtual Concurrent Users</h3>
                                <h4>Benefit</h4>
                                <p>Stress testing of websites can be done using a user-configurable number of simulated virtual users</p>
                                <h3>4. Robotic Web Testing</h3>
                                <p>• Mimics user interactions<br>
                                    • Supports manual operations such as mouse clicks and keyboard input<br>
                                    Example: Automatically provides username and password to user’s CRM and login to authenticate user credentials</p>
                                <h4>Benefit</h4>
                                <p>Automatically run laborious, pain staking web testing which normally requires human interaction</p>
                                <h3>5. Web Data Scraping</h3>
                                <p>• Retrieves data from web pages and makes it available as variables in Script</p>
                                <p>Example: Go to finance.yahoo.com, retrieve Apple’s stock price, and alert if it crosses a threshold or store the stock price in Argent Predictor for Analytics</p>
                                <h4>Benefit</h4>
                                <p>Configure Notification Alerts based on data updated in websites</p>
                                <p>Can use Argent Predictor and Argent Reports for web-scraped data</p>
                                <h3>6. Script Driven</h3>
                                <p>Easy to understand, edit, and maintain</p>
                                <h4>Benefit</h4>
                                <p>Enhance a recorded Script with Argent APIs or customer’s APIs</p>
                                <h3>7. Automatically Integrates With Existing Argent AT Installations</h3>
                                <h4>Benefits</h4>
                                <p>Easy to install and upgrade; easy to prepare and configure infrastructure and environment<br>
                                    Exploit Argent AT Notification Alerts, Argent Console, etc</p>
                                <h3>8. State Of The Art Development Tools</h3>
                                <p>Headless (No Graphical User Interface) Chrome or Chromium browser works with lowest resource and is the fastest<br>
                                    Puppeteer (native API access to Chrome and Chromium) is the leading tool used for web automation</p>
                                <div class="Images-wrap">
                                </div>
                                <!-- Else OverView End-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first413" role="tabpanel" aria-labelledby="first413-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview413" aria-controls="overview413" role="tab" data-toggle="tab">Overview </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored413" aria-controls="whats-monitored413" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview413">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent Sentry Ultra </h2>
                                        <p>Argent Sentry Ultra monitors websites, FTP sites, and email servers. It can identify website issues during development and after deployment in production. Argent Sentry Ultra integrates with Argent Console for flexible alerting and event escalation so issues can be dealt with promptly, even before the end user sees them. Argent Sentry Ultra’s flexibility enables customers the power to maintain any size environment and provides full reporting.</p>
                                        <p>Argent Sentry Ultra also has fraud prevention techniques, checking for changes to web pages. Argent Console will then alert customers if any unauthorized modifications are detected. Customers have full control over which web pages are monitored.</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent Sentry Ultra" data-src="../assets/images/products/sp_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/sp_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent Sentry Ultra" data-src="../assets/images/products/console_l_b-1.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-1.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Total Web Integrity</h3>
                                        <p>Total Web Integrity protects critical websites and intranets against all forms of attacks.</p>
                                        <p>Total Web Integrity is based on a simple idea: a web property is really just a collection of files.</p>
                                        <p>If these files are constantly monitored for hacker attacks and changes, the hackers are defeated.</p>
                                        <p>Automatic restoration provides complete automation before, during, and after an attack.</p>
                                        <h3>Website Response Time Monitor</h3>
                                        <p>Ongoing response time monitoring is essential for reporting website performance at various times and for detecting problems with a website. Argent Console generates alerts if the response time slows to a specified threshold and the performance data can be saved for trend analysis.</p>
                                        <h3>Website Reliability</h3>
                                        <p>Improve website reliability by eliminating broken links and missing files. This feature traverses a website checking for broken links, missing images, etc. Argent Console generates alerts if any issues are found.</p>
                                        <h3>FTP Site Monitor</h3>
                                        <p>FTP site monitoring can be setup to check for specific files on the site and optionally test downloading the files. Alerts are generated by Argent Console if specified files are missing or fail to download. Alerts can also be triggered if a specified file exists on the FTP site.</p>
                                        <h3>Email Performance Monitor</h3>
                                        <p>Argent Sentry Ultra will monitor the email sending and receiving capabilities of a mail server and test round-trip email performance. The performance data can be saved for trend analysis. Argent Console can generate alerts if the email round-trip performance exceeds the specified threshold.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored413">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically</strong>.</p>
                                        <h4>Connectivity</h4>
                                        <ul>
                                            <li>TCP/IP Ping</li>
                                            <li>TCP Port Check</li>
                                            <li>FTP, HTTP, HTTPS Service Availability</li>
                                            <li>Windows Internet Connectivity API Check</li>
                                        </ul>
                                        <h4>Web Site Change</h4>
                                        <ul>
                                            <li>Web Page Changes</li>
                                            <li>Hacking/Defacement Attempts</li>
                                        </ul>
                                        <h4>Web Site Response Time</h4>
                                        <ul>
                                            <li>Web Server Offline</li>
                                            <li>Excessively Slow Pages</li>
                                        </ul>
                                        <h4>Web Site Reliability</h4>
                                        <ul>
                                            <li>Web Page Availability</li>
                                            <li>Broken Links</li>
                                        </ul>
                                        <h4>Email Performance</h4>
                                        <ul>
                                            <li>Email Round Trip Test</li>
                                            <li>Broken Links</li>
                                        </ul>
                                        <h4>FTP</h4>
                                        <ul>
                                            <li>FTP Download Test</li>
                                            <li>FTP File Existence</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first416" role="tabpanel" aria-labelledby="first416-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <h2>
                                    Argent for Compliance </h2>
                                <p>Government regulations such as Sarbanes Oxley and HIPAA are changing the ways companies do business worldwide. Argent for Compliance collects, scans, and consolidates all critical data from across the worldwide enterprise into one or more centralized SQL Server and/or ODBC databases, regardless of the hardware platform. Argent for Compliance can process data residing on Windows, Linux, AIX, HP-UX, SCO, Solaris, iSeries, and SNMP devices.</p>
                                <p>Argent for Compliance is completely scalable, extremely robust, and provides a complete audit trail for management. Now, companies can effectively comply with audit requests and initiate internal audits in response to “keywords” and behavior uncovered with a searchable centralized database.</p>
                                <div class="Images-wrap">

                                    <a href="javascript:;" data-fancybox="Argent for Compliance" data-src="https://www.argent.com/wp-content/uploads/2022/11/compliance_l_b.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/compliance_l_b.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent for Compliance" data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" alt="Image">
                                    </a>


                                </div>
                                <p>In today’s unstable world, it is not a question of need — all companies and organizations require the security of data archiving and reporting.<br>
                                    Argent for Compliance comes with out-of-the-box <strong>Instant Best Practice</strong> Reporting for the following critical compliance acts:</p>
                                <ul>
                                    <li>Australian Privacy Act –<strong> APA</strong></li>
                                    <li>Criminal Justice Information Services Act –<strong> CJIS</strong></li>
                                    <li>Federal Information Security Management Act – <strong>FISMA</strong></li>
                                    <li>General Data Protection Regulation – <strong>GDPR</strong></li>
                                    <li>Graham-Leach-Bliley Act – <strong>GLBA</strong></li>
                                    <li>Health Insurance Portability and Accounting Act – <strong>HIPAA</strong></li>
                                    <li>Payment Card Industry Data Security Standard – <strong>PCI</strong></li>
                                    <li>Sarbanes-Oxley – <strong>SOX</strong></li>
                                </ul>
                                <p>Click Here For Sample Reports<br>
                                    Additionally, Argent for Compliance provides many features to ensure customers stay compliant:</p>
                                <h3>Proactive Monitoring</h3>
                                <p>Instead of waiting for issues to occur, Argent for Compliance allows customers to keep an eye on events as they are unfolding<br>
                                    For example, monitoring if there are numerous, repetitive Event ID 529s or 4625s allows administrators to take action, ban a user or IP address before a brute force hack becomes successful<br>
                                    Similarly, monitoring Linux/Unix message logs, SYSLOGs, IIS logs, SQL Server logs, and iSeries logs for warnings can prevent catastrophes before they have the chance of reaching a critical point</p>
                                <div>With Argent’s 18 different Alert types and robust customization, customers can ensure they are notified well in advance</div>
                                <h3>Data Archiving</h3>
                                <p>All data relating to compliance needs to be retained with the capability of being analyzed.<br>
                                    With Event Logs (or any log for that matter), data bloat can become a major nightmare for daily backups, poor reporting performance, and just a general feeling that the data being collected is a complete mess to sort through<br>
                                    With Argent for Compliance, Security Logs are carefully and intelligently analyzed, and only the pertinent information is parsed into different fields in the database<br>
                                    The database structure has been carefully designed for maximum performance for reporting and minimizes the growth of the database</p>
                                <h3>Instant Best Practice Reporting For All Compliance Acts</h3>
                                <p>When an auditor arrives, Argent’s reports do the heavy lifting for customers<br>
                                    All reports are broken down by compliance act.<br>
                                    Reports can be scheduled automatically to provide administrators with full visibility on who, what, and where changes occurred</p>
                                <h3>Scalability</h3>
                                <p>Argent for Compliance has a true n-tier architecture, supporting from the smallest to the largest networks. Agents may be installed or all archiving can be done without installing any agents on the production servers; there is no difference in the price.</p>
                                <div>All common hardware platforms, such as Windows, Linux, AIX, HP-UX, SCO, Solaris, and iSeries<br>
                                    Argent for Compliance can even archive the data from networking equipment like routers and switches.</div>
                                <h3>Robust Design</h3>
                                <p>Complete fault tolerance is engineered into Argent for Compliance to handle slow or erratic networks and hardware failures.<br>
                                    Trusted Agents can be replicated so if one server fails, another server immediately takes over the collecting, scanning, and consolidating of data.</p>
                                <div>
                                    <p>Load balancing is provided to handle large amounts of data collection (in excess of 1,000 gigabytes per day).</p>
                                    <h3>Automation</h3>
                                    <p>Argent for Compliance has a built-in scheduler in order to optimize resource consumption. Customers can schedule data archiving in real-time, or only during the evenings, on the weekends, or at night, when network load is minimal.</p>
                                </div>
                                <!-- Else OverView End-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first429" role="tabpanel" aria-labelledby="first429-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview429" aria-controls="overview429" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored429" aria-controls="whats-monitored429" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview429">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for Security </h2>
                                        <p>Argent for Security alerts you whenever an employee copies a file to a CD or mem-stick or any USB device.</p>
                                        <p>The leaking of over 200,000 U.S. Top Secret files by a person who copied these files to writable CDs disguised as Lady Gaga audio CDs would have been prevented by Argent for Security.</p>
                                        <p>You spend a fortune to block Russian hackers breaking into to your network, but the biggest threat is from disgruntled employees, as the Lady Gaga case chillingly shows.</p>
                                        <p>There are a small minority of employees who are actively looking to steal your trade secrets — business plans, blueprints, compensation plans, sales projections and CRM databases — to sell to your competitors.</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for Security" data-src="https://www.argent.com/wp-content/uploads/2022/11/compliance_l_b.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/compliance_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for Security" data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <p>With the Internet, it’s simple to send money to Panama or other countries with opaque banking systems, and some of your employees today are looking at what they can steal from you. You only need one breach for your company to be put out of business or for you to be fired for “gross negligence”</p>
                                        <p>Argent for Security guarantees the safety of all your servers and all your desktops.</p>
                                        <p>Argent for Security installs in under 10 minutes and uses no dangerous kernel mode code and no dangerous device drivers — Argent for Security is safe and easy to use.</p>
                                        <p>Argent for Security can optionally interface to Active Directory, or you can use Argent for Security as a free-standing product.</p>
                                        <p>If you have compliance requirements such as Sarbanes, HIPAA, PCI, etc, then Argent for Security is a must-have: these strict compliance laws require you to be safe from external Russian hackers and also from internal disgruntled employees.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored429">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically</strong>.</p>
                                        <h4>CD/DVD Events</h4>
                                        <ul>
                                            <li>CD/DVD Media Loaded</li>
                                            <li>CD/DVD Media Ejected</li>
                                        </ul>
                                        <h4>USB Storage Events</h4>
                                        <ul>
                                            <li>USB Storage Attached</li>
                                            <li>USB Storage Detached</li>
                                        </ul>
                                        <h4>File/Directory Changes</h4>
                                        <ul>
                                            <li>File or Directory Created</li>
                                            <li>File or Directory Deleted</li>
                                            <li>File or Directory Renamed</li>
                                            <li>File or Directory Modified</li>
                                        </ul>
                                        <h4>Event Logs</h4>
                                        <ul>
                                            <li>Audit Logs Cleared</li>
                                            <li>Audit Logs Stopped</li>
                                            <li>Hacking Attempts</li>
                                            <li>Unauthorized Account Changes</li>
                                        </ul>
                                        <h4>System Management Scripts</h4>
                                        <ul>
                                            <li>PowerShell Scripts</li>
                                            <li>WMI Scripts</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first434" role="tabpanel" aria-labelledby="first434-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview434" aria-controls="overview434" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#instant-best-practices434" aria-controls="instant-best-practices434" role="tab" data-toggle="tab">Instant Best Practices</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored434" aria-controls="whats-monitored434" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview434">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for Hyper-V </h2>
                                        <p>Argent for Hyper-V adds to Argent’s Single Pane of Glass technology and provides real monitoring of all critical aspects of Hyper-V, out of the box.</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for Hyper-V" data-src="https://www.argent.com/wp-content/uploads/2022/11/hv_l_b.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/hv_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for Hyper-V" data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Details</h3>
                                        <p>Argent for Hyper-V monitors and reports on both <strong>Hyper-V Hosts</strong> and <strong>Hyper-V Guests</strong>, along with all Operating System baselines</p>
                                        <p>Argent’s legendary alerting with 18 different types of alerts is fully integrated into Argent for Hyper-V.</p>
                                        <p>Argent for Hyper-V comes with pre-defined SLA reports that can be automatically emailed every morning to show the actual health and performance of Hyper-V.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="instant-best-practices434">

                                        <!-- Inner Content Start -->
                                        <h3>What are Instant Best Practices?</h3>
                                        <p>Instant Best Practices are Argent’s unique technology that combines the best expert knowledge into one fully-integrated solution.</p>
                                        <p>Until Instant Best Practices, you’d have to read tedious White Papers, download and install quirky scripts, install so-called “Management” packs, find a slew of vendors’ add-ons, etc, etc, etc.</p>
                                        <p>All these tedious chores took you time and not to mention all the finger pointing from different vendors.</p>
                                        <p>Rather than being a manager and looking to move up the food chain, you were stuck wasting your time doing the donkey work of trying to make yet-another badly written script work for your environment.</p>
                                        <h3>Argent Instant Best Practices – Ready For Tomorrow</h3>
                                        <p>With Argent’s unique technology, hassles are a thing of the past.</p>
                                        <p>There are a lot of critical variables, thresholds, metrics and components you need to be on top of.</p>
                                        <p>But there’s the rub – <strong>what variables should you monitor?</strong></p>
                                        <p>Even after you’ve read all the dozens of Technical Papers, Tuning Guides, downloaded all the scripts, you now have to decide what values make sense.</p>
                                        <p>With Argent’s Instant Best Practices, all the donkey work is done for you – Instant Best Practices has all the critical variables and values defined.</p>
                                        <p>In one click you can have Argent Instant Best Practices working for you.</p>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored434">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs</strong>.<br>
                                            Argent solves all your day-to-day problems — <strong>automatically</strong>.</p>
                                        <h3>Instant Best Practices for Hyper-V Hosts</h3>
                                        <p>Argent for Hyper-V monitors all the following critical parameters for hosts, out of the box:</p>
                                        <h4>Hypervisor Logical Processor</h4>
                                        <ul>
                                            <li>Guest Run Time</li>
                                            <li>Hypervisor Run Time</li>
                                            <li>Idle Run Time</li>
                                            <li>Total Run Time</li>
                                            <li>C1 Time</li>
                                            <li>Total Interrupts per Sec</li>
                                            <li>Context Switches per Sec</li>
                                        </ul>
                                        <h4>Hypervisor Virtual Processor</h4>
                                        <ul>
                                            <li>Guest Run Time</li>
                                            <li>Hypervisor Run Time</li>
                                            <li>IO Instructions per Sec</li>
                                            <li>Total Run Time</li>
                                            <li>Total Intercepts Cost</li>
                                            <li>HLT Instructions per Sec</li>
                                            <li>Emulated Instructions per Sec</li>
                                            <li>CPUID Instructions per Sec</li>
                                        </ul>
                                        <h4>Hyper-V Hypervisor</h4>
                                        <ul>
                                            <li>Logical Processors Count</li>
                                            <li>Total Bootstrap Pages Count</li>
                                            <li>Virtual Processor Count</li>
                                            <li>Hypervisor Partitions Count</li>
                                            <li>Monitored Notifications Count</li>
                                        </ul>
                                        <h4>Hyper-V NUMA Node</h4>
                                        <ul>
                                            <li>Node Page Count</li>
                                            <li>Node Processor Count</li>
                                        </ul>
                                        <h4>Virtual Network Adapter</h4>
                                        <ul>
                                            <li>Packets per Sec</li>
                                            <li>Bytes per Sec</li>
                                        </ul>
                                        <h4>Virtual Storage</h4>
                                        <ul>
                                            <li>Write Bytes per Sec</li>
                                            <li>Read Bytes per Sec</li>
                                            <li>Virtual Storage Flush Count</li>
                                            <li>Virtual Storage Write Count</li>
                                            <li>Virtual Storage Read Count</li>
                                        </ul>
                                        <h4>Virtual IDE Controller</h4>
                                        <ul>
                                            <li>Write Bytes per Sec</li>
                                            <li>Read Bytes per Sec</li>
                                        </ul>
                                        <h4>Root Virtual Processor</h4>
                                        <ul>
                                            <li>Guest Run Time</li>
                                            <li>Hypervisor Run Time</li>
                                            <li>Total Run Time</li>
                                        </ul>
                                        <h3><span class="subtitle">Instant Best Practices for Hyper-V&nbsp;<u>Guests</u></span></h3>
                                        <p>Argent for Hyper-V monitors all the following critical parameters for different types of guests, <u>out of the box</u>:</p>
                                        <h4>Virtual Machine State Rules</h4>
                                        <ul>
                                            <li>Running</li>
                                            <li>Stopped</li>
                                            <li>Paused</li>
                                            <li>Suspended</li>
                                        </ul>
                                        <h4>Virtual Machine Integration Service Rules</h4>
                                        <ul>
                                            <li>Time Synchronization Service Status Rules</li>
                                            <li>Heartbeat Service Status Rules</li>
                                            <li>Key-Value Pair Exchange Service Status Rules</li>
                                            <li>Shutdown Service Status Rules</li>
                                            <li>Volume Shadow-Copy Service Status Rules</li>
                                        </ul>
                                        <h4>Miscellaneous</h4>
                                        <ul>
                                            <li>Dynamic Memory Rules</li>
                                            <li>Smart Paging Rules</li>
                                            <li>Resource Metering Rules</li>
                                            <li>VM Operational Status</li>
                                            <li>VM Replication Rules</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first437" role="tabpanel" aria-labelledby="first437-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview437" aria-controls="overview437" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#instant-best-practices437" aria-controls="instant-best-practices437" role="tab" data-toggle="tab">Instant Best Practices</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored437" aria-controls="whats-monitored437" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview437">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for VMware </h2>
                                        <p>Argent for VMware provides<strong> Instant Best Practices for ESX/ESXi Hosts and all types of VM Guests</strong>.</p>
                                        <p>With a vast array of Rules delivered out of the box, Argent is ready to monitor the<strong> entire VMware cloud</strong> the moment it is installed:</p>
                                        <ul>
                                            <li>Datacenters</li>
                                            <li>Datastores</li>
                                            <li>Clusters</li>
                                            <li>Resource Pools</li>
                                            <li>ESX/ESXi Hosts</li>
                                            <li>VM Guests – Performance Rules, Event Logs, Services, etc. for both Windows and Linux/Unix guests<br>
                                                VM Logs, Events, and Patch Versions</li>
                                            <li>vMotion</li>
                                        </ul>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for VMware" data-src="https://www.argent.com/wp-content/uploads/2022/11/hv_l_b.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/hv_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for VMware" data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <p>VMware is everywhere.</p>
                                        <p>And VMware is the most important Cloud Facilitator – VMware is what makes The Cloud a reality.</p>
                                        <p>VMware makes all existing monitoring products obsolete – why use a product based around servers when VMware is now the center of your universe?</p>
                                        <p>Old server-centric monitoring makes no sense.</p>
                                        <p>Are you missing out on the technology needed for your company to stay in business?</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="instant-best-practices437">

                                        <!-- Inner Content Start -->
                                        <h3>What are Instant Best Practices?</h3>
                                        <p>Instant Best Practices are Argent’s unique technology that combines the best expert knowledge into one fully-integrated solution.</p>
                                        <p>Until Instant Best Practices, you’d have to read tedious White Papers, download and install quirky scripts, install so-called “Management” packs, find a slew of vendors’ add-ons, etc, etc, etc.</p>
                                        <p>All these tedious chores took you time and not to mention all the finger pointing from different vendors.</p>
                                        <p>Rather than being a manager and looking to move up the food chain, you were stuck wasting your time doing the donkey work of trying to make yet-another badly written script work for your environment.</p>
                                        <h3>Argent Instant Best Practices – Ready For Tomorrow</h3>
                                        <p>With Argent’s unique technology, hassles are a thing of the past.</p>
                                        <p>There are a lot of critical variables, thresholds, metrics and components you need to be on top of.</p>
                                        <p>But there’s the rub – <strong>what variables should you monitor?</strong></p>
                                        <p>Even after you’ve read all the dozens of Technical Papers, Tuning Guides, downloaded all the scripts, you now have to decide what values make sense.</p>
                                        <p>With Argent’s Instant Best Practices, all the donkey work is done for you – Instant Best Practices has all the critical variables and values defined.</p>
                                        <p>In one click you can have Argent Instant Best Practices working for you.</p>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored437">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box,<strong> Argent handles over 95% of your day-to-day needs</strong>.<br>
                                            Argent solves all your day-to-day problems —<strong> automatically.</strong></p>
                                        <h3>Instant Best Practices for ESX/ESXi Hosts</h3>
                                        <p>Argent for VMware monitors all the following critical parameters for hosts, out of the box:</p>
                                        <h4>Status and Connectivity</h4>
                                        <ul>
                                            <li>Datacenter Status</li>
                                            <li>ESX/ESXi Connectivity</li>
                                            <li>TCP/IP Pings</li>
                                            <li>VMware Logons</li>
                                        </ul>
                                        <h4>Clusters</h4>
                                        <ul>
                                            <li>Cluster CPU</li>
                                            <li>Cluster Memory</li>
                                            <li>Cluster Status</li>
                                        </ul>
                                        <h4>Resource Pools</h4>
                                        <ul>
                                            <li>CPU Summation</li>
                                            <li>Active Memory</li>
                                            <li>Grantd Memory</li>
                                            <li>Shared Memory</li>
                                        </ul>
                                        <h4>Datastores</h4>
                                        <ul>
                                            <li>Free Space %</li>
                                            <li>Free Space MB</li>
                                            <li>Datastore Visibility to Host</li>
                                        </ul>
                                        <h4>ESX/ESXi Hosts</h4>
                                        <ul>
                                            <li>CPU Usage</li>
                                            <li>Memory Usage</li>
                                            <li>Disk Usage</li>
                                            <li>Network Utilization</li>
                                            <li>Host Status</li>
                                            <li>Version and Patch Levels</li>
                                            <li>Host Hardware Failures</li>
                                            <li>SSH Scripts</li>
                                        </ul>
                                        <h4>VM Events</h4>
                                        <ul>
                                            <li>Kernel Faults</li>
                                            <li>Errors/Warnings</li>
                                            <li>Startup Failures</li>
                                            <li>Migration Failures</li>
                                            <li>VM Creation/Removal</li>
                                            <li>vMotion Events</li>
                                        </ul>
                                        <h4>vCenter</h4>
                                        <ul>
                                            <li>Idle Sessions</li>
                                            <li>Client Out-of-Date</li>
                                            <li>Client Uptime</li>
                                            <li>Client State</li>
                                            <li>Heartbeats</li>
                                            <li>PowerCLI Scripts</li>
                                        </ul>
                                        <p><span class="subtitle">Instant Best Practices for VMware&nbsp;<u>Guests</u></span></p>
                                        <p>Argent for VMware monitors all the following critical parameters for different types of guests,&nbsp;<u>out of the box</u>:</p>
                                        <h4>VMware Guest Performance</h4>
                                        <ul>
                                            <li>Active Guest Memory</li>
                                            <li>Consumed CPU</li>
                                            <li>Consumed Memory</li>
                                            <li>Network Utilization</li>
                                            <li>Overall Status</li>
                                        </ul>
                                        <h4>VMware Guest Storage</h4>
                                        <ul>
                                            <li>Disk Space %</li>
                                            <li>Unused Provisioned Storage %</li>
                                        </ul>
                                        <h4>Windows VM</h4>
                                        <ul>
                                            <li>Windows Commands</li>
                                            <li>Windows Performance Counters</li>
                                            <li>Windows Services</li>
                                            <li>PowerShell Scripts</li>
                                            <li>WMI Scripts</li>
                                        </ul>
                                        <h4>Linux/Unix VM</h4>
                                        <ul>
                                            <li>SSH Logons</li>
                                            <li>Linux/Unix Shell Scripts</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first439" role="tabpanel" aria-labelledby="first439-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview439" aria-controls="overview439" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#instant-best-practices439" aria-controls="instant-best-practices439" role="tab" data-toggle="tab">Instant Best Practices</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored439" aria-controls="whats-monitored439" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview439">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for XenServer </h2>
                                        <p>Argent for XenServer is more than just a monitoring solution — like all Argent products, Argent for XenServer is a complete automation solution, automating all the essential but labor-intensive chores that all customers must perform to ensure XenServer runs smoothly.</p>
                                        <p>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique Instant Best Practices is essential – who has the time to read White Papers?</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for XenServer" data-src="https://www.argent.com/wp-content/uploads/2022/11/axen_l_b.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/axen_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for XenServer" data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-2.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Details</h3>
                                        <p>All versions of XenServer are fully supported.</p>
                                        <p>Argent’s legendary alerting with 18 different types of alerts is fully integrated into Argent for XenServer.</p>
                                        <p>Argent for XenServer comes with pre-defined SLA reports that can be automatically emailed every morning to show the actual health and performance of XenServer.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="instant-best-practices439">

                                        <!-- Inner Content Start -->
                                        <h3>What are Instant Best Practices?</h3>
                                        <p>What are Instant Best Practices?</p>
                                        <p>Instant Best Practices are Argent’s unique technology that combines the best expert knowledge into one fully-integrated solution.</p>
                                        <p>Until Instant Best Practices, you’d have to read tedious White Papers, download and install quirky scripts, install so-called “Management” packs, find a slew of vendors’ add-ons, etc, etc, etc.</p>
                                        <p>All these tedious chores took you time and not to mention all the finger pointing from different vendors.</p>
                                        <p>Rather than being a manager and looking to move up the food chain, you were stuck wasting your time doing the donkey work of trying to make yet-another badly written script work for your environment.</p>
                                        <h4>Argent Instant Best Practices – Ready For Tomorrow</h4>
                                        <p>With Argent’s unique technology, hassles are a thing of the past.</p>
                                        <p>There are a lot of critical variables, thresholds, metrics and components you need to be on top of.</p>
                                        <p>But there’s the rub – <strong>what variables should you monitor?</strong></p>
                                        <p>Even after you’ve read all the dozens of Technical Papers, Tuning Guides, downloaded all the scripts, you now have to decide what values make sense.</p>
                                        <p><strong>With Argent’s Instant Best Practices, all the donkey work is done for you</strong> – Instant Best Practices has all the critical variables and values defined.</p>
                                        <p>In one click you can have Argent Instant Best Practices working for you.</p>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored439">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically</strong>.</p>
                                        <h3>Instant Best Practices for XenServer Hosts</h3>
                                        <p>Argent for XenServer monitors all the following critical parameters for hosts, <strong>out of the box</strong>:</p>
                                        <h4>XenServer Pools</h4>
                                        <ul>
                                            <li>Overall CPU Usage</li>
                                            <li>Overall Memory Usage</li>
                                            <li>High Availability Status</li>
                                            <li>High Availability Failures</li>
                                            <li>Workload Balancing</li>
                                            <li>Future Hosts</li>
                                            <li>Failover Plans</li>
                                            <li>Over-Committed Status</li>
                                            <li>Change Status</li>
                                        </ul>
                                        <h4>Storage Repository</h4>
                                        <ul>
                                            <li>Physical Size/Allocation</li>
                                            <li>Virtual Allocation</li>
                                            <li>Free Space</li>
                                        </ul>
                                        <h4>Hosts</h4>
                                        <ul>
                                            <li>CPU Usage</li>
                                            <li>Memory Usage</li>
                                            <li>Master Status</li>
                                            <li>Host Alive</li>
                                            <li>Host Status</li>
                                            <li>Resident VM Status</li>
                                        </ul>
                                        <h3><span class="subtitle">Instant Best Practices for XenServer&nbsp;<u>Guests</u></span></h3>
                                        <p>Argent for XenServer monitors all the following critical parameters for different types of guests,&nbsp;<u>out of the box</u>:</p>
                                        <h4>XenServer Guest Performance</h4>
                                        <ul>
                                            <li>Overall CPU</li>
                                            <li>Overall Memory</li>
                                            <li>Network Traffic</li>
                                            <li>Virtual Disk Traffic</li>
                                        </ul>
                                        <h4>XenServer Guest Status</h4>
                                        <ul>
                                            <li>Crash Dump</li>
                                            <li>Power State</li>
                                            <li>VM Run Status</li>
                                        </ul>
                                        <h4>Operating System</h4>
                                        <ul>
                                            <li>Windows Performance Rules</li>
                                            <li>Windows Services Rules</li>
                                            <li>Windows Event Rules</li>
                                            <li>System Down Rules</li>
                                            <li>SLA Rules</li>
                                            <li>PowerShell Scripts</li>
                                            <li>WMI Scripts</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first442" role="tabpanel" aria-labelledby="first442-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <h2>
                                    Argent BoardRoom </h2>
                                <p>With Argent’s patented BoardRoom technology, you can generate CIO and management drill downs out-of-the-box in minutes – Argent’s BoardRoom is easy, fast, and flexible.</p>
                                <p>Argent’s BoardRoom is delivered with an extensive portfolio of pre-defined Frames, and you can add as many new Frames as you like.</p>
                                <p>And only BoardRoom allows you to integrate web, intranet, and classical GUIs all on the same screen, so it doesn’t matter if you’re creating the CIO’s personal desktop, or a map of your worldwide operation for the 50 inch monitors in your Network Operations Center.</p>
                                <p>And Argent’s unique drilldown facilities means BoardRoom is more than just a pretty face – it’s the world’s first fully interactive Universal Media Presentation Manager.</p>
                                <div class="Images-wrap">

                                    <a href="javascript:;" data-fancybox="Argent BoardRoom" data-src="https://www.argent.com/wp-content/uploads/2022/11/br3.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/br3.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent BoardRoom" data-src="https://www.argent.com/wp-content/uploads/2022/11/br4.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/br4.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent BoardRoom" data-src="https://www.argent.com/wp-content/uploads/2022/11/br2.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/br2.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent BoardRoom" data-src="https://www.argent.com/wp-content/uploads/2022/11/br1.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/br1.jpg" alt="Image">
                                    </a>


                                </div>
                                <!-- Else OverView End-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first448" role="tabpanel" aria-labelledby="first448-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <h2>
                                    Argent Commander </h2>
                                <p>Argent Commander is an interactive, real-time facility based on Web 2.0 technology that integrates with your existing Argent Advanced Technology installation.</p>
                                <p>Argent Commander provides pre-defined “command modules” that report on key performance indicators, Top X charts and tables, as well as event and alert summaries for all the individual servers in your enterprise.</p>
                                <p>In just three clicks, go from macro to micro — drill down from an enterprise view to your individual servers and devices, to individual metrics and events.</p>
                                <p>Argent Commander fully integrates with Active Directory to provide maximum security and customization of rights and privileges.</p>
                                <p>For a live demo site, visit
                                    <a href="http://Commander.Argent.com" target="_blank">http://Commander.Argent.com</a>
                                </p>
                                <div class="Images-wrap">

                                    <a href="javascript:;" data-fancybox="Argent Commander" data-src="https://www.argent.com/wp-content/uploads/2022/11/commander4b_large_b.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/commander4b_large_b.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Commander" data-src="https://www.argent.com/wp-content/uploads/2022/11/commander3b_large_b.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/commander3b_large_b.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Commander" data-src="https://www.argent.com/wp-content/uploads/2022/11/commander2b_large_b.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/commander2b_large_b.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Commander" data-src="https://www.argent.com/wp-content/uploads/2022/11/commander1b_large_b.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/commander1b_large_b.jpg" alt="Image">
                                    </a>


                                </div>
                                <!-- Else OverView End-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first454" role="tabpanel" aria-labelledby="first454-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <h2>
                                    Argent Global Manager </h2>
                                <p>Argent Global Manager provides web-based access and full control of all Argent AT and Argent XT products. Within the past decade, the web browser has become one of the most popular and functional access devices on the desktop in virtually all business environments. Whether it’s Firefox or Internet Explorer, a web browser is often the very first application opened when a user logs on to their computer each day.</p>
                                <p>In fact, because Argent Global Manager is fully compatible with all of the award-winning Argent products, customers can now create web-based business views of their entire enterprise.</p>
                                <p>For a live demo site, visit
                                    <a href="http://Global.Argent.com" target="_blank">http://Global.Argent.com</a>
                                </p>
                                <div class="Images-wrap">

                                    <a href="javascript:;" data-fancybox="Argent Global Manager" data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-3.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-3.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Global Manager" data-src="https://www.argent.com/wp-content/uploads/2022/11/agu_l_b-1-1.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/agu_l_b-1-1.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Global Manager" data-src="https://www.argent.com/wp-content/uploads/2022/11/agm_l2_b.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/agm_l2_b.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Global Manager" data-src="https://www.argent.com/wp-content/uploads/2022/11/agm_l1_b.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/agm_l1_b.jpg" alt="Image">
                                    </a>


                                </div>
                                <h3>Fully Secure Environment</h3>
                                <p>Argent Global Manager conforms to the security settings within each Argent product, preventing unauthorized access to all Argent solutions.</p>
                                <h3>Increased Flexibility</h3>
                                <p>Web-based access to critical systems and applications results in an unprecedented level of flexibility to manage Argent products.</p>
                                <h3>Increased Control</h3>
                                <p>With virtually all of the functionality of Argent AT built into Argent Global Manager, customers never had so much control over their company’s critical applications.</p>
                                <h3>Ease Of Use</h3>
                                <p>Like all Argent products, Argent Global Manager is inherently easy to use; the web-based architecture makes it even easier.</p>
                                <!-- Else OverView End-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first460" role="tabpanel" aria-labelledby="first460-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <h2>
                                    Argent Reports </h2>
                                <p>Argent has used industry-standard Crystal Reports in all Argent products for over 15 years</p>
                                <p>To help customers better leverage Web 2.0 in their use of Argent, Argent has created a new customizable reporting product, which we’ve dubbed “Argent Reports” (very imaginative, you say)</p>
                                <p>Argent Reports is a clean and crisp product you can use to instantly create your own reports</p>
                                <p>You can see a read-only version of Argent Reports at <a href="http://ArgentReports.Argent.com" target="_blank" rel="noopener">http://ArgentReports.Argent.com</a></p>
                                <p>Just think of it — a few clicks on a simple Web 2.0 template and you’re done</p>
                                <p>An easy-to-use but exceptionally powerful scheduler is built in so you can create your own Reports and Report Groups in minutes — no hassle, just automated productivity</p>
                                <p>For a live demo site, visit
                                    <a href="http://ArgentReports.Argent.com" target="_blank">http://ArgentReports.Argent.com</a>
                                </p>
                                <div class="Images-wrap">

                                    <a href="javascript:;" data-fancybox="Argent Reports" data-src="https://www.argent.com/wp-content/uploads/2022/11/reports4_large.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/reports4_large.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Reports" data-src="https://www.argent.com/wp-content/uploads/2022/11/reports3_large.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/reports3_large.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Reports" data-src="https://www.argent.com/wp-content/uploads/2022/11/reports2_large_b.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/reports2_large_b.jpg" alt="Image">
                                    </a>



                                    <a href="javascript:;" data-fancybox="Argent Reports" data-src="https://www.argent.com/wp-content/uploads/2022/11/reports1_large_b.jpg" target="_blank">
                                        <img src="https://www.argent.com/wp-content/uploads/2022/11/reports1_large_b.jpg" alt="Image">
                                    </a>


                                </div>
                                <!-- Else OverView End-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first467" role="tabpanel" aria-labelledby="first467-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview467" aria-controls="overview467" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored467" aria-controls="whats-monitored467" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview467">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for MySQL </h2>
                                        <p>Argent for MySQL is more than just a monitoring solution — like all Argent products, Argent for MySQL is a complete automation solution, automating all the essential but labor-intensive chores that all customers must perform to ensure MySQL runs smoothly.</p>
                                        <p>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique Instant Best Practices is essential – who has the time to read White Papers?</p>
                                        <p>The most significant aspect of Argent for MySQL is the use of a number of different approaches to monitoring MySQL, unifying a centralized monitoring platform for MySQL running on all Windows or Linux/Unix systems. Think of Argent for MySQL as four or five discrete products all integrated into one super-product.</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for MySQL" data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-4.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-4.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for MySQL" data-src="https://www.argent.com/wp-content/uploads/2022/11/mysql_l_b.jpg" target="_blank">
                                                <img src="https://www.argent.com/wp-content/uploads/2022/11/mysql_l_b.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Details</h3>
                                        <p>Argent for MySQL monitors and reports on MySQL baselines, such as connection statistics, replication status, locks, cache hit rates and custom SQL queries.</p>
                                        <p>Argent for MySQL integrates with pre-defined Argent Reports that can be automatically emailed every morning to show the actual health and performance of MySQL.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored467">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs</strong>.<br>
                                            Argent solves all your day-to-day problems — <strong>automatically</strong>.</p>
                                        <h4>General Statistics</h4>
                                        <ul>
                                            <li>Database Instance Availability</li>
                                            <li>Server Uptime</li>
                                            <li>Total Connection Attempts To Server</li>
                                            <li>Number Of Current Connections</li>
                                            <li>Number Of Aborted Connections</li>
                                            <li>Number Of Aborted Clients</li>
                                            <li>Number Of SSL Client Connections</li>
                                            <li>Number Of Threads Running</li>
                                            <li>Number Of Threads Created</li>
                                            <li>Number Of Threads Cached</li>
                                            <li>Number Of Current Connections per User</li>
                                            <li>Data Traffic Total Bytes Sent To Clients</li>
                                            <li>Data Traffic Total Bytes Received From Clients</li>
                                            <li>Binary Log Status</li>
                                            <li>Replication Master Status</li>
                                            <li>Replication Slave Status</li>
                                            <li>Replication SQL Thread Status</li>
                                            <li>Replication Slave Lag Rules</li>
                                        </ul>
                                        <h4>Performance Statistics</h4>
                                        <ul>
                                            <li>Number Of Table Locks Waited</li>
                                        </ul>
                                        <h4>Performance Statistics</h4>
                                        <ul>
                                            <li>Number Of Table Locks Waited</li>
                                            <li>Number Of Slow Queries</li>
                                            <li>Number Of File System Reads</li>
                                            <li>Number Of Full Joins</li>
                                            <li>Key Read Efficiency</li>
                                            <li>Key Write Efficiency</li>
                                            <li>Table Cache Hit Rate</li>
                                            <li>Allowed Client Connections Usage</li>
                                            <li>Query Cache Hit Rate</li>
                                            <li>Database Size Usage</li>
                                            <li>Database Available Free Space</li>
                                            <li>INNODB Deadlock Detection</li>
                                            <li>Number Of Temporary Memory Tables</li>
                                            <li>Number Of Temporary Files Created</li>
                                            <li>Percentage Of Temporary Tables Created On Disk</li>
                                        </ul>
                                        <h4>Custom SQL Query Rules</h4>
                                        <ul>
                                            <li>Query</li>
                                        </ul>
                                        <h4>Operating System</h4>
                                        <ul>
                                            <li>Service Level Agreement Rules</li>
                                            <li>Windows Service Rules</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first471" role="tabpanel" aria-labelledby="first471-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview471" aria-controls="overview471" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#instant-best-practices471" aria-controls="instant-best-practices471" role="tab" data-toggle="tab">Instant Best Practices</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored471" aria-controls="whats-monitored471" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview471">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for Oracle </h2>
                                        <p>Argent for Oracle is more than just a monitoring solution — like all Argent products, <strong>Argent for Oracle is a complete automation solution</strong>, automating all the essential but labor-intensive chores that all customers must perform to ensure Oracle runs smoothly.</p>
                                        <p>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique Instant Best Practices is essential – who has the time to read White Papers?</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for Oracle" data-src="../assets/images/products/console_l_b-5.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-5.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for Oracle" data-src="../assets/images/products/ao_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/ao_l_b.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Details</h3>
                                        <p>Argent for Oracle monitors and reports on Oracle baselines, such as blocked processes, long queries, table space, CPU, memory and more.</p>
                                        <p>Argent’s legendary alerting with 18 different types of alerts is fully integrated into Argent for Oracle.</p>
                                        <p>Argent for Oracle comes with pre-defined SLA reports that can be automatically emailed every morning to show the actual health and performance of Oracle.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="instant-best-practices471">

                                        <!-- Inner Content Start -->
                                        <h3>What are Instant Best Practices?</h3>
                                        <p>Instant Best Practices are Argent’s unique technology that combines the best expert knowledge into one fully-integrated solution.</p>
                                        <p>Until Instant Best Practices, you’d have to read tedious White Papers, download and install quirky scripts, install so-called “Management” packs, find a slew of vendors’ add-ons, etc, etc, etc.</p>
                                        <p>All these tedious chores took you time and not to mention all the finger pointing from different vendors.</p>
                                        <p>Rather than being a manager and looking to move up the food chain, you were stuck wasting your time doing the donkey work of trying to make yet-another badly written script work for your environment.</p>
                                        <h3>Argent Instant Best Practices – Ready For Tomorrow</h3>
                                        <p>With Argent’s unique technology, hassles are a thing of the past.</p>
                                        <p>There are a lot of critical variables, thresholds, metrics and components you need to be on top of.</p>
                                        <p>But there’s the rub – <strong>what variables should you monitor?</strong></p>
                                        <p>Even after you’ve read all the dozens of Technical Papers, Tuning Guides, downloaded all the scripts, you now have to decide what values make sense.</p>
                                        <p><strong>With Argent’s Instant Best Practices, all the donkey work is done for you</strong> – Instant Best Practices has all the critical variables and values defined.</p>
                                        <p>In one click you can have Argent Instant Best Practices working for you.</p>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored471">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box,<strong> Argent handles over 95% of your day-to-day needs</strong>.<br>
                                            Argent solves all your day-to-day problems — <strong>automatically</strong>.</p>
                                        <h4>Storage Management</h4>
                                        <ul>
                                            <li>Data File Size</li>
                                            <li>Data File Free Space</li>
                                            <li>Log File Size</li>
                                            <li>Partition Tables</li>
                                            <li>Tablespace</li>
                                            <li>Unchanged Passwords</li>
                                        </ul>
                                        <h4>Performance</h4>
                                        <ul>
                                            <li>Available Process Percentage</li>
                                            <li>CPU Usage</li>
                                            <li>Database Performance</li>
                                            <li>Execution Times</li>
                                            <li>Memory Usage</li>
                                            <li>Parallel Query Server</li>
                                            <li>Query Parse Times</li>
                                            <li>Sessions</li>
                                            <li>Shared Memory Usage</li>
                                            <li>System Global Area (SGA)</li>
                                        </ul>
                                        <h4>Oracle Query Rules</h4>
                                        <ul>
                                            <li>Custom Queries</li>
                                            <li>Long Running Queries</li>
                                            <li>Session Statistics</li>
                                            <li>Tablespace Used</li>
                                        </ul>
                                        <h4>General Rules</h4>
                                        <ul>
                                            <li>Bad File Count</li>
                                            <li>Blocked Sessions</li>
                                            <li>Control File Count</li>
                                            <li>Database Mode</li>
                                            <li>Datafile Offline</li>
                                            <li>Logon Triggers</li>
                                            <li>Object Names</li>
                                            <li>Owner Counts</li>
                                            <li>Parallel Processing</li>
                                            <li>Process Count</li>
                                            <li>Table Counts</li>
                                        </ul>
                                        <h4>Miscellaneous</h4>
                                        <ul>
                                            <li>Oracle Logon Checks</li>
                                            <li>PowerShell Scripts</li>
                                            <li>Linux/Unix Shell Scripts</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first476" role="tabpanel" aria-labelledby="first476-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview476" aria-controls="overview476" role="tab" data-toggle="tab">Overview</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#instant-best-practices476" aria-controls="instant-best-practices476" role="tab" data-toggle="tab">Instant Best Practices</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored476" aria-controls="whats-monitored476" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview476">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for SQL Server </h2>
                                        <p>Argent for SQL Server is more than just a monitoring solution — like all Argent products, <strong>Argent for SQL Server is a complete automation solution</strong>, automating all the essential but labor-intensive chores that all customers must perform to ensure SQL Server runs smoothly.</p>
                                        <p>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique <strong>Instant Best Practices</strong> is essential – who has the time to read White Papers?</p>
                                        <p>The most significant aspect of Argent for SQL Server is the use of a number of different approaches to monitoring SQL Server: PowerShell, WMI, and classic Windows APIs are all used in different parts of the product. Think of Argent for SQL Server as four or five discrete products all integrated into one super-product.</p>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for SQL Server" data-src="../assets/images/products/ao_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/ao_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for SQL Server" data-src="../assets/images/products/console_l_b-5.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-5.jpg" alt="Image">
                                            </a>


                                        </div>
                                        <h3>Details</h3>
                                        <p>SQL Server 2000 through to SQL Server 2016 environments are fully supported.</p>
                                        <p>Argent for SQL Server monitors and reports on SQL Server baselines, disk I/O rates, queue lengths, soft and hard page faults, and tracking logs – all within a single interface.</p>
                                        <p>Argent’s legendary alerting with 18 different types of alerts is fully integrated into Argent for SQL Server.</p>
                                        <p>Argent for SQL Server comes with pre-defined SLA reports that can be automatically emailed every morning to show the actual health and performance of SQL Server.</p>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="instant-best-practices476">

                                        <!-- Inner Content Start -->
                                        <h3>What are Instant Best Practices?</h3>
                                        <p>Instant Best Practices are Argent’s unique technology that combines the best expert knowledge into one fully-integrated solution.</p>
                                        <p>Until Instant Best Practices, you’d have to read tedious White Papers, download and install quirky scripts, install so-called “Management” packs, find a slew of vendors’ add-ons, etc, etc, etc.</p>
                                        <p>All these tedious chores took you time and not to mention all the finger pointing from different vendors.</p>
                                        <p>Rather than being a manager and looking to move up the food chain, you were stuck wasting your time doing the donkey work of trying to make yet-another badly written script work for your environment.</p>
                                        <h3>Argent Instant Best Practices – Ready For Tomorrow</h3>
                                        <p>With Argent’s unique technology, hassles are a thing of the past.</p>
                                        <p>There are a lot of critical variables, thresholds, metrics and components you need to be on top of.</p>
                                        <p>But there’s the rub – <strong>what variables should you monitor?</strong></p>
                                        <p>Even after you’ve read all the dozens of Technical Papers, Tuning Guides, downloaded all the scripts, you now have to decide what values make sense.</p>
                                        <p><strong>With Argent’s Instant Best Practices, all the donkey work is done for you</strong> – Instant Best Practices has all the critical variables and values defined.</p>
                                        <p>In one click you can have Argent Instant Best Practices working for you.</p>
                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored476">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically</strong>.</p>
                                        <h4>Backups</h4>
                                        <ul>
                                            <li>Database Backup Due Dates</li>
                                            <li>Database Integrity Checks</li>
                                        </ul>
                                        <h4>Configuration Checks</h4>
                                        <ul>
                                            <li>Log and Data File Growth</li>
                                            <li>Log and Data File Locations</li>
                                            <li>Max Server Memory</li>
                                            <li>Processor Cores</li>
                                            <li>TempDB Space and Data Size</li>
                                            <li>SQL Security</li>
                                        </ul>
                                        <h4>Database Statistics</h4>
                                        <ul>
                                            <li>Database Free Space</li>
                                            <li>Transaction Log Size</li>
                                            <li>Database Free Space</li>
                                            <li>Fragmentation</li>
                                            <li>Offline Databases</li>
                                            <li>Transaction Log Shipping</li>
                                        </ul>
                                        <h4>Database Settings</h4>
                                        <ul>
                                            <li>Auto-Create Statistics</li>
                                            <li>Auto-Shrink Options</li>
                                            <li>Auto-Update Statistics</li>
                                            <li>Page Verify</li>
                                        </ul>
                                        <h4>General Statistics</h4>
                                        <ul>
                                            <li>Login/Logout Per Second</li>
                                            <li>Processes Blocked</li>
                                        </ul>
                                        <h4>SQL Statistics</h4>
                                        <ul>
                                            <li>Batch Requests</li>
                                            <li>Re-compilation Ratios</li>
                                            <li>SQL Compilations</li>
                                        </ul>
                                        <h4>Performance</h4>
                                        <ul>
                                            <li>Buffer Cache Hit Ratios</li>
                                            <li>Page Life Expectancy</li>
                                            <li>Checkpoint Pages</li>
                                            <li>Lazy Writes</li>
                                            <li>Free Pages</li>
                                            <li>Memory Grants</li>
                                            <li>Page Splits</li>
                                            <li>Lock Waits</li>
                                            <li>Deadlock Counts</li>
                                            <li>Latch Waits</li>
                                            <li>Memory Usage</li>
                                            <li>CPU Usage</li>
                                            <li>Disk Usage and I/O</li>
                                            <li>Replication Latency</li>
                                            <li>Concurrent Users</li>
                                        </ul>
                                        <h4>Queries</h4>
                                        <ul>
                                            <li>Custom SQL Query Rules</li>
                                            <li>Blocked Queries</li>
                                            <li>Runaway Queries</li>
                                        </ul>
                                        <h4>SQL Agent</h4>
                                        <ul>
                                            <li>SQL Job Status</li>
                                            <li>Blocked Queries</li>
                                            <li>Runaway Queries</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>

                        <div class="tab-pane fade " id="first478" role="tabpanel" aria-labelledby="first478-tab">

                            <!-- Inner Tabs -->
                            <div class="inner-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#overview478" aria-controls="overview478" role="tab" data-toggle="tab">OverView</a>
                                    </li>
                                    <li role="presentation">
                                        <a class="" href="#whats-monitored478" aria-controls="whats-monitored478" role="tab" data-toggle="tab">What's Monitored</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active " id="overview478">

                                        <!-- Inner Content Start -->
                                        <h2>
                                            Argent for Sybase </h2>
                                        <p>Argent for Sybase provides the complete monitoring of aspects of Sybase ASE database servers.</p>
                                        <p>Argent for Sybase monitors all the important performance indicators of Sybase ASE database server and notifies through Alerts, if the performance metrics are beyond a given threshold.</p>
                                        <p>This helps the DBA to easily pinpoint the issues which affect the overall Sybase ASE database.</p>
                                        <p>Argent for Sybase provides Rules for:</p>
                                        <ul>
                                            <li>Sybase Capacity</li>
                                            <li>Sybase Availability</li>
                                            <li>Sybase Disk I/O</li>
                                            <li>Sybase Kernel</li>
                                            <li>Sybase Data Cache</li>
                                            <li>Sybase Procedure Cache</li>
                                            <li>Sybase Metadata</li>
                                            <li>Sybase Database Usage\</li>
                                            <li>Sybase Network</li>
                                            <li>Sybase Custom Queries</li>
                                            <li>Sybase Error Logs</li>
                                            <li>Sybase Active Transactions</li>
                                            <li>Sybase Wait Events</li>
                                        </ul>
                                        <div class="Images-wrap">

                                            <a href="javascript:;" data-fancybox="Argent for Sybase" data-src="../assets/images/products/sybase_l_b.jpg" target="_blank">
                                                <img src="../assets/images/products/sybase_l_b.jpg" alt="Image">
                                            </a>



                                            <a href="javascript:;" data-fancybox="Argent for Sybase" data-src="../assets/images/products/console_l_b-5.jpg" target="_blank">
                                                <img src="../assets/images/products/console_l_b-5.jpg" alt="Image">
                                            </a>


                                        </div>

                                        <!-- Inner Content End -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="whats-monitored478">

                                        <!-- Inner Content Start -->
                                        <p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over 95% of your day-to-day needs.</strong><br>
                                            Argent solves all your day-to-day problems — <strong>automatically</strong>.</p>
                                        <h4>Sybase Availability</h4>
                                        <ul>
                                            <li>ASE Logon Rules</li>
                                            <li>Offline Engines</li>
                                            <li>Blocked Sessions</li>
                                        </ul>
                                        <h4>Sybase Capacity</h4>
                                        <ul>
                                            <li>Active Connections</li>
                                            <li>Connections Remaining</li>
                                            <li>Connections Utilization</li>
                                            <li>Connections Per Second</li>
                                            <li>Locks Remaining</li>
                                            <li>Locks Used</li>
                                            <li>Locks Utilization</li>
                                        </ul>
                                        <h4>Sybase Metadata</h4>
                                        <ul>
                                            <li>Open Databases</li>
                                            <li>Open Database Utilization</li>
                                            <li>Open Objects</li>
                                            <li>Open Objects Utilization</li>
                                            <li>Open Partitions</li>
                                            <li>Open Partitions Usage Percentage</li>
                                            <li>Open Indexes</li>
                                            <li>Open Indexes Utilization</li>
                                        </ul>
                                        <h4>Sybase Database</h4>
                                        <ul>
                                            <li>Database Count</li>
                                            <li>Database Free Space</li>
                                            <li>Transaction Log Free Space</li>
                                        </ul>
                                        <h4>Sybase Data Cache</h4>
                                        <ul>
                                            <li>Data Cache Searches</li>
                                            <li>Data Cache Hit Rate</li>
                                            <li>Data Cache Hits Per Second</li>
                                            <li>Data Cache Space Used By Objects</li>
                                        </ul>
                                        <h4>Sybase Procedure Cache</h4>
                                        <ul>
                                            <li>Procedure Cache Hit Rate</li>
                                            <li>Procedure Cache Size</li>
                                            <li>Procedure Cache Utilization</li>
                                            <li>Procedure Cache Space Used By Objects</li>
                                        </ul>
                                        <h4>Sybase Disk IO</h4>
                                        <ul>
                                            <li>Disk Reads</li>
                                            <li>Disk Writes</li>
                                        </ul>
                                        <h4>Sybase Disk IO</h4>
                                        <ul>
                                            <li>Disk Writes</li>
                                            <li>Disk Reads Per Second</li>
                                            <li>Disk Writes Per Second</li>
                                            <li>Disk IO Per Second</li>
                                        </ul>
                                        <h4>Sybase Kernel</h4>
                                        <ul>
                                            <li>Engines Online</li>
                                            <li>Engine User Busy Usage Percentage</li>
                                            <li>Engine System Busy Usage Percentage</li>
                                            <li>Engine IO Busy Usage Percentage</li>
                                        </ul>
                                        <h4>Sybase Network</h4>
                                        <ul>
                                            <li>Packets Sent In Millions</li>
                                            <li>Packets Sent Per Second</li>
                                            <li>Packets Received In Millions</li>
                                            <li>Packets Received Per Second</li>
                                            <li>Data Sent In MB</li>
                                            <li>Data Sent Per Second</li>
                                            <li>Data Received In MB</li>
                                            <li>Data Received Per Second</li>
                                        </ul>
                                        <h4>Sybase Error Logs</h4>
                                        <ul>
                                            <li>ErrorLog Archiving</li>
                                            <li>ErrorLog Monitoring</li>
                                        </ul>
                                        <h4>Sybase Active Transactions</h4>
                                        <ul>
                                            <li>Active Transaction Count</li>
                                            <li>Long Running Transaction</li>
                                        </ul>
                                        <h4>General Statistics</h4>
                                        <ul>
                                            <li>Query Response Time Rules</li>
                                            <li>Deadlock Detection</li>
                                            <li>CPU Usage Of Currently Executing T-SQL Statements</li>
                                            <li>Slow Running Query</li>
                                            <li>Instance Uptime</li>
                                            <li>Instance License Expiry</li>
                                        </ul>
                                        <h4>Operating System</h4>
                                        <ul>
                                            <li>Service Level Agreement Rules</li>
                                            <li>Windows Service Rules</li>
                                            <li>System Down Rules</li>
                                        </ul>
                                        <!-- Inner Content End -->

                                    </div>
                                </div>
                                <!-- Else OverView Start-->
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- Header -->





    </main>

    <!--  Footer  -->
    <?php include('../layout/footer.php'); ?>
    <script src="../assets/scripts/jquiry.js"></script>
    <script src="../assets/scripts/swiper.js"></script>
    <script src="../assets/scripts/scripts.js"></script>
</body>

</html>