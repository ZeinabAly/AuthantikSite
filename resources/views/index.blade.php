<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTHANTIK</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- NAVIGATION PETITS ECRAN -->
<div class="header-mobile" id="header-mobile">
    <div class="header-mobile-container">
        <div class="logo">
            <a href="route('home.index') ">
            <img src="{{asset('assets/images/logoAuth.png')}}" alt="logo" class="w-[150px]">
            </a>
        </div>

        <div class="">

        </div>
        <div class="open">
            <div class="reservation-container hidden sm:block">
                <div class="reservation-btn" id="reservation-btn">
                    <a href="route('home.reservation')" class="btn-reserver">
                        <span class="text">Reserver une table</span>
                    </a>
                </div>
            </div>

            <div class="icones">
                @guest()
                <div class="header-tools__item hover-container">
                    <a href="{{ route('login')}}" class="header-tools__item">
                    <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="#fffff"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_user" />
                    </svg>
                    </a>
                </div>
                @else
                <div class="header-tools__item hover-container">
                    <a href="Auth::user()->role_id === 1 ? route('admin.index'):route('user.index')" class="header-tools__item">
                    <!-- <span class="pr-6px">{{Auth::user()->name}}</span>   -->
                    <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_user" />
                    </svg>
                    </a>
                </div>
                @endguest

                <livewire:interface-user.product.cart-counter />
            </div>

            <button class="nav-open-btn" id="openBtn">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </button>
    
            <div class="overlay" data-nav-toggler data-overlay></div>
        </div>


        <!-- SIDEBAR -->
        <div class="header-sidebar">
            <div class="closeBtn">
                <span class="text-3xl">&times;</span>
            </div>
            <div class="navbar-logo mt-[30px] mb-[20px]">
                <a href="route('home.index')">
                <img src="{{asset('assets/images/logoAuth.png')}}" alt="logo" class="w-[150px]">
                </a>
            </div>
            <nav class="navigation">
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="route('home.index')" class="Route::is('home.index') ? 'navbar-active' : 'navbarlink'">
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li class="navbar-item">
                    <a href="route('menu.index')" class="Route::is('menu.index') ? 'navbar-active' : 'navbarlink'">Menu</a>
                    </li>
                    <li class="navbar-item">
                    <a href="route('home.reservation')" class="Route::is('reservation.index') ? 'navbar-active' : 'navbarlink'">Reservation</a>
                    </li>
                    <li class="navbar-item">
                    <a href="route('home.about')" class="Route::is('home.about') ? 'navbar-active' : 'navbarlink'">A propos</a>
                    </li>
                    <li class="navbar-item">
                    <a href="route('home.contact')" class="Route::is('home.contact') ? 'navbar-active' : 'navbarlink'">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="reservation-container sm:block mt-5">
                <div class="reservation-btn" id="reservation-btn">
                    <a href="route('home.reservation')" class="btn-reserver">
                        <span class="text">Reserver une table</span>
                    </a>
                </div>
            </div>

            <div class="sidebar-infos">
                <p class="adresse">Dixinn Terasse</p>
                <p class="contact"><a href="#tel=629836668">629-83-66-67</a></p>
                <p class="email">authantik@gmail.com</p>
            </div>

            <!-- <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum odit maiores autem dolore eos soluta? Similique ut doloremque perspiciatis culpa quis sunt ab voluptates alias, eveniet iste aliquam accusantium sit?
            </div> -->
        </div>
    </div>
</div>

<!-- HEADER GRANDS ECRANS -->

<header id="header" class="header">
    <div class="header-flex">
        <div class="logo">
            <a href="route('home.index')">
            <img src="{{asset('assets/images/logoAuth.png')}}" alt="logo" class="w-[150px]">
            </a>
        </div>
        <div class="header-right">
            <nav class="navigation">
                <ul class="navigation-list">
                    <li class="navigation-item">
                        <a href="route('home.index')" class="Route::is('home.index') ? 'navigation-active' : 'navlink' }} navlink">
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li class="navigation-item">
                    <a href="route('menu.index')" class="Route::is('menu.index') ? 'navigation-active' : 'navlink' }} navlink">Menu</a>
                    </li>
                    <li class="navigation-item">
                    <a href="route('home.reservation')" class="Route::is('home.reservation') ? 'navigation-active' : 'navlink' }} navlink">Reservation</a>
                    </li>
                    <li class="navigation-item">
                    <a href="route('home.about')" class="Route::is('home.about') ? 'navigation-active' : 'navlink' }} navlink">A propos</a>
                    </li>
                    <li class="navigation-item">
                    <a href="route('home.contact')" class="Route::is('home.contact') ? 'navigation-active' : 'navlink' }} navlink">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Button reserver -->
            <div class="reservation-container">
                <div class="reservation-btn" id="reservation-btn">
                    <a href="route('home.reservation') }}" class="btn-reserver">
                        <span class="text">Reserver une table</span>
                    </a>
                </div>
            </div>

            <div class="header-tools">
                <!-- Icone user -->
                @guest()
                <div class="header-tools__item hover-container">
                    <a href="{{ route('login')}}" class="header-tools__item">
                    <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="#fffff"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_user" />
                    </svg>
                    </a>
                </div>
                @else
                <div class="header-tools__item hover-container">
                    <a href="" class="header-tools__item">
                    <!-- <span class="pr-6px">{{Auth::user()->name}}</span>   -->
                    <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_user" />
                    </svg>
                    </a>
                </div>
                @endguest

                <!-- Icone wishlist -->

                

                <!-- Icone cart -->
                
            </div>

            
        </div>
    </div>
</header>

    <img src="{{asset('assets/images/hero-slider-1.jpg')}}" alt="">

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sint dolore ullam esse autem, placeat consectetur quibusdam assumenda facilis cumque recusandae deleniti eligendi amet enim dicta delectus? Necessitatibus, tempore expedita.
    Eveniet quis aut praesentium dolorem maxime nihil, libero omnis ad delectus debitis soluta rem repudiandae fugit culpa facilis nobis dolor dignissimos amet quasi magnam suscipit! Aspernatur impedit voluptate minus quaerat?
    Adipisci velit necessitatibus facere illo possimus! Consectetur ratione dignissimos delectus fuga dolores vitae exercitationem ipsum itaque necessitatibus voluptate. Et assumenda dolorem corporis amet voluptas exercitationem recusandae hic tempora quisquam quibusdam?
    Quos architecto, earum exercitationem atque, nesciunt nemo quo quaerat fuga possimus id sunt, rerum explicabo! Facilis harum omnis iure molestiae magnam exercitationem consequuntur, doloribus obcaecati fugiat, voluptas corporis. A, optio.
    Quam ab, numquam iste deserunt tempora ipsa quos? Veniam libero iste eveniet, nisi aliquam eaque veritatis, repudiandae culpa reprehenderit dolore, laudantium harum velit beatae. Pariatur odit culpa sed sapiente nisi.
    Id fuga consequatur nemo sunt neque, repellat ullam culpa, ab dolor, molestiae in cum! Eveniet voluptas tempore debitis maxime quisquam minus temporibus, sunt consequatur omnis architecto libero, iste aperiam harum.
    Eligendi at reprehenderit officiis amet doloremque error laborum qui unde laboriosam repellat sequi nesciunt, odio facere veniam officia inventore architecto veritatis commodi illo nulla. Explicabo excepturi corrupti impedit facilis veniam.
    Dolor eligendi totam praesentium nobis, distinctio iste natus minima ratione, perferendis porro suscipit. Quas facilis velit eveniet explicabo quo rerum molestiae quis veritatis nisi! Minima voluptates incidunt officiis aut harum?
    Non illum delectus optio sint numquam doloremque in quis ratione omnis, neque at ea nobis, eos, enim placeat debitis eum libero repellat sapiente provident voluptas error? Repudiandae voluptas saepe recusandae.
    Earum vero illo hic nesciunt consequuntur laborum eos consectetur magnam voluptas fuga porro expedita aspernatur, possimus sint, esse nobis enim distinctio aut dicta ratione iusto perspiciatis! Esse expedita architecto nostrum?
    Explicabo voluptate dignissimos ad minima hic voluptas corrupti deserunt odio, harum suscipit officiis commodi molestias voluptates est unde in aliquid adipisci animi magni ipsam minus laborum! Non id quae autem?
    Veritatis ad at fugit modi pariatur repudiandae amet assumenda, reiciendis itaque perspiciatis nesciunt facilis eveniet repellat, quibusdam quaerat cupiditate tempore earum nam nihil illo ratione dicta aut labore similique? Maxime.
    Recusandae quod iste dolorem necessitatibus fugiat aliquam dolorum sint neque voluptate, culpa blanditiis qui atque tenetur, ex, enim assumenda harum. Earum fuga exercitationem quasi. Quas sit beatae aliquid et? Quibusdam.
    Corporis eaque laudantium molestiae, aliquid quidem nam tempore suscipit magnam, minima quos quia accusamus doloribus unde quas nulla adipisci voluptatem nihil eius ducimus ipsam corrupti error itaque dolores. Nobis, autem?
    Quasi, dicta explicabo, et atque doloribus officia perspiciatis temporibus ex dolor fugiat modi debitis! Repellendus commodi libero vero reprehenderit omnis excepturi aspernatur harum voluptates quod, nobis officiis eaque, quidem voluptate?
    Quia atque commodi minus quas dolor voluptatum? Distinctio quo nam ut ipsa. Temporibus, architecto ab! Voluptatibus laborum, magni ipsam optio laudantium sunt obcaecati accusantium nemo incidunt iste assumenda minima totam.
    Saepe repellat nostrum, molestiae ab necessitatibus labore, sit harum iusto enim est aliquid? Dolorum inventore obcaecati repudiandae! Deleniti corporis, voluptatibus totam, dolorum quod cupiditate nostrum nisi sint quibusdam pariatur nemo.
    Reiciendis nam possimus mollitia omnis vel esse magnam nisi neque accusantium labore, delectus porro alias dolorum officiis minima ducimus, magni voluptates debitis fuga ex dolorem. Quae provident ratione dignissimos totam?
    Aliquam nobis in fugit. Quos, quibusdam nisi incidunt natus itaque consectetur assumenda reprehenderit ipsam iure dignissimos porro impedit error sequi et provident illum voluptas veritatis ducimus minus, accusamus molestiae blanditiis.
    Molestias reprehenderit saepe itaque sapiente iure, quam odit, voluptatibus dolore, animi blanditiis consequatur nemo. Enim mollitia inventore, ipsam provident deserunt labore, officiis accusantium eligendi itaque incidunt similique nihil perspiciatis odio!
    Officia placeat reprehenderit eos! Cupiditate temporibus quidem odit minima praesentium exercitationem ab consequuntur expedita incidunt quaerat asperiores tenetur dolores, at eveniet animi beatae maxime sapiente laborum repudiandae deserunt ad aut?
    Rem blanditiis excepturi inventore voluptates mollitia, nulla dolorem tenetur dolor illum quos voluptate expedita cupiditate accusamus quod hic officiis neque facere perspiciatis eos dolore laborum quo quidem tempora numquam! Obcaecati?
    Laudantium, iste architecto dolor obcaecati deleniti, maiores nobis eos cum recusandae, aliquam eveniet minima quam aspernatur illo sed. Odit nemo nesciunt dolorem! Culpa consectetur adipisci aspernatur, nihil eos mollitia qui.
    Qui, necessitatibus! Error illum ex explicabo ipsa rerum, modi suscipit exercitationem blanditiis vero praesentium quasi! Laborum quam nostrum, fugit, explicabo tempora cupiditate, quia corporis accusamus aliquid culpa fuga sed voluptas!
    Officia ducimus dolore sit rerum fugit nulla quam praesentium officiis dolorum inventore magnam incidunt vel necessitatibus, exercitationem eum quidem soluta. Provident, nam dolores! Et ea suscipit ratione eveniet obcaecati cumque.
    Quaerat voluptatibus tempore adipisci magni dolores, debitis, nihil deserunt exercitationem sapiente facere quo accusantium sed. Eveniet perspiciatis cupiditate sit! Nam corrupti odit quaerat maxime ipsam eaque! Adipisci quo odit libero!
    Pariatur nihil voluptas dolore, neque deleniti deserunt blanditiis consequuntur tempore modi eveniet fuga. Illo enim dolorem necessitatibus consequatur asperiores beatae tempore expedita autem. Assumenda repellat, non labore impedit pariatur quae.
    Velit dolores odit facere corrupti ex quis quisquam cumque cupiditate obcaecati veritatis. A rem possimus consequuntur blanditiis explicabo, ullam sequi sit inventore quidem neque provident unde, fugiat facilis eum dolorum!
    Molestiae iure inventore iste explicabo temporibus libero nihil amet excepturi rem ea similique nam incidunt voluptate alias tempora fugit adipisci minima aliquid ipsum aliquam perspiciatis, harum accusantium itaque? Vitae, adipisci.
    Rerum, sunt. Nesciunt in dolore modi unde numquam exercitationem at illum, totam culpa nemo rerum eos quis! Eligendi dolore doloribus veritatis iure. Numquam voluptatum modi assumenda sit ab eveniet minus?
    Illo, inventore necessitatibus nisi quaerat rem est quidem quas at incidunt adipisci dolore itaque fugiat qui laudantium labore aperiam voluptate quam voluptas blanditiis, explicabo ab? Sit voluptas nam doloribus animi!
    Labore non impedit porro animi error? Quasi illum laudantium nulla consequatur ratione expedita in reprehenderit cupiditate inventore quae nisi necessitatibus cumque accusantium officia non, ut amet dolore, vel sequi qui.
    Porro, nisi quasi possimus quod a dolorem omnis non quaerat obcaecati? Dolorum ea quibusdam, architecto libero ex reprehenderit atque nulla porro illum delectus dolores rerum saepe perspiciatis ut ducimus provident?
    Iusto tempora sit nostrum rerum libero commodi nobis similique. Beatae id eveniet consectetur dolore, voluptatem dolores. Explicabo similique rerum ut, quidem repellat laudantium. Dolorem ipsum dolores saepe laudantium, unde nostrum!
    Modi odio veritatis iusto quidem incidunt quisquam tenetur inventore soluta, perspiciatis maxime repudiandae nobis laboriosam cumque ipsam omnis nulla. Rem neque incidunt placeat inventore quod iure labore, aspernatur sed. Quibusdam.
    Commodi voluptatem nesciunt quaerat dolorem distinctio, harum soluta rerum perspiciatis similique illum saepe exercitationem rem veritatis quasi blanditiis atque sunt dolorum doloribus, in ipsum? Neque nostrum repellendus aut possimus iusto!
    Ipsa saepe est cupiditate expedita reprehenderit numquam recusandae tenetur accusamus, ipsum eum dolorum aperiam iusto aliquid maiores molestiae cumque quia ducimus eius enim fuga pariatur alias adipisci assumenda nemo? Pariatur.
    Nam accusantium consequatur obcaecati? Voluptatem, et harum? Consequuntur debitis perspiciatis sed, ipsa dignissimos rerum cum voluptas corporis tempora similique dolores aliquid, perferendis necessitatibus dicta natus. Omnis dolorem eaque deleniti corrupti.
    Et unde corrupti saepe! Molestias temporibus quasi quibusdam? Assumenda unde pariatur corrupti alias ad deserunt optio. Odio ratione delectus vero distinctio incidunt, blanditiis commodi iure velit doloremque fuga dolorum? Atque?
    Quidem provident, ad aut corporis ex accusamus sunt eligendi quas nesciunt vel veniam est consequuntur qui ipsum reiciendis molestias culpa labore voluptate quod soluta deserunt placeat enim possimus reprehenderit. Ad!
    Sapiente excepturi nulla iste natus quia sunt quidem cupiditate maxime nesciunt nemo, dolores ipsum molestiae enim optio modi quas saepe ut accusantium? Dolore, quibusdam mollitia qui blanditiis voluptas sapiente iure.
    Eaque cum, quis cumque nobis asperiores consectetur repellat dicta, aut ullam architecto facilis. Vel nam voluptates rem voluptatem commodi ea. Fugiat nobis iusto impedit aut libero? Deserunt eos ex expedita.
    Odit fugit debitis officiis reprehenderit nostrum porro recusandae iusto nihil incidunt esse autem, vel enim saepe ex laboriosam nobis aperiam! Error eaque maiores aliquid possimus adipisci quis corporis ut odit.
    Itaque dolores quod eius consectetur optio facilis totam nam expedita cupiditate amet dolore sequi culpa porro incidunt necessitatibus animi eaque sint obcaecati voluptatibus ut cum omnis, labore eos nulla? Adipisci!
    Corrupti voluptate voluptas consequuntur optio labore quae asperiores, assumenda fuga recusandae unde quisquam iusto quod velit voluptatum veniam ratione nisi debitis eius. Quod odit quo accusantium magni nulla voluptas vel.
    Cum illo accusantium quos provident totam doloremque laboriosam tempora saepe ducimus rerum sequi cupiditate, iusto laborum mollitia officia, veniam facilis ratione voluptate sapiente? Voluptate sapiente unde quisquam maxime tempore saepe!
    Alias nisi culpa temporibus nulla, tempora consequuntur accusamus blanditiis ullam cum eos quidem, maxime laboriosam, ipsa reprehenderit quam deleniti eum iure? Minus commodi iusto molestias ea repellendus dignissimos doloremque beatae.
    Quia ducimus praesentium obcaecati aliquid provident dignissimos quis saepe vitae beatae excepturi eaque repellendus nihil nulla doloremque, assumenda facere illo recusandae porro natus magni earum deserunt tenetur cupiditate? Ab, a.
    Doloremque nisi ea veritatis dolore dolorem ad quaerat itaque voluptatum consequatur eveniet provident repellat dolorum id cumque molestiae, reprehenderit debitis quae ipsa aperiam perspiciatis facilis minima minus quia! Deleniti, quas!
    Quibusdam quas dolor ut amet sequi praesentium voluptate molestias repellat aperiam molestiae saepe doloribus iste, quam laudantium nesciunt similique porro provident! Facere repellendus est quia in asperiores, recusandae repellat quae?
    Debitis numquam alias molestiae deleniti maxime obcaecati totam blanditiis fugiat, in molestias saepe, nostrum non unde fuga minima adipisci cum quam excepturi laborum dolor reprehenderit rerum. Vitae similique impedit atque?
    Quae fugit accusamus magni nobis, voluptas asperiores neque dolore explicabo ipsum quisquam ratione nisi aliquid quaerat error sed? Fugit autem magnam corporis assumenda atque ipsa placeat numquam dolores rem itaque.
    Illum voluptatem dolore alias id inventore consequuntur! Laborum minima cumque debitis, consequuntur asperiores explicabo fugiat exercitationem in, eius laboriosam impedit voluptates neque placeat rerum perferendis, magni et vitae voluptatibus! Pariatur?
    Cum dolore, eius provident doloremque in maxime et perspiciatis, dolorum unde architecto, aspernatur consectetur quae nisi doloribus ipsa. Dicta, blanditiis magni? Enim doloremque, nostrum totam omnis sunt ab atque libero.
    Nulla, quos cumque eaque similique fuga nisi. Enim animi soluta dolorum expedita vitae quasi numquam a! Vero accusamus id aliquam ipsum consectetur quidem ab molestiae eligendi magnam! Esse, unde nam!
    Nihil eaque, at vitae, cupiditate et necessitatibus sunt dolor laborum quidem quasi expedita voluptatem autem sint ipsam quas laudantium esse illo minus facere obcaecati excepturi praesentium. Placeat doloribus consectetur omnis.
    Sequi qui cumque debitis quos. Odio dicta aliquid error quisquam corrupti. Repellendus neque veritatis beatae molestiae culpa voluptate quaerat exercitationem molestias, facilis autem aspernatur animi, dolore eius velit adipisci tenetur.
    Mollitia id nisi incidunt sint quos, autem expedita sed necessitatibus error recusandae numquam iure, similique tempore veniam. Labore esse ipsum illo corporis omnis harum facilis id rerum voluptatem! In, nihil.
    Iusto officia autem consequuntur error odio alias voluptatibus, natus magnam architecto expedita ipsam fugit, cumque et ex optio veritatis ullam! Aut expedita perferendis excepturi debitis facere voluptatibus quaerat, porro ullam!
    Ut praesentium sint, consectetur at dolor itaque, quia quos voluptatibus nobis officiis expedita ratione quisquam saepe id veritatis facere maiores. Non magnam molestias porro harum deserunt ea eligendi neque! Blanditiis?
    Illum reiciendis consequuntur, quidem modi mollitia nisi, unde sed eveniet laborum expedita eum repellat vitae quis vel laboriosam voluptas, cupiditate ea officia nobis architecto veniam. Hic assumenda fuga quia odio.
    Rerum rem reiciendis velit quis modi aut eligendi facilis dolorem ipsam sint. Vel aperiam expedita, quaerat voluptas at, obcaecati dolorum molestias nesciunt architecto rem veritatis reprehenderit sapiente doloribus, eum amet?
    Cumque sequi voluptatum libero distinctio? Ipsam ut dicta pariatur nulla odit. Dolor nobis eaque culpa a necessitatibus, est tempore accusantium ut doloribus fugit mollitia omnis quae odio quidem corrupti quo?
    Vitae sint, cupiditate quidem doloremque aperiam quod eveniet iusto eos reprehenderit, corrupti rem culpa quas illo praesentium. Vel doloremque eligendi eos optio illo rerum ullam fuga est, esse voluptas eveniet.
    Ea nisi molestias ut distinctio ipsum est beatae maxime officia, quod obcaecati sit enim nesciunt et necessitatibus cum aut vel, optio labore debitis harum. Consectetur alias consequuntur blanditiis distinctio odio.
    Repudiandae corrupti nisi suscipit vitae, amet recusandae, reiciendis nulla expedita officia natus eveniet voluptate quasi odit odio autem numquam architecto. Suscipit accusamus esse est. Quae reiciendis distinctio ut possimus quia.
    Sequi blanditiis, harum laborum earum sit, placeat nobis ducimus provident porro rerum labore beatae possimus consequatur deleniti iusto nesciunt dicta. Odit aspernatur debitis praesentium possimus repellat nostrum reprehenderit doloribus modi?
    Quas unde, doloribus cumque eaque sed fuga cum, et earum ipsa excepturi natus quidem eos praesentium quod eveniet qui reiciendis vitae explicabo architecto tempore? Vitae delectus nulla minima nostrum eveniet.
    Minus voluptatem aut aliquid provident dolorum animi suscipit perspiciatis consequatur! Dolorem officiis, repellat et at fuga ullam nesciunt alias dicta enim quod dolorum molestias corporis. Nam laborum aspernatur quidem provident.
    Voluptate soluta repellat excepturi consequatur quaerat tempora modi voluptates dolorum iusto possimus et nostrum adipisci totam, minima, tempore magnam doloremque facere saepe voluptatum ab? Laboriosam, a. Deserunt earum quae cum?
    Vero sapiente similique eveniet et iste nobis, quibusdam nam. Aut repellat temporibus explicabo placeat accusamus ut, ipsa exercitationem, aperiam qui maxime sapiente adipisci a quidem eos nesciunt enim? Quas, nobis?
    Iusto illum provident est enim tempora, ut vero at eaque qui expedita beatae reiciendis asperiores voluptates ab labore quae! Distinctio quidem repudiandae alias eveniet vitae! Sed distinctio animi nostrum odit?
    Recusandae ex, delectus suscipit maxime fugiat hic asperiores, quam quibusdam facilis, id ipsa! Rem, aspernatur obcaecati praesentium porro consequuntur consectetur magni cumque non minima necessitatibus similique rerum, quidem excepturi aliquid?
    Veniam numquam esse, maiores quos dolor velit tempore, cum assumenda ad enim ut dolore perferendis culpa! Iure nisi quia quo laborum similique provident, incidunt voluptatum veniam ut atque minima suscipit.
    Odio asperiores impedit atque ab, fuga ipsa. Autem similique ea impedit obcaecati ipsum tenetur officiis vero, reiciendis ad. Facilis eius ipsa minima a perspiciatis repudiandae, quae possimus labore explicabo ullam!
    Rerum ut iusto error dolore natus assumenda earum officiis, cupiditate iste cumque aut ipsa minima sunt explicabo, quia molestias, a ab. Sapiente possimus tenetur commodi voluptates. Laborum voluptatum officiis ad.
    Perspiciatis at corporis, dolores dolorum optio architecto, vero ipsa quasi voluptatum, impedit vitae. Repellendus vitae suscipit, animi, assumenda corrupti eaque, rerum doloremque harum nesciunt dignissimos repudiandae veritatis cum labore est!
    Tempore repudiandae temporibus facere? Mollitia alias, voluptatum ratione eos sed repellendus magnam! Atque id saepe tenetur voluptas. Accusamus voluptatum est sunt pariatur unde mollitia, tenetur dolores dignissimos, ad non quaerat.
    Dolor corporis necessitatibus iure possimus nemo corrupti nesciunt doloremque, tenetur id tempora nobis illum, modi, repellendus atque vel animi. Aperiam ducimus animi asperiores atque doloremque sit doloribus quasi officiis sed!
    Consequatur eligendi delectus optio eum quis odit itaque quam nemo quos quibusdam dolore eius, vitae id vero repellendus atque illo in blanditiis nihil totam pariatur illum rem deleniti iure? In.
    Veniam iste, ex officia in, amet iusto a explicabo natus molestias voluptatem quos perspiciatis doloremque. Est unde, facere itaque animi enim a aspernatur? Id suscipit repellat repellendus beatae nam quia.
    Porro, doloribus nulla labore doloremque magni enim quidem officia provident omnis non eius quam alias sint quasi id error cum praesentium quisquam? Quam, pariatur! Officia et id doloremque similique sed.
    Quibusdam, tempore perferendis totam mollitia earum vitae molestias excepturi dolorem iste natus, at eveniet? Alias tempora possimus ducimus, et cumque provident ipsam hic dignissimos quis quibusdam nihil, libero, quod repellendus?
    Modi deleniti iure dolore repellat corporis expedita inventore id voluptates, esse error doloribus. Deleniti reiciendis itaque autem aut eveniet. Tempore eos numquam ipsa, quos velit et? Odio sequi ipsa tenetur!
    Vitae suscipit recusandae sequi corrupti omnis reiciendis debitis blanditiis ducimus quam? Sapiente illo tempore labore repellat error! Fuga veniam eligendi consectetur adipisci, voluptas nulla, minima optio esse aliquam porro animi?
    Mollitia porro facere officiis laborum tenetur iste ea nostrum explicabo culpa sequi earum eaque temporibus assumenda beatae soluta non, officia laudantium deleniti minus minima modi. Minus adipisci ipsam eligendi ad?
    Consequuntur natus at sed est voluptatibus odio aliquid iste dolor! Animi eius sunt magnam magni ipsum accusantium veniam debitis ratione, totam quidem accusamus dolores quisquam, exercitationem adipisci! Esse, voluptatem odio!
    Molestiae ipsam consequatur ipsum deleniti nihil modi beatae explicabo blanditiis, harum, necessitatibus totam veritatis porro exercitationem id adipisci nostrum numquam corrupti odit cumque! Similique soluta explicabo deserunt eius quaerat autem.
    At optio quia, culpa maiores magnam recusandae, expedita harum delectus deserunt rem rerum dolore, dolorem maxime voluptates iure explicabo possimus corporis accusantium? Nam ut adipisci commodi nulla, animi officia neque.
    Incidunt sit quisquam voluptas perferendis dolore laudantium deleniti aliquid provident cum, labore ipsum nostrum et sed repellendus! Beatae, impedit natus sunt delectus ratione deleniti nam molestias mollitia illum, sed quas!
    Unde libero perferendis suscipit! Repudiandae culpa nostrum quaerat possimus quia tempora enim deserunt vitae doloremque voluptate? Assumenda repudiandae quas doloribus? Odit dolores dolor porro, eaque voluptas laborum numquam animi accusamus.
    Provident adipisci sed reiciendis sit quas vero perspiciatis maiores animi aliquam unde eveniet molestias ut maxime, rem accusamus! Velit minus nisi eius veritatis aspernatur distinctio similique saepe placeat commodi libero?
    Dolorem perspiciatis ducimus aliquid expedita natus commodi earum odit neque consequatur sint perferendis omnis nam, totam consequuntur culpa aliquam praesentium laborum ex doloribus facere! Libero possimus dolores quam tempora dignissimos!
    Aperiam non, delectus quo similique esse eligendi nihil, explicabo fugiat excepturi molestiae dignissimos voluptates voluptatibus a exercitationem nulla nam blanditiis! Quia quas, mollitia itaque rerum quos doloremque pariatur modi deserunt.
    Totam consequatur laboriosam excepturi, deleniti mollitia cupiditate adipisci ut illum atque obcaecati assumenda officiis repellat culpa iste ullam alias magni quibusdam earum reprehenderit in perferendis possimus neque! Distinctio, mollitia quae.
    Assumenda nisi suscipit accusamus doloremque qui nostrum aliquid blanditiis fuga asperiores pariatur inventore maxime dolore animi sed laborum in quo tempore voluptatibus aperiam error molestiae, facilis earum rerum esse? Voluptatum?
    Maxime alias tenetur perspiciatis unde consequatur. Incidunt dignissimos quam modi vero exercitationem. Doloribus officia consectetur repellendus veniam facilis vitae, eum, rerum nemo natus delectus dolore ab rem. Eligendi, magnam ducimus?
    Atque vitae nihil dicta laudantium reprehenderit minima deserunt impedit pariatur itaque, corporis voluptates praesentium illo enim cumque eum. Fugit asperiores tempore inventore tenetur, voluptatum quam laudantium assumenda harum provident ea!
    Esse doloremque culpa, sequi ut vitae neque dolorum quasi dignissimos error sint sit? Consequatur sapiente voluptate, odit quibusdam exercitationem maxime error numquam quisquam natus consequuntur quae obcaecati animi, distinctio minus?
    Doloremque sint, veritatis dignissimos illo quaerat dolores accusantium adipisci. Recusandae hic exercitationem praesentium molestiae officia animi quam eos, fugit beatae repellat quod similique modi. Sunt dolores molestias tempore dolorum error?

</body>
</html>