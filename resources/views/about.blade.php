<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Concetta Photos - About</title>
    <link rel="icon" type="image/png" href="{{ asset('head_logo.png') }}">

    <!-- Open Graph meta tags (Facebook, WhatsApp, LinkedIn, etc) -->
    <meta property="og:title" content="About Concetta Photos" />
    <meta property="og:description" content="Learn about Us!" />
    <meta property="og:image" content="{{ url('about_seo_image.jpg') }}" />
    <meta property="og:url" content="https://www.concettaphotos.com/about" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Concetta Photos" />

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Concetta Team" />
    <meta name="twitter:description" content="Learn about Us!" />
    <meta name="twitter:image" content="{{ url('about_seo_image.jpg') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <style>
        #tac-holidayfamily {
            scroll-margin-top: 120.55px;
        }

        #tac-prewedding {
            scroll-margin-top: 168px;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <section id="header">
        @include('layouts.navigation')
    </section>

    <section id="picture" class="position-relative">
        <div class="position-relative w-100 d-none d-sm-flex" style="height: 400px;">
            <img src="{{ asset('about.jpg') }}" alt="about picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
        <div class="position-relative w-100 d-flex d-sm-none" style="height: 400px;">
            <img src="{{ asset('about_mobile.jpg') }}" alt="about picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
    </section>

    <section id="about">
        <div class="px-5 py-5 text-center"> <img class="d-block mx-auto mb-4" src="{{ asset('logo_cp.png') }}"
                alt="Concetta Photos Logo" width="70px">
            <h1 class="display-5 aesthetic-text-1 mb-3">Concetta Photos</h1>
            <div class="col-lg-6 mx-auto mb-5">
                <p class="lead custom-text-0 mb-5">
                    <span class="lang-content lang-en">
                        Founded in 2018, Concetta Photos has been capturing timeless moments with passion and precision.
                        What began as a love for visual storytelling has grown into a professional photography service
                        trusted by clients across various occasions — from intimate portraits to grand celebrations.
                        <br><br>

                        With years of experience and a keen eye for detail, Concetta Photos brings a unique blend of
                        creativity, professionalism, and heartfelt dedication to every shoot. We believe that every
                        photo should not only tell a story but also preserve emotions that words cannot express.
                        <br><br>

                        Whether it's weddings, lifestyle sessions, events, or creative shoots, we strive to make every
                        frame meaningful, memorable, and beautifully authentic. <br><br>

                        <mark class="aesthetic-text-1">"Let’s make your memories remains forever."</mark>
                    </span>

                    <span class="lang-content lang-id d-none">
                        Didirikan pada tahun 2018, Concetta Photos telah menangkap momen-momen abadi dengan penuh
                        semangat dan ketelitian. Apa yang dimulai dari kecintaan terhadap bercerita secara visual kini
                        telah berkembang menjadi layanan fotografi profesional yang dipercaya oleh klien dalam berbagai
                        kesempatan — mulai dari potret intim hingga perayaan besar. <br><br>

                        Dengan pengalaman bertahun-tahun dan ketajaman dalam menangkap detail, Concetta Photos
                        menghadirkan perpaduan unik antara kreativitas, profesionalisme, dan dedikasi sepenuh hati di
                        setiap sesi pemotretan. Kami percaya bahwa setiap foto bukan hanya harus menceritakan sebuah
                        kisah, tetapi juga menyimpan emosi yang tak bisa diungkapkan dengan kata-kata. <br><br>

                        Baik itu pernikahan, sesi gaya hidup, acara, maupun pemotretan kreatif, kami berusaha menjadikan
                        setiap bingkai berarti, berkesan, dan autentik dengan indah. <br><br>

                        <mark class="aesthetic-text-1">"Let’s make your memories remains forever."</mark>
                    </span>
                </p>
            </div>
            <div class="col-10 col-md-8 col-lg-6 mx-auto custom-border"></div>
            <h1 class="display-7 aesthetic-text-1 mt-5 lang-content lang-en">Our Social Media</h1>
            <h1 class="display-7 aesthetic-text-1 mt-5 lang-content lang-id d-none">Sosial Media Kami</h1>

            <div class="container px-4" id="icon-grid">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5 g-4 pt-5">
                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('instagram_logo.png') }}" alt="Instagram Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Instagram</h3>
                            <a class="text-body-secondary" href="https://www.instagram.com/concettaphotos/"
                                target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <p class="custom-text-0">@concettaphotos</p>
                            </a>
                            <a class="text-body-secondary" href="https://www.instagram.com/lovestorybyconcetta/"
                                target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <p class="custom-text-0">@lovestorybyconcettaphotos</p>
                            </a>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('tiktok_logo.png') }}" alt="Tiktok Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Tiktok</h3>
                            <a class="text-body-secondary"
                                href="https://www.tiktok.com/@concettaphotos?is_from_webapp=1&sender_device=pc"
                                target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <p class="custom-text-0">@concettaphotos</p>
                            </a>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('thread_logo.png') }}" alt="Thread Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Thread</h3>
                            <a class="text-body-secondary" href="https://www.threads.com/@concettaphotos"
                                target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <p class="custom-text-0">@concettaphotos</p>
                            </a>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('twitter_logo.png') }}" alt="Twitter Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Twitter</h3>
                            <a class="text-body-secondary" href="https://x.com/ConcettaPhotos_" target="_blank"
                                rel="noopener noreferrer" aria-label="Twitter">
                                <p class="custom-text-0">@ConcettaPhotos_</p>
                            </a>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('email_logo.png') }}" alt="Email Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Email</h3>
                            <p class="custom-text-0">concettaphotosbali@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tac-holidayfamily">
        <div class="p-5 text-center bg-body-custom">
            <div class="container">
                <h1 class="display-7 aesthetic-text-1 lang-content lang-en">Terms and Conditions</h1>
                <h1 class="display-7 aesthetic-text-1 lang-content lang-id d-none">Syarat dan Ketentuan</h1>
                <div class="col-4 mx-auto mb-3 custom-border-divider mb-5"></div>

                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-3 custom-border"></div>
                <h2 class="display-7 text-center my-4 aesthetic-text-1">Holiday & Family</h2>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="row g-4">

                    <div class="col-12">
                        <div class="bg-light p-4 rounded shadow-sm border custom-text-0 text-justify-center">
                            <h6 class="lang-content lang-en custom-line-height fw-bold">
                                Make sure the client read this terms and conditions carefully. By placing an order and
                                making payment, the client must have agreed to and read all the terms and conditions
                                provided by Concetta Photos as written below.
                            </h6>
                            <h6 class="lang-content lang-id d-none custom-line-height fw-bold">
                                Klien diharapkan membaca setiap poin yang terdapat dalam syarat dan ketentuan ini dengan
                                seksama. Dengan melakukan pemesanan dan pembayaran, maka klien dianggap telah menyetujui
                                dan membaca semua syarat dan ketentuan yang diberikan oleh Concetta Photos yang tertulis
                                di bawah ini.
                            </h6>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                1. For a Portfolio, you can check our Instagram <mark>@concettaphotos</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                1. Cek di Instagram kami <mark>@concettaphotos</mark> untuk portofolio lengkap.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                2. A <mark>deposit of 50%</mark> of the selected package is required for bookings.
                                <mark>The deposit is not refundable</mark>. If you book for two or more sessions on
                                several different days, you must pay a <mark>deposit of 65%</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                2. Booking wajib melakukan <mark>pembayaran DP sebesar 50%</mark> dari paket yang
                                dipilih dan <mark>tidak dapat dikembalikan</mark>. Jika melakukan booking untuk dua atau
                                lebih sesi berbeda dalam beberapa hari yang berbeda, maka wajib untuk membayar <mark>DP
                                    sebesar 65%</mark> dari total paket yang dipilih.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                3. Location will be discussed after we received the deposit. <mark>Package can't be
                                    downgraded</mark> after the deposit, but you can upgrade the package if needed.
                            </span>
                            <span class="lang-content lang-id d-none">
                                3. Setelah pembayaran DP kami terima, client dapat berdiskusi dengan kami tentang lokasi
                                untuk sesi foto. <mark>Paket yang sudah dipilih tidak dapat didowngrade</mark> dengan
                                alasan apapun, tetapi paket dapat diupgrade bila diperlukan.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                4. <mark>The package is only valid for 1 day</mark>, cannot be divided into other days,
                                and is <mark>valid for one family</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                4. <mark>Paket hanya berlaku untuk 1 hari</mark>, tidak bisa dibagi ke hari lain dan
                                <mark>berlaku untuk 1 keluarga</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                5. Clients are expected to <mark>arrive/prepare on time</mark>. If there is a delay,
                                <mark>the shooting time will be deducted</mark> according to an agreement.
                            </span>
                            <span class="lang-content lang-id d-none">
                                5. Client diharapkan <mark>datang & siap tepat waktu</mark> sesuai dengan kesepakatan
                                sesi. Jika terjadi keterlambatan, maka <mark>waktu pemotretan tetap dihitung</mark>
                                sesuai kesepakatan awal.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                6. If shooting sessions are not possible due to <mark>force majeure (bad weather and
                                    natural disasters)</mark>, client can look for alternatives to other places or
                                reschedule.
                            </span>
                            <span class="lang-content lang-id d-none">
                                6. Bila sesi pemotretan tidak memungkinkan karena <mark>force majeure (cuaca buruk dan
                                    bencana alam)</mark>, bisa mencari alternatif tempat lain atau reschedule.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                7. Any schedule changes made by the client <mark>one day prior to or on the day of the
                                    photo session</mark> will be subject to a <mark>rescheduling fee of IDR
                                    350,000</mark>, unless the change is caused by force majeure circumstances.
                            </span>
                            <span class="lang-content lang-id d-none">
                                7. <mark>Perubahan jadwal yang dilakukan oleh klien pada 1 hari sebelum dan atau hari
                                    H</mark> sesi foto akan berlangsung, dikenakan <mark>biaya reschedule sebesar
                                    Rp350.000</mark>. Adapun perubahan jadwal yang dilakukan klien ini selain dari
                                alasan force majeure.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                8. If the client asking more than one shooting location, for example, in a 2-hour
                                session, then the <mark>travel time from location A to location B is also part of the 2
                                    hours session</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                8. Jika client mengusulkan lebih dari 1 lokasi pemotretan misalkan pada sesi 2 jam, maka
                                <mark>waktu perjalanan dari lokasi A ke lokasi B juga merupakan bagian dalam 2 jam
                                    tersebut</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                9. The <mark>location fees</mark> imposed by the local authorities vary at each place
                                and are <mark>entirely borne by the client</mark>. Suppose the client chooses a
                                photography location in a tourist attraction that requires an entrance ticket. In that
                                case, the client is <mark>responsible for covering the ticket expenses</mark> for the
                                entire Concetta Photos crew.
                            </span>
                            <span class="lang-content lang-id d-none">
                                9. <mark>Biaya lokasi pemotretan</mark> yang dipungut oleh pihak pengelola setempat
                                berbeda di setiap tempat dan <mark>sepenuhnya ditanggung oleh klien</mark>. Jika klien
                                memilih lokasi pemotretan di tempat wisata yang memiliki tiket masuk, maka klien
                                <mark>wajib menanggung biaya tiket</mark> tersebut untuk seluruh crew Concetta Photos.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                10. For additional time, <mark>IDR 350,000/hour</mark>. This price is only valid for
                                clients who take a 2-hour package.
                            </span>
                            <span class="lang-content lang-id d-none">
                                10. Untuk waktu tambahan, dikenakan <mark>charge sebesar Rp350.000/jam</mark>. Harga ini
                                hanya berlaku bagi client yang mengambil paket 2 jam.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                11. The files we give, and <mark>tone adjustments (exposure, saturation,
                                    contrast)</mark> have been sorted, so the files you received are the best.
                            </span>
                            <span class="lang-content lang-id d-none">
                                11. File yang kami kirim adalah file yang sudah melalui tahap seleksi dan
                                <mark>penyesuaian tone (exposure, saturasi, contrast)</mark>, sehingga file yang client
                                terima adalah yang terbaik.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                12. We will deliver photos via Google Drive. After shooting, we will send the links
                                <mark>H+1 and a maximum of H+2</mark> with a note that the client has paid off. The
                                <mark>link will be active for one month</mark>. If, in the future, the client asks for
                                reuploading, an <mark>additional fee of IDR 200,000</mark> will be charged.
                            </span>
                            <span class="lang-content lang-id d-none">
                                12. File dikirimkan melalui Google Drive dalam rentang waktu <mark>H+1 sampai H+2</mark>
                                setelah pemotretan dengan catatan client sudah melakukan pelunasan. <mark>Link tersebut
                                    akan aktif selama 1 bulan</mark> dan akan dikenakan <mark>biaya tambahan sebesar
                                    Rp200.000</mark> jika client meminta pengupload-an ulang.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                13. <mark>Concetta Photos holds full copyright ownership</mark> of all photos taken
                                during the photography session. As the service provider, we have the right to <mark>use
                                    the photos for promotional purposes</mark>. For clients who wish to refrain from
                                having their photos published on our social media or other platforms for promotional
                                purposes by Concetta Photos, please <mark>inform us before or after the
                                    photoshoot</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                13. <mark>Hasil foto seutuhnya menjadi milik Concetta Photos</mark> dan akan
                                dipergunakan sebagai <mark>konten promosi</mark> di berbagai media sosial. Client yang
                                tidak berkenan, harap untuk <mark>memberitahukan di awal</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="bg-light p-4 rounded shadow-sm border custom-text-0 text-justify-center">
                            <h6 class="lang-content lang-en custom-line-height fw-bold">
                                By paid deposit, the client is considered to have agreed with the T&Cs
                                above.
                            </h6>
                            <h6 class="lang-content lang-id d-none custom-line-height fw-bold">
                                Dengan membayar deposit, klien dianggap telah menyetujui syarat dan
                                ketentuan di atas.
                            </h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="tac-prewedding">
        <div class="pb-5 px-5 text-center">
            <div class="container">

                <div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 mb-3 custom-border"></div>
                <h2 class="display-7 text-center my-4 aesthetic-text-1">Preweddding</h2>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="row g-4">
                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm border custom-text-0 text-justify-center">
                            <h6 class="lang-content lang-en custom-line-height fw-bold">
                                Make sure the client read this terms and conditions carefully. By placing an order
                                and
                                making payment, the client must have agreed to and read all the terms and conditions
                                provided by Concetta Photos as written below.
                            </h6>
                            <h6 class="lang-content lang-id d-none custom-line-height fw-bold">
                                Klien diharapkan membaca setiap poin yang terdapat dalam syarat dan ketentuan ini
                                dengan
                                seksama. Dengan melakukan pemesanan dan pembayaran, maka klien dianggap telah
                                menyetujui
                                dan membaca semua syarat dan ketentuan yang diberikan oleh Concetta Photos yang
                                tertulis
                                di bawah ini.
                            </h6>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Booking and Payment</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Pemesanan dan Pembayaran</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. Klien diwajibkan untuk melakukan pembayaran sebesar <mark>50% dari harga paket</mark>
                                yang dipilih
                                sebagai <mark>deposit pembayaran (DP)</mark> untuk pemesanan jadwal pemotretan.
                                <mark>Deposit ini bersifat
                                    tidak dapat dikembalikan</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. The client must to make a <mark>50% payment</mark> of the selected package price as a
                                <mark>non-refundable deposit (DP)</mark> for booking the photography session schedule.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. Harga yang tertera <mark>belum termasuk biaya transportasi dan biaya lokasi</mark>
                                (jika ada).
                                Biaya transportasi yang tercantum di atas hanya untuk <mark>fotografer &
                                    videografer</mark>, belum
                                termasuk biaya transportasi <mark>MUA</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. The listed price <mark>does not include transportation and location fees</mark> (if
                                applicable).
                                The transportation fee mentioned above is for <mark>photographers and
                                    videographers</mark> and does
                                not include the <mark>makeup artist’s transportation fee</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Cancellation</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Pembatalan</h5>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. <mark>Pembatalan yang dilakukan oleh klien akan mengakibatkan kehilangan Deposit
                                    Pembayaran (DP)</mark> yang telah dibayarkan sebelumnya.
                                Pembatalan atau perubahan jadwal yang dilakukan oleh Concetta Photos akan disampaikan
                                kepada klien sesegera mungkin dan kami akan
                                memberikan <mark>opsi lain, penjadwalan ulang, atau pengembalian dana</mark> jika
                                diperlukan.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. <mark>Cancellation by the client will result in the loss of the previously paid
                                    Deposit Payment (DP)</mark>.
                                Cancellations or schedule changes made by Concetta Photos will be communicated to the
                                client as soon as possible, and we will provide
                                <mark>alternative options, rescheduling, or a refund</mark> if necessary.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Location</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Lokasi</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. <mark>Klien berhak memilih lokasi</mark> sesuai dengan <mark>preferensinya</mark>
                                maupun berdasarkan
                                <mark>rekomendasi dari kami</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. <mark>The client can choose a location</mark> based on their <mark>preference</mark>
                                or <mark>our recommendations</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. Lokasi pemotretan yang kami cakup <mark>terbatas hanya di pulau utama Bali</mark>.
                                Khusus area <mark>Nusa Penida</mark>, untuk sementara wilayah tersebut <mark>diluar
                                    cakupan kami</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. The photography locations we cover are <mark>limited to the main island of
                                    Bali</mark>. However,
                                the <mark>Nusa Penida area</mark> is currently <mark>beyond our coverage</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                3. Untuk pemotretan yang dilakukan <mark>di luar Bali</mark> sesuai dengan keinginan
                                klien, dapat
                                didiskusikan terlebih dahulu kepada kami dengan catatan <mark>klien wajib menanggung
                                    seluruh biaya akomodasi dan transportasi seluruh kru Concetta Photos</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                3. For photography sessions <mark>outside of Bali</mark>, as desired by the client, it
                                can be
                                discussed with us, provided that the <mark>client bears all accommodation and
                                    transportation expenses for the entire Concetta Photos crew</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                4. <mark>Biaya lokasi pemotretan</mark> yang dipungut oleh pihak pengelola setempat
                                berbeda disetiap tempat dan sepenuhnya <mark>ditanggung oleh klien</mark>.
                                Jika klien memilih lokasi pemotretan di tempat wisata yang memiliki tiket masuk, maka
                                <mark>klien wajib menanggung biaya tiket tersebut untuk seluruh crew Concetta
                                    Photos</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                4. <mark>The location fees</mark> imposed by the local authorities vary at each place
                                and are
                                <mark>entirely borne by the client</mark>. Suppose the client chooses a photography
                                location in a
                                tourist attraction that requires an entrance ticket. In that case, the <mark>client is
                                    responsible for covering the ticket expenses for the entire Concetta Photos
                                    crew</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Date & Time</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Tanggal dan Waktu</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. <mark>Pergantian tanggal dapat dilakukan maksimal 2 minggu sebelum hari H</mark>.
                                Klien <mark>diwajibkan untuk mencocokkan tanggal baru</mark> tersebut dengan jadwal
                                kami. Jika <mark>tanggal baru yang dipilih tidak tersedia</mark> dan tidak menemukan
                                jalan tengah, maka kami <mark>tidak berkewajiban untuk mengembalikan deposit</mark> yang
                                telah dibayarkan.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. <mark>Date changes can be made up to 2 weeks before the scheduled day</mark>. The
                                client is <mark>required to communicate the new date</mark> with our availability.
                                Suppose <mark>the new date chosen is unavailable</mark>, and no compromise can be
                                reached. In that case, <mark>we are not obligated to refund the deposit</mark> payment.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. <mark>Pergantian jam pemotretan dapat dilakukan maksimal H-2</mark> selama
                                <mark>jadwal kami masih memungkinkan</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. <mark>Changes in the photography session time can be made up to 2 days before</mark>
                                the scheduled time, <mark>as long as our schedule allows</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                3. <mark>Perubahan jadwal yang dilakukan oleh klien pada hari H sesi foto</mark> akan
                                berlangsung, <mark>dikenakan biaya reschedule sebesar Rp650.000</mark>. Adapun
                                <mark>perubahan jadwal yang dilakukan klien ini selain dari alasan force majeure</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                3. <mark>The client will be charged a rescheduling fee of IDR650.000</mark> for
                                <mark>any schedule changes made on the day of the photo session</mark>. These schedule
                                changes by the client are applicable, <mark>excluding force majeure reasons</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                4. Jika klien <mark>memilih paket foto dengan 2-3 lokasi</mark>, maka <mark>waktu yang
                                    ditempuh selama perjalanan</mark> antara lokasi 1 ke lokasi lainnya <mark>masuk ke
                                    dalam waktu sesi pemotretan</mark> yang telah dipilih.
                            </span>
                            <span class="lang-content lang-en d-none">
                                4. If the client <mark>chooses a photo package with 2-3 locations</mark>, the
                                <mark>travel time between locations</mark> 1 and 2 will be <mark>included in the
                                    selected session time</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                5. <mark>Klien diharapkan datang dan siap pada waktu yang telah disepakati</mark> karena
                                <mark>keterlambatan klien berpotensi mengakibatkan keterlambatan pada jadwal klien kami
                                    yang lainnya</mark>. Kami <mark>berhak untuk membatalkan kesepakatan</mark> dan kami
                                <mark>tidak berkewajiban mengembalikan deposit</mark> yang telah dibayarkan.
                            </span>
                            <span class="lang-content lang-en d-none">
                                5. <mark>The client is expected to arrive and be ready at the agreed-upon time</mark>,
                                as <mark>client delays may cause delays in our schedule with other clients</mark>. We
                                <mark>reserve the right to cancel the agreement</mark> and are <mark>not obligated to
                                    refund the deposit payment</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                6. Jika <mark>klien tidak datang sesuai waktu yang telah disepakati</mark> maka
                                <mark>waktu pemotretan tetap dihitung</mark> sesuai dengan kesepakatan awal. Kecuali
                                <mark>klien menyertakan alasan yang dapat kami terima</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                6. Suppose <mark>the client arrives after the agreed-upon time</mark>. In that case,
                                <mark>the photography session time will still be counted</mark> according to the initial
                                agreement unless <mark>the client provides a valid and acceptable reason</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                7. Kami <mark>memberikan toleransi waktu keterlambatan</mark> (dengan alasan yang dapat
                                kami terima) selama <mark>15 menit awal setelah sesi waktu yang disepakati
                                    berjalan</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                7. We <mark>provide a grace period for lateness</mark> with a valid reason accepted of
                                up to <mark>15 minutes after the agreed-upon session time has started</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Editing and Photo Delivery</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Pengeditan dan Pengiriman Foto</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. Foto yang diberikan oleh <mark>Concetta Photos</mark> telah melalui <mark>tahap
                                    seleksi dan penyesuaian tone</mark> meliputi <mark>eksposur, saturasi,
                                    kontras</mark> untuk memberikan hasil terbaik kepada klien.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. The photos provided by <mark>Concetta Photos</mark> have been through the
                                <mark>selection process and tone adjustments</mark>, including <mark>exposure,
                                    saturation, and contrast</mark>, to ensure the best results for the client.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. <mark>Jumlah foto</mark> yang kami berikan sesuai dengan yang tercantum pada
                                <mark>pricelist</mark> saat klien melakukan pemesanan. Bila klien ingin <mark>membeli
                                    foto lebih dari jumlah</mark> atau semua foto di luar yang tertera dalam pricelist,
                                maka akan <mark>dikenakan biaya tambahan</mark> sesuai dengan kesepakatan kedua belah
                                pihak.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. The <mark>number of photos</mark> we provide corresponds to the quantity stated in
                                the <mark>pricelist</mark> at the time of client booking. Suppose the client wishes to
                                <mark>purchase additional photos</mark> beyond the stated quantity or all photos not
                                listed in the pricelist. In that case, <mark>an additional fee will be applied</mark>
                                based on the agreement between both parties.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                3. Adapun <mark>fine edit</mark> yang dilakukan seperti <mark>mengecilkan bagian tubuh,
                                    menghilangkan jerawat, atau memuluskan kulit</mark>, akan dilakukan berdasarkan
                                <mark>permintaan klien</mark>. Foto yang akan menjalani fine edit akan <mark>dipilih
                                    oleh klien</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                3. Based on <mark>client requests</mark>, <mark>fine edits</mark> such as <mark>body
                                    slimming, blemish removal, or skin smoothing</mark> will be done. The <mark>client
                                    will choose</mark> the photos that will undergo fine edits.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                4. Foto-foto akan diberikan kepada klien melalui <mark>link Google Drive</mark> dalam
                                waktu <mark>paling cepat 2 hari</mark> setelah pemotretan dan <mark>paling lambat 3
                                    hari</mark> setelah pemotretan, dengan catatan <mark>klien sudah melunasi
                                    pembayaran</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                4. The photos will be delivered to the client via <mark>Google Drive link</mark> within
                                a <mark>minimum of 2 days</mark> and a <mark>maximum of 3 days</mark> after the
                                photoshoot, provided that the <mark>client has completed the payment</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                5. <mark>Link Google Drive</mark> akan aktif selama <mark>satu bulan</mark> terhitung
                                sejak Concetta Photos mengirimkan link. Jika dikemudian hari klien meminta
                                <mark>pengunggahan foto ulang</mark>, maka akan dikenakan <mark>biaya tambahan sebesar
                                    Rp100.000</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                5. The <mark>Google Drive link</mark> will be active for <mark>one month</mark> from the
                                date Concetta Photos sends the link. If, in the future, the client requests a
                                <mark>re-upload of the photos</mark> at a later date, an <mark>additional fee of
                                    IDR100.000</mark> will be applied.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Force Majeure</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Force Majeure</h5>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                1. Jika sesi pemotretan tidak dapat dilakukan karena <mark>keadaan yang di luar kendali
                                    manusia</mark> seperti <mark>cuaca buruk, bencana alam, pandemi</mark>, dan insiden
                                lainnya, Concetta Photos akan mencari <mark>alternatif tempat lain atau menjadwalkan
                                    ulang sesi</mark> sesuai kesepakatan kedua belah pihak.
                            </span>
                            <span class="lang-content lang-id d-none">
                                1. Suppose the photoshoot session cannot be conducted due to <mark>force majeure
                                    circumstances</mark> such as <mark>bad weather, natural disasters, pandemics</mark>,
                                and other incidents. In that case, Concetta Photos will seek <mark>alternative locations
                                    or reschedule the session</mark> according to the agreement between both parties.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Privacy</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Privasi</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. Kami selaku <mark>pemegang hak cipta</mark> yang berhak melakukan promosi dengan foto
                                yang telah kami ambil selama sesi. Bagi klien yang <mark>tidak bersedia fotonya kami
                                    publikasikan</mark> di sosial media atau media lainnya demi kepentingan promosi dari
                                Concetta Photos, harap untuk <mark>menginformasikan kepada kami</mark> sebelum atau
                                sesudah sesi foto berlangsung.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. As <mark>copyright holders</mark>, we can promote our services using the photos taken
                                during the session. For clients who <mark>wish to refrain from having their photos
                                    published</mark> on our social media or other platforms for promotional purposes by
                                Concetta Photos, please <mark>inform us</mark> before or after the photoshoot.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. Bagi klien yang <mark>tidak menginformasikan kepada kami</mark> mengenai poin 1, maka
                                kami anggap klien yang bersangkutan <mark>bersedia atau setuju foto yang telah diambil
                                    dipublikasikan</mark> untuk kepentingan promosi kami dan kami <mark>bebas dari
                                    kompensasi, pertanggungjawaban, gugatan hukum</mark>, dan <mark>tuntutan dalam jenis
                                    apapun</mark> dari pihak manapun dan dalam jumlah berapapun.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. For clients who <mark>do not inform us</mark> regarding point 1, we assume that the
                                client <mark>agrees or consents to the publication</mark> of the photos taken for our
                                promotional purposes. We are <mark>released from any compensation, liability, legal
                                    claims</mark>, and <mark>demands of any kind</mark> from any party in any amount.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                3. <mark>Concetta Photos memiliki secara penuh hak cipta</mark> atas semua foto yang
                                diambil selama sesi fotografi. Kami selaku penyedia jasa <mark>berhak menggunakan
                                    foto-foto</mark> yang telah kami ambil selama sesi berlangsung untuk keperluan
                                promosi kami, <mark>kecuali terjadi perjanjian antara kedua belah pihak</mark> sebelum
                                sesi berlangsung yang menyepakati bahwa foto klien bersifat privasi/tidak boleh
                                dipublikasi sesuai dengan poin sebelumnya.
                            </span>
                            <span class="lang-content lang-en d-none">
                                3. <mark>Concetta Photos holds full copyright ownership</mark> of all photos taken
                                during the photography session. As the service provider, we <mark>have the right to use
                                    the photos</mark> taken during the session for promotional purposes <mark>unless
                                    there is an agreement between both parties</mark> before the session stating that
                                the client’s photos are private/not to be published, as stated in previous point.
                            </span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="p-4 rounded shadow-sm border custom-text-0 text-justify-center">
                            <h6 class="lang-content lang-en custom-line-height fw-bold">
                                By paid deposit, the client is considered to have agreed with the T&Cs
                                above.
                            </h6>
                            <h6 class="lang-content lang-id d-none custom-line-height fw-bold">
                                Dengan membayar deposit, klien dianggap telah menyetujui syarat dan
                                ketentuan di atas.
                            </h6>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-10 col-md-8 col-lg-6 mx-auto custom-border"></div>
    </section>

    <section id="book" class="bg-body-custom">
        <main class="container">
            <div
                class="p-4 p-md-5 rounded text-body-emphasis d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-6 px-0">
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-en">Let's book your session now!</h2>
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-id d-none">Yuk, booking sesi fotomu
                        sekarang!</h2>

                    <h5 class="display-10 custom-text-0 lang-content lang-en">Are the Terms and Conditions acceptable to
                        you?</h5>
                    <h5 class="display-10 custom-text-0 lang-content lang-id d-none">Apakah kamu setuju dengan Syarat &
                        Ketentuan di atas?</h5>

                    <a href="/faqs#inquiry" type="button" class="btn btn-primary btn-lg my-3 lang-content lang-en">Book
                        Now!</a>
                    <a href="/faqs#inquiry" type="button"
                        class="btn btn-primary btn-lg my-3 lang-content lang-id d-none">Booking Sekarang!</a>
                </div>
            </div>
        </main>
    </section>

    <section id="footer">
        @include('partials.footer')
    </section>

    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>