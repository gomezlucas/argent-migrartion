<?php
$current_dir = dirname($_SERVER['PHP_SELF']);

// Verificar si la parte "/product" está presente en la URL
if (strpos($current_dir, '/product') !== false) {
    // Eliminar la parte "/product" de la URL
    $current_dir = str_replace('/product', '', $current_dir);
}



?>
<header class="lg:py-5 bg-white sticky top-0 shadow-header transition-all duration-700">
        <div class="container grid grid-cols-2 lg:flex lg:items-center lg:justify-between lg:px-10">
            <a href="https://instanthelp.argent.com/login"
                class="px-10 py-2 lg:p-0 col-span-2 lg:order-last text-[#ff602e] text-lg leading-7 tracking-[2px] font-semibold flex items-center justify-center lg:justify-end bg-[#001647] lg:bg-transparent gap-1">
                <img src="<?php echo $current_dir."/assets/images/support.svg"; ?>" width="38" height="38" alt="v">
                Instant Help
            </a>
            <a href="#" class="pl-10 py-7 lg:p-0">
                <img src="<?php echo $current_dir."/assets/images/logo.png"; ?>" width="147" height="16" alt="Logo">                 
                <span class="sr-only">Logo</span>
            </a>
            <!-- Navbar -->
            <nav class="nav-menu flex justify-end">
                <ul id="menu-header-menu"
                    class="transition-all duration-700 flex flex-col lg:flex-row z-[1] py-4 lg:py-0  gap-2 lg:gap-10 fixed lg:static -top-52 left-0 w-full lg:w-auto bg-[#f2fbfc] lg:bg-transparent">
                    <li class="menu-item nav-item active ">
                        <a href="<?php echo $current_dir."/"; ?>" class="nav-link-custom">Home</a>
                    </li>
                    <li class="menu-item  nav-item">
                        <a href="<?php echo $current_dir."/products.php"; ?>" class="nav-link-custom">Products</a>
                    </li>
                    <li class="menu-item  nav-item">
                        <a href="<?php echo $current_dir."/white-papers.php"; ?>" class="nav-link-custom">White Papers</a>
                    </li>
                    <li class="menu-item  nav-item">
                        <a href="<?php echo $current_dir."/company.php"; ?>" class="nav-link-custom">Company</a>
                    </li>
                    <li class="menu-item  nav-item">
                        <a target="_blank" rel="noopener" href="https://help.argent.com/support/"
                            class="nav-link-custom">Support</a>
                    </li>
                </ul>
                <div class="toggle-mob-menu w-fit pr-10 py-7 lg:p-0 flex flex-col gap-1.5 items-end lg:hidden"
                    id="toggle">
                    <div class="one transition-all duration-300 origin-center h-[3px] w-7 bg-[#ff602e]"></div>
                    <div class="two transition-all duration-300 origin-center h-[3px] w-7 bg-[#ff602e]"></div>
                    <div class="three transition-all duration-300 origin-center h-[3px] w-7 bg-[#ff602e]"></div>
                </div>
            </nav>
            <!-- Navbar -->
        </div>
    </header>