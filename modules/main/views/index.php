<?php

use app\modules\infoblock\components\BlockText;
use app\modules\multicontent\components\BlockMulticontent;

use app\components\helpers\Text;
use app\components\helpers\Language;

use yii\helpers\Url;
?>
<div class="fon-bgf"></div>
<div class="fixed-top__menu">
	<div class="column hd-1 lg-2"><a href="<?= Yii::$app->homeUrl ?>" class="logo-main"></a></div>
	<div class="column hd-7 lg-7 sm-6 white-color-menu">
		<div class="burg-butt">
			<div id="bbt" onclick="openbox('box'); return false" class="buef"></div>
		</div>
		<ul class="main-top__menu" id="box" style="display: none;">
			<li><a class="imit-click" data-id="<?= Yii::t('app', 'FRONT_MAIN_MENU_LINK_1') ?>" href="#"><?= Yii::t('app', 'FRONT_MAIN_MENU_TEXT_1') ?></a></li>
			<li><a class="imit-click" data-id="<?= Yii::t('app', 'FRONT_MAIN_MENU_LINK_2') ?>" href="#"><?= Yii::t('app', 'FRONT_MAIN_MENU_TEXT_2') ?></a></li>
			<li><a class="imit-click" data-id="<?= Yii::t('app', 'FRONT_MAIN_MENU_LINK_3') ?>" href="#"><?= Yii::t('app', 'FRONT_MAIN_MENU_TEXT_3') ?></a></li>
			<li><a class="imit-click" data-id="<?= Yii::t('app', 'FRONT_MAIN_MENU_LINK_4') ?>" href="#"><?= Yii::t('app', 'FRONT_MAIN_MENU_TEXT_4') ?></a></li>
			
			<?php if(Yii::$app->user->can('adminPanel')):?>
				<li><a href="<?= Url::to(['/main/backend/default/index']) ?>" target="_blank">В Админку</a></li>
				<li><a href="<?= Url::to(['/user/default/logout']) ?>" data-method="post">Выйти</a></li>
			<?php elseif(!Yii::$app->user->isGuest):?>
				<li><a href="<?= Url::to(['/user/default/logout']) ?>" data-method="post">Выйти</a></li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="column hd-3 lg-2 sm-2 whitepap"><a target="_blank" href="/whitepaper" class="btn btn-pagin">Whitepaper</a></div>
	<div id="#lang" class="column hd-1 lg-1 sm-2 text-right whitepap-lang dropdown">
		<span><a href="#" class="btn-lang hida"><?= Language::getLanguageName($this->params['lang_id']) ?></a></span>
		<div class="mutliSelect">
			<ul style="display:none;" class="langv">
				<?php foreach(Language::getLanguages() as $langId => $langItem): ?>
					<li><a href="?lang_id=<?= $langId ?>"><?= $langItem['name'] ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<a href="#" class="icon-share"><i class="fa fa-share-alt"></i></a>
<a href="#" class="icon-step"><i class="fa fa-long-arrow-down"></i></a>

<div id="fullPage">

<section class="section section-screen__1 section-screen__1anime  pp-scrollable">
	<div class="block-trd">
		<div class="anim-efect"></div>
	</div>
	<div class="fon-paral">
		<div class="text-papf">
			<div class="fon-paral2"></div>
			<div class="parallax-wrapper">
				<ul id="scene">
					<div data-depth="0.1" class="fon-lwadt bg bg-1 layer"></div>
				</ul>
			</div>
		</div>
		<div style="text-align: center;">
			<div class="block-scroll">
				<img src="/img/scr.png"><span><?= Yii::t('app', 'FRONT_BALOON_1') ?></span>
			</div>
		</div>
	</div>
</section>

<section class="section section-screen__2 pp-scrollable head-centr2">
	<div class="container container-pagin pagin1">
		<h2 class="section2-title"><?= BlockText::_('section-screen-2_0', $lang_id, 'text', 'УЧАСТВУЙТЕ <br> В ICO анонимной <br> антисоциальной <br> сети') ?></h2>
		<p class="s1">
			<span class="small"><?= BlockText::_('section-screen-2_1', $lang_id, 'text', 'привлечено') ?></span>
			<span class="large"><?= BlockText::_('section-screen-2_2', $lang_id, 'text', '82 537 ETH') ?></span>
			<span class="small small3"><?= BlockText::_('section-screen-2_3', $lang_id, 'text', 'Бэкеры') ?></span>
			<span class="large"><?= BlockText::_('section-screen-2_4', $lang_id, 'text', '9 654') ?></span>
		</p>
		<div class="section2-stat__box">
			<span class="p1"><?= BlockText::_('section-screen-2_5', $lang_id, 'text', 'Успешное ico') ?></span>
			<span class="p2"><?= BlockText::_('section-screen-2_6', $lang_id, 'text', 'период <em>29 aug</em>') ?></span>
			<span class="p3"><?= BlockText::_('section-screen-2_7', $lang_id, 'text', 'hard cap <em>100 000 ETH</em>') ?></span>
			<span class="p4"><?= BlockText::_('section-screen-2_8', $lang_id, 'text', 'soft cap <em>50 000 ETH</em>') ?></span>
			<span class="p5"><?= BlockText::_('section-screen-2_9', $lang_id, 'text', '<em>16 sep</em>') ?></span>
		</div>
	</div>
	<div class="section2-text__2">
	<div class="container container-pagin">
		<div class="column hd-6 sm-5 no-p-w pag1"><?= BlockText::_('section-screen-2_10', $lang_id, 'text', 'Первый раунд ICO закончится  через:') ?></div>
		<div class="column hd-6 sm-7 no-p-w fr pag2">
			<span class="time">12:48:24</span>
			<a href="#" class="btn"><?= Yii::t('app', 'FRONT_BUTTON_1') ?></a>
		</div>
	</div>
	</div>
</section>

<section class="section section-screen__3  pp-scrollable">
	<div class="container container-pagin section3-screen__wrap padin-toph">
		<h1><?= BlockText::_('section-screen-3_0', $lang_id, 'text', 'Анонимная <br> антисоциальная <br> сеть') ?></h1>
		<div class="section3-text__box">
			<?= BlockText::_('section-screen-3_1', $lang_id, 'html', '<p>к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому
			</p>
			<p>к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому
			</p>') ?>
		</div>
		<a href="#" class="btn-more"><i class="fa fa-long-arrow-up"></i><?= Yii::t('app', 'FRONT_BUTTON_2') ?></a>
	</div>
	<div class="container container-pagin section4-screen__wrap pad-top">
		<div class="section4-text__box">
			<?= BlockText::_('section-screen-4_1', $lang_id, 'html', '<p>к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому
			</p>
			<p>к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому сообществу
			Аноним–это возможность присоединиться к закрытому
			</p>') ?>
			<div class="button-app">
				<a href="#"><img src="/img/btn-app-apple.jpg" alt=""></a>
				<a href="#"><img src="/img/btn-app-android.jpg" alt=""></a>
			</div>
		</div>
	</div>
	<div class="container container-pagin pagin5">
		<?= BlockMulticontent::_(7, $lang_id) ?> <!-- Отзывы -->
	</div>
</section>

<section class="section section-screen__2  pp-scrollable head-centr3">
	<div class="container container-pagin">
		<h2 style="font-weight: 100;" class="section2-title section2-title3"><?= BlockText::_('section-screen-41_1', $lang_id, 'text', 'Что уже <br> сделано?') ?></h2>
		<div class="block-text-left">
			<?= BlockText::_('section-screen-41_2', $lang_id, 'html', '<p>Ключевая ценность сети заключалась в отсутствии конфиденциальных данных при регистрации пользователей. Не требовалось вводить номер телефона и адрес электронной почты. Пользователи могли сами придумывать свой псевдоним из любых свободных в системе логинов и никнеймов.</p>
			<p>Мы подготовили площадку для серой зоны СМИ -  свободного выражения и трансляции настоящих новостей без цензуры и дополнительных фильтров. В эпоху информационного шума теперь возможно непредвзято и правдиво отразить то или иное событие и направить человека к источнику информации.</p>') ?>
		</div>
		<div class="bloc-left-r">
			<h2><?= BlockText::_('section-screen-41_3', $lang_id, 'text', 'Токен Anonym выпущен <br> на платформе Ethereum. <br> Стандарт - ERC20') ?></h2>
			<?= BlockText::_('section-screen-41_4', $lang_id, 'html', '<p>	
				Эмиссия токенов ограниченна, единоразовая.
				Токены, которые не будут проданы вовремя OTS, будут сожжены.
			</p>
			<p>
				Вид токена - Appcoin — наиболее удачный и пока что успешный способ привязки токена блокчейн-проекта, в котором токен или монета проекта используется во внутренней (circular) экономике. Держатели токена получают прибыль за счет роста цены токена благодаря фиксированной эмиссии и растущему количеству пользователей и, следовательно, спросу на монеты.
			</p>') ?>
		</div>
	</div>
</section>

<section class="section section-screen__4 pp-scrollable">
	<div class="bef"></div>
	<div class="container container-pagin">
		<div class="sections-sd">
			<h2 style="font-weight: 100; color: white;" class="section2-title section2-title2"><?= BlockText::_('section-screen-42_1', $lang_id, 'text', 'Что планируется <br> сделать?') ?></h2>
			<div class="block-left-sd">
				<?= BlockText::_('section-screen-42_2', $lang_id, 'html', '<p>В ближайшем будущем мы планируем создать закрытую экосистему сети Аноним, позволяющую существовать сообществу максимально автономно на столько, на сколько это возможно. 
				</p>
				<p>Мы планируем использовать современные технологии и инструменты для взаимодействия и коммуникации между участниками сети, а именно: 
				</p>') ?>
			</div>
			<div class="block-right-sdf">
				<div class="icons-block">
					<img src="/img/icon1.png">
					<?= BlockText::_('section-screen-42_3', $lang_id, 'html', '<p>
						- В первую очередь Защита данных, когда исходные голосовые, текстовые, фото-, видеофайлы и любая другая информация, передающаяся через канал коммуникации, может быть прочтена только отправителем и получателем и при этом не может быть перехвачена третьими лицами — будь то киберпреступники, хакеры, органы власти или же сотрудники силовых структур. Такой тип шифрования будет доступен теперь для всех участников сети Аноним. 
					</p>') ?>
				</div>
				<div class="icons-block">
					<img src="/img/icon2.png">
					<?= BlockText::_('section-screen-42_4', $lang_id, 'html', '<p>- Создание партнерской программы со специализированными и не форматными СМИ для их участия в сети Аноним. Мы создадим профильные каналы и сообщества для выпуска приватного контента сети Аноним. Мы реализуем программу вознаграждения каналов и сообществ по партнерской программе сети Аноним.
					</p>') ?>
				</div>
				<div class="icons-block">
					<img src="/img/icon3.png">
					<?= BlockText::_('section-screen-42_5', $lang_id, 'html', '<p>- Создание инструментов для открытой разработки приложений для экосистемы сети Аноним (Open Source, возможность создавать приложения для сети, интеграция сторонних сервисов)
					</p>') ?>
				</div>
				<div class="icons-block">
					<img src="/img/icon4.png">
					<?= BlockText::_('section-screen-42_6', $lang_id, 'html', '<p>- Достичь 30 млн пользователей сообщества (количество не самоцель, цель - качество сообщества)
					</p>') ?>
				</div>
				<div class="icons-block">
					<img src="/img/icon5.png">
					<?= BlockText::_('section-screen-42_7', $lang_id, 'html', '<p>- Реализация технологии блокчейн для хранения конфиденциальных данных. Разработки собственного блокчейн решения для сети Аноним, для хранения данных в зашифрованном виде.
					</p>') ?>
				</div>
				<div class="icons-block">
					<img src="/img/icon6.png">
					<?= BlockText::_('section-screen-42_8', $lang_id, 'html', '<p>- Создание внутренних автономных финансовых инструментов для обеспечения полного цикла операций по обмену ресурсами между участниками экосистемы. Первым этапом будет введение внутренней биржи активов.
					</p>') ?>
				</div>
				<div class="icons-block">
					<img src="/img/icon7.png">
					<?= BlockText::_('section-screen-42_9', $lang_id, 'html', '<p>- Создание внутренней закрытой кооперативной площадки для реализации совместных проектов, как внутри системы, так и за её пределами. Это будет всем привычная краудфандинговая и краудинвестинговая система, но исключительно для членов сообщества сети Аноним.
					</p>') ?>
				</div>
				<div class="icons-block">
					<img src="/img/icon8.png">
					<?= BlockText::_('section-screen-42_10', $lang_id, 'html', '<p>- Разработка VR коммуникации во внутреннем месенджере сети Аноним. Мы создадим приватный чат, где пользователи могут воспользоваться современными VR технологиями, выбирать любые виртуальные геолокации, использовать любых персонажей и VR атрибутики в приватной коммуникации. Кроме того, можно будет беседовать с другими пользователями на любой выбранной геолокации. Например: На Гранд Каньоне или Луне, в образе Дарта Вейдера и т.д. Эти функции призваны открыть потенциал для творчества и развития технологии в данном направлении.
					</p>') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="m55" class="section section-screen__5 colorff pp-scrollable" href="section-screen__5">
	<div class="bg-fon9"></div>
	<div class="bacgr-pagin">
        <div class="section5-top__layout">
            <div class="content-wrap">
                <div class="container container-pagin pag-infu">
                    <div class="column hd-2 sm-12 sto none6"></div>
                    <div class="column hd-4 sm-12 sto  pag-block">
                        <div class="title"><?= BlockText::_('section-screen-5_0', $lang_id, 'text', 'Архитектура социальной сети аноним') ?></div>
                    </div>
                    <div class="column hd-6 sm-12 sto">
                        <ul class="section5-opportunity__box theme-black">
                            <li><i></i><span><?= BlockText::_('section-screen-5_1', $lang_id, 'text', 'Посты') ?></span></li>
							<li><i></i><span><?= BlockText::_('section-screen-5_2', $lang_id, 'text', 'Мессенджер') ?></span></li>
                        </ul>
                    </div>
                    <div class="column hd-4 sm-12 sto pag-none">
                        <div class="title"><?= BlockText::_('section-screen-5_3', $lang_id, 'text', 'Архитектура социальной сети аноним') ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section5-bottom__layout">
            <div class="container container-pagin pag-infu">
                <div class="column hd-2 sm-12 sto none6"></div>
                <div class="column hd-6 sm-12 sto">
                    <ul class="section5-opportunity__box">
                        <li><i></i><span><?= BlockText::_('section-screen-5_4', $lang_id, 'text', 'Закрытые комнаты') ?></span></li>
						<li><i></i><span><?= BlockText::_('section-screen-5_5', $lang_id, 'text', 'Групповые чаты') ?></span></li>
						<li><i></i><span><?= BlockText::_('section-screen-5_6', $lang_id, 'text', 'Чат-каналы') ?></span></li>
                    </ul>
                </div>
                <div class="column hd-4 sm-12 sto fonty fonty2">
                    <div class="pt"><?= BlockText::_('section-screen-5_7', $lang_id, 'text', 'Функции доступные  после авторизации') ?></div>
                    <?= BlockText::_('section-screen-5_8', $lang_id, 'html', '<p>В сети «Аноним» неважно кто ты, как ты выглядишь и какой у тебя В сети «Аноним» неважно кто ты, как ты выглядишь и какой у тебя</p>') ?>
                </div>
            </div>
            <div class="section5-stat__wrap">
                <div class="container container-pagin pading-pag">
                    <ul class="section5-stat__box">
                        <li><span class="name"><?= BlockText::_('section-screen-5_9', $lang_id, 'text', 'Установок') ?></span><span class="total"><?= BlockText::_('section-screen-5_10', $lang_id, 'text', '50 000') ?></span></li>
						<li><span class="name"><?= BlockText::_('section-screen-5_11', $lang_id, 'text', 'просмотров экрана') ?></span><span class="total"><?= BlockText::_('section-screen-5_12', $lang_id, 'text', '42 836 614') ?></span></li>
						<li><span class="name"><?= BlockText::_('section-screen-5_13', $lang_id, 'text', 'Отзывов') ?></span><span class="total"><?= BlockText::_('section-screen-5_14', $lang_id, 'text', '11 611') ?></span></li>
						<li><span class="name"><?= BlockText::_('section-screen-5_15', $lang_id, 'text', 'Пользователей') ?></span><span class="total"><?= BlockText::_('section-screen-5_16', $lang_id, 'text', '350 000') ?></span></li>
						<li><span class="name"><?= BlockText::_('section-screen-5_17', $lang_id, 'text', 'Прирост в сутки') ?></span><span class="total"><?= BlockText::_('section-screen-5_18', $lang_id, 'text', '+2000') ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-screen__6 pp-scrollable head-centr6">
	<div class="container container-pagin padding-pagin6">
		<h2><?= BlockText::_('section-screen-6_0', $lang_id, 'text', 'Открытая продажа токенов сети') ?></h2>
		<div class="row row-minus">
			<div class="column hd-5 sm-12 sto max-width-pag">
				<div class="title"><?= BlockText::_('section-screen-6_1', $lang_id, 'text', 'pRe-sale') ?></div>
				<div class="section6-data__table pagin-table">
					<div class="row">
						<span class="small small-pag"><?= BlockText::_('section-screen-6_2', $lang_id, 'text', 'Срок проведения') ?></span>
						<span class="large large-pag"><?= BlockText::_('section-screen-6_3', $lang_id, 'text', '25.09.17 — 25.10.17') ?></span>
					</div>
					<div class="row">
						<span class="small small-pag"><?= BlockText::_('section-screen-6_4', $lang_id, 'text', 'Первые 2недели') ?></span>
						<span class="large large-pag"><?= BlockText::_('section-screen-6_5', $lang_id, 'text', '1 Anm = 0,7$') ?></span>
					</div>
					<div class="row">
						<span class="small small-pag"><?= BlockText::_('section-screen-6_6', $lang_id, 'text', 'Вторые 2недели') ?></span>
						<span class="large large-pag"><?= BlockText::_('section-screen-6_7', $lang_id, 'text', '1 Anm = 0,7$ копия') ?></span>
					</div>
					<div class="row">
						<span class="small small-pag"><?= BlockText::_('section-screen-6_8', $lang_id, 'text', 'Объем токенов на продажу') ?></span>
						<span class="large large-pag"><?= BlockText::_('section-screen-6_9', $lang_id, 'text', '3 000 000') ?></span>
					</div>
				</div>
				<ul class="section6-data__list">
					<li class="none-li"><?= BlockText::_('section-screen-6_10', $lang_id, 'text', 'Партнерская программа для специализированных Партнерская программа специализированных Партнерская программа') ?></li>
					<li><?= BlockText::_('section-screen-6_11', $lang_id, 'text', 'Партнерская программа для специ') ?></li>
					<li><?= BlockText::_('section-screen-6_12', $lang_id, 'text', 'Партнерская программа для') ?></li>
					<li><?= BlockText::_('section-screen-6_13', $lang_id, 'text', 'Партнерская программа для специализиро') ?></li>
					<li><?= BlockText::_('section-screen-6_14', $lang_id, 'text', 'Партнерская программа для специализированных') ?></li>
					<li><?= BlockText::_('section-screen-6_15', $lang_id, 'text', 'Партнерская программа для специализированных') ?></li>
				</ul>
			</div>
			<div class="column hd-7 sm-12 sto max-width-pag">
				<div class="title"><?= BlockText::_('section-screen-6_16', $lang_id, 'text', 'ОТS') ?></div>
				<div class="section6-data__table table-paginn">
					<div class="row">
						<span class="small"><?= BlockText::_('section-screen-6_17', $lang_id, 'text', 'Срок проведения копия') ?></span>
						<span class="large"><?= BlockText::_('section-screen-6_18', $lang_id, 'text', '25.11.17 — 25.12.17') ?></span>
					</div>
					<div class="row row-minus">
						<div class="column hd-6 sto">
							<span class="small"><?= BlockText::_('section-screen-6_19', $lang_id, 'text', 'Первая недели') ?></span>
							<span class="large"><?= BlockText::_('section-screen-6_20', $lang_id, 'text', '1 Anm = 0,8$') ?></span>
						</div>
						<div class="column hd-6 sto">
							<span class="small"><?= BlockText::_('section-screen-6_21', $lang_id, 'text', 'Третья неделя') ?></span>
							<span class="large"><?= BlockText::_('section-screen-6_22', $lang_id, 'text', '1 Anm = 1,25$') ?></span>
						</div>
					</div>
					<div class="row row-minus">
						<div class="column hd-6 sto">
							<span class="small"><?= BlockText::_('section-screen-6_23', $lang_id, 'text', 'Вторая 2недели') ?></span>
							<span class="large"><?= BlockText::_('section-screen-6_24', $lang_id, 'text', '1 Anm = 1$') ?></span>
						</div>
						<div class="column hd-6 sto">
							<span class="small"><?= BlockText::_('section-screen-6_25', $lang_id, 'text', 'Четвертая неделя') ?></span>
							<span class="large"><?= BlockText::_('section-screen-6_26', $lang_id, 'text', '1 Anm = 1,5$') ?></span>
						</div>
					</div>
					<div class="row">
						<span class="small"><?= BlockText::_('section-screen-6_27', $lang_id, 'text', 'Объем токенов на продажу копия') ?></span>
						<span class="large"><?= BlockText::_('section-screen-6_28', $lang_id, 'text', '3 000 000 копия') ?></span>
					</div>
				</div>
				<ul class="section6-data__list">
					<li><?= BlockText::_('section-screen-6_29', $lang_id, 'text', 'Партнерская программа для специализированных Партнерская программа специализированных Партнерская программа') ?></li>
					<li><?= BlockText::_('section-screen-6_30', $lang_id, 'text', 'Партнерская программа для') ?></li>
					<li><?= BlockText::_('section-screen-6_31', $lang_id, 'text', 'Партнерская программа для специализированных') ?></li>
					<li><?= BlockText::_('section-screen-6_32', $lang_id, 'text', 'Партнерская программа для специализированных Партнерская программа') ?></li>
					<li><?= BlockText::_('section-screen-6_33', $lang_id, 'text', 'Партнерская программа для специализированных Партнерская программа специализированных') ?></li>
					<li><?= BlockText::_('section-screen-6_34', $lang_id, 'text', 'Партнерская программа для специализированных Партнерская программа специализированных') ?></li>
					<li><?= BlockText::_('section-screen-6_35', $lang_id, 'text', 'Партнерская программа для специализированных Партнерская программа специализированных') ?></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="section section-screen__7 pp-scrollable head-centr7">
	<div class="overl">
		<div class="bef bef-right"></div>
		<div class="container container-pagin pading-pagin7">
			<h2><?= BlockText::_('section-screen-7_0', $lang_id, 'text', 'Дорожная карта') ?></h2>
			<div class="row">
				<div class="column hd-6 sto">
					<ul class="section7-news__date">
						<li class="date"><span><?= BlockText::_('section-screen-7_1', $lang_id, 'text', '10.17') ?></span></li>
						<li class="title"><div class="name"><?= BlockText::_('section-screen-7_2', $lang_id, 'text', 'Обновление 2.0') ?></div></li>
					</ul>
					<ul class="section7-news__date">
						<li class="date"><span><?= BlockText::_('section-screen-7_3', $lang_id, 'text', '10.17 — 12.17') ?></span></li>
						<li class="title"><div class="name"><?= BlockText::_('section-screen-7_4', $lang_id, 'text', 'Pre OTS–OTS') ?></div></li>
					</ul>
					<ul class="section7-news__date">
						<li class="date"><span><?= BlockText::_('section-screen-7_5', $lang_id, 'text', '12.17 — 05.18') ?></span></li>
						<li class="title"><div class="name"><?= BlockText::_('section-screen-7_6', $lang_id, 'text', 'Запуск внутренней биржи инвайтов и токенов') ?></div></li>
					</ul>
					<ul class="section7-news__date">
						<li class="date"><span><?= BlockText::_('section-screen-7_7', $lang_id, 'text', '12.17 — 05.18') ?></span></li>
						<li class="title"><div class="name"><?= BlockText::_('section-screen-7_8', $lang_id, 'text', 'Агрессивный маркетинг. ПРивлечение  специализированных сми') ?></div></li>
					</ul>
					<!--
					<ul class="section7-news__date">
						<li class="date"><span><?= BlockText::_('section-screen-7_9', $lang_id, 'text', '12.17 — 05.18') ?></span></li>
						<li class="title"><div class="name"><?= BlockText::_('section-screen-7_10', $lang_id, 'text', 'Разработка своего блокчейн на основе Биткойна') ?></div></li>
					</ul>
					<ul class="section7-news__date">
						<li class="date"><span><?= BlockText::_('section-screen-7_11', $lang_id, 'text', '11.18') ?></span></li>
						<li class="title"><div class="name"><?= BlockText::_('section-screen-7_12', $lang_id, 'text', 'Внедрение VR технологий во внутренний месенджер') ?></div></li>
					</ul>
					-->
				</div>
				<div class="column hd-6 sto">
					<ul class="section7-news__box">
						<li>
							<span class="name"><?= BlockText::_('section-screen-7_13', $lang_id, 'text', 'до 25.09.17') ?></span>
							<?= BlockText::_('section-screen-7_14', $lang_id, 'text', 'Подготовить полный пакет документов с переводами на требумые документов с переводами') ?>
						</li>
						<li>
							<span class="name"><?= BlockText::_('section-screen-7_15', $lang_id, 'text', '10.09.17 – 20.09.17') ?></span>
							<?= BlockText::_('section-screen-7_16', $lang_id, 'text', 'Подготовить полный пакет документов с переводами') ?>
						</li>
						<li>
							<span class="name"><?= BlockText::_('section-screen-7_17', $lang_id, 'text', '17.09.17 – 20.09.17') ?></span>
							<?= BlockText::_('section-screen-7_18', $lang_id, 'text', 'Подготовить полный пакет документов с переводами на документов') ?>
						</li>
						<li>
							<span class="name"><?= BlockText::_('section-screen-7_19', $lang_id, 'text', '25.09.17 – 20.09.17') ?></span>
							<?= BlockText::_('section-screen-7_20', $lang_id, 'text', 'Подготовить полный пакет документов с переводами на документов') ?>
						</li>
						<li>
							<span class="name"><?= BlockText::_('section-screen-7_21', $lang_id, 'text', '20.09.17 – 20.09.17') ?></span>
							<?= BlockText::_('section-screen-7_22', $lang_id, 'text', 'Подготовить полный пакет документов с переводами на документов') ?>
						</li>
						<li>
							<span class="name"><?= BlockText::_('section-screen-7_23', $lang_id, 'text', '10.09.17 – 20.09.17') ?></span>
							<?= BlockText::_('section-screen-7_24', $lang_id, 'text', 'Подготовить полный пакет документов с переводами на документов') ?>
						</li>
						<!-- <li>
							<span class="name"><?= BlockText::_('section-screen-7_25', $lang_id, 'text', '10.09.17 – 20.09.17') ?></span>
							<?= BlockText::_('section-screen-7_26', $lang_id, 'text', 'Подготовить полный пакет документов с переводами на документов') ?>
						</li>
						<li>
							<span class="name"><?= BlockText::_('section-screen-7_27', $lang_id, 'text', '10.09.17 – 20.09.17') ?></span>
							<?= BlockText::_('section-screen-7_28', $lang_id, 'text', 'Подготовить полный пакет документов с переводами на документов') ?>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section-screen__8 pp-scrollable head-centr8">
	<div class="container container-pagin padding-pagin8">
		<h2><?= BlockText::_('section-screen-8_0', $lang_id, 'text', 'Команда') ?></h2>
		<div class="row">
			<?= BlockMulticontent::_(3, $lang_id) ?> <!-- Команда -->
		</div>
		<div class="button-download"><a href="#" class="btn"><?= Yii::t('app', 'FRONT_BUTTON_3') ?></a></div>
		<h2><?= BlockText::_('section-screen-8_1', $lang_id, 'text', 'Гаранты') ?></h2>
		<div class="row">
			<?= BlockMulticontent::_(4, $lang_id) ?> <!-- Гаранты -->
		</div>
	</div>
</section>

<section class="section section-screen__9 pp-scrollable head-centr9">
	<div class="section9-left__layout"></div>
	<div class="container container-pagin widthg padding-pagin9">
		<div class="column hd-6 sm-12 sto2 paddinmm">
			<h2 class="fontr"><?= BlockText::_('section-screen-9_0', $lang_id, 'text', 'УЧАСТВУЙТЕ <br> В ICO анонимной антисоциальной <br> сети') ?></h2>
			<div class="button-download"><a href="#" class="btn"><?= Yii::t('app', 'FRONT_BUTTON_3') ?></a></div>
			<div class="fon-bgh"></div>
		</div>
		<div class="column hd-6 sm-12 sto2 bacgraund">
		<div class="section9-right__layout">
			<h2 class="fontr fontr2"><?= BlockText::_('section-screen-9_1', $lang_id, 'text', 'связаться с нами') ?></h2>
			<ul class="section9-share__menu">
				<li><a href="<?= Yii::t('app', 'FRONT_SOCIAL_MENU_LINK_1') ?>"><i class="fa fa-facebook"></i><?= Yii::t('app', 'FRONT_SOCIAL_MENU_TEXT_1') ?></a></li>
				<li><a href="<?= Yii::t('app', 'FRONT_SOCIAL_MENU_LINK_2') ?>"><i class="fa fa-vk"></i><?= Yii::t('app', 'FRONT_SOCIAL_MENU_TEXT_2') ?></a></li>
				<li><a href="<?= Yii::t('app', 'FRONT_SOCIAL_MENU_LINK_3') ?>"><i class="fa fa-twitter"></i><?= Yii::t('app', 'FRONT_SOCIAL_MENU_TEXT_3') ?></a></li>
				<li><a href="<?= Yii::t('app', 'FRONT_SOCIAL_MENU_LINK_4') ?>"><i class="fa fa-instagram"></i><?= Yii::t('app', 'FRONT_SOCIAL_MENU_TEXT_4') ?></a></li>
				<li><a href="<?= Yii::t('app', 'FRONT_SOCIAL_MENU_LINK_5') ?>"><i class="fa fa-telegram"></i><?= Yii::t('app', 'FRONT_SOCIAL_MENU_TEXT_5') ?></a></li>
			</ul>
			<div class="section9-subscribe__box">
				<label for="form-email"><?= BlockText::_('section-screen-9_2', $lang_id, 'text', 'подпишитесь на рассылку') ?></label>
				<input type="text" placeholder="E-mail" id="form-email"><button><i class="fa fa-long-arrow-right"></i></button>
			</div>
		</div>
		</div>
	</div>
</section>

</div>
	
<div class="fadeScreen"></div>
<div class="popup-box">
	<h1>Title</h1>
	<i class="fa fa-close popup-close"></i>
</div>

<script src="/plugin/plugins.js"></script>
<script>
	$('#scene').parallax({
		scalarX: 25,
		scalarY: 15,
		frictionX: 0.1,
		frictionY: 0.1
	});
</script>

<script type="text/javascript">
	function openbox(id) {
		display = document.getElementById(id).style.display;

		if (display == 'none') {
			document.getElementById(id).style.display = 'block';
		} else {
			document.getElementById(id).style.display = 'none';
		}
	}
</script>