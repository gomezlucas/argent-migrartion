<?php
$current_dir = dirname($_SERVER['PHP_SELF']);

// Verificar si la parte "/product" está presente en la URL
if (strpos($current_dir, '/product') !== false) {
    // Eliminar la parte "/product" de la URL
    $current_dir = str_replace('/product', '', $current_dir);
}



?>

<footer class="bg-[#f6fcfd] pt-[54px] pb-4">
        <div class="flex flex-col container items-center">
            <a href="#" class="">
                <img src="<?php echo $current_dir."/assets/images/footer-logo.png"; ?>"   width="184" height="20" alt="logo">
                <span class="sr-only">Logo</span>
            </a>
            <div class="grid lg:grid-cols-3 py-6 lg:pt-[100px] lg:pb-[66px] w-full gap-4">
                <div class="flex flex-col">
                    <h4
                        class="text-[#233655] text-sm lg:text-[22px] leading-[30px] font-bold text-center tracking-[4px]">
                        Company
                    </h4>
                    <ul class="flex items-center flex-col gap-1.5">
                        <li class="">
                            <a href="#"
                                class="tracking-[2px] [word-spacing:4px] text-[#596480] text-center text-xs lg:text-sm leading-normal lg:leading-7 font-medium">Contact
                                Us</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h4
                        class="text-[#233655] text-sm lg:text-[22px] leading-[30px] font-bold text-center tracking-[4px]">
                        Documentation
                    </h4>
                    <ul class="flex items-center flex-col gap-1.5">
                        <li class="">
                            <a href="#"
                                class="tracking-[2px] [word-spacing:4px] text-[#596480] text-center text-xs lg:text-sm leading-normal lg:leading-7 font-medium">
                                Support and Knowledgebase Articles
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="tracking-[2px] [word-spacing:4px] text-[#596480] text-center text-xs lg:text-sm leading-normal lg:leading-7 font-medium">
                                Live Instant Help
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="tracking-[2px] [word-spacing:4px] text-[#596480] text-center text-xs lg:text-sm leading-normal lg:leading-7 font-medium">
                                Argent’s Architecture
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h4
                        class="text-[#233655] text-sm lg:text-[22px] leading-[30px] font-bold text-center tracking-[4px]">
                        Privacy Policy
                    </h4>
                    <ul class="flex items-center flex-col gap-1.5">
                        <li class="">
                            <a href="#"
                                class="tracking-[2px] [word-spacing:4px] text-[#596480] text-center text-xs lg:text-sm leading-normal lg:leading-7 font-medium">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="px-6 lg:px-0">
                <p class="text-[#5a6581] text-xs lg:text-sm leading-7 text-center">
                    Performance Assured by Argent® Web Defender
                    <a class="text-[#1565d8]" href="https://help.argent.com/product_downloads/product_downloads_omega/"
                        target="_blank">
                        Click to download free demo
                    </a>
                </p>
            </div>
        </div>
    </footer>