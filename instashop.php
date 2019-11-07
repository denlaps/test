<?php 
include ('elements/header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <section class="contentWrapper">
        <?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            include ('elements/sidebar.php');
            $instagram_res = mysqli_query($db, "SELECT * FROM instagram WHERE id = 1 LIMIT 1");
            $instagram_row = mysqli_fetch_assoc($instagram_res);
            $token = $instagram_row['token'];
            $cid = $instagram_row['cid'];

            function rudr_instagram_api_curl_connect( $api_url ){
                $connection_c = curl_init(); // initializing
                curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
                curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
                curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
                $json_return = curl_exec( $connection_c ); // connect and get json data
                curl_close( $connection_c ); // close connection
                return json_decode( $json_return ); // decode and return
            }

            $return = rudr_instagram_api_curl_connect("https://api.instagram.com/v1/users/".$cid."/media/recent?access_token=".$token."&count=12");
        ?>


            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/instashop.php">Instashop</a></li>
                </nav>

                <h1>Instashop</h1>
                <!-- [/End Head] -->
                
                <!-- [MAIN CONTENT] -->
                <main class="instaShop">
                    <!-- [INSTA] -->
                    <section class="instaShop__wrapper">
                        <?php foreach ($return->data as $post) { ?>
                            <a href="<?= $post->link ?>"><img src="<?= $post->images->standard_resolution->url ?>" alt=""></a>
                        <?php } ?>
                    </section>
                    <!-- [/END INSTA] -->

                    <button onclick="loadMoreInstagram()" class="showMore">Показать ещё</button>
                </main>
                <!-- [/END CONTENT] -->
            </section>
            <!-- [/END RIGHT] -->
        </section>
    </div>
    
    <?php include('elements/footer.php'); ?>
            
    <script>
        var nextUrl = `<?= $return->pagination->next_url ?>`;
        function loadMoreInstagram() {
            $.get(nextUrl, (res) => {
                res.data.forEach((el) => {
                    $('.instaShop__wrapper').append(`<a href="` + el.link + `"><img src="` + el.images.standard_resolution.url + `" alt=""></a>`);
                });
                nextUrl = res.pagination.next_url;
            });
        }
       
    </script>

    <!-- [SCRIPTS] -->

    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>
</html>