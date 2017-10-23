<?php

use app\modules\infoblock\components\BlockText;
use app\modules\multicontent\components\BlockMulticontent;

use app\components\helpers\Text;
use yii\helpers\Url;
?>

<?//= Text::_editFull($this->params['siteinfo']->id, 'main') ?> <!-- Ссылка на редактирование материала -->
<section class="section section-screen__1">
	<div id="boxercontainer">
	  <div>
		<h1>The Boxer</h1>
		<p>Well, a man had only so many fights in him, to begin with. It was the iron law of the game. One man might have a hundred hard fights in him, another man only twenty; each, according to the make of him and the quality of his fiber, had a definite number, and when he had fought them he was done. Yes, he had had more fights in him than most of them, and he had had far more than his share of the hard, grueling fights—the kind that worked the heart and lungs to bursting, that took the elastic out of the arteries and made hard knots of muscle out of youth's sleek suppleness, that wore out nerve and stamina and made brain and bones weary from excess of effort and endurance overwrought. Yes, he had done better than all of them. There was none of his old fighting partners left. He was the last of the old guard. He had seen them all finished, and he had had a hand in finishing some of them.</p>
	  </div>
	</div>
</section>
<section class="section section-screen__2">
	<div class="container">
		<h2 class="section2-title"><?= BlockText::_('section-screen-2_0', $lang_id, 'text', 'УЧАСТВУЙТЕ <br> В ICO анонимной <br> антисоциальной <br> сети') ?></h2>
		<p class="s1">
			<span class="small"><?= BlockText::_('section-screen-2_1', $lang_id, 'text', 'привлечено') ?></span>
			<span class="large"><?= BlockText::_('section-screen-2_2', $lang_id, 'text', '82 537 ETH') ?></span>
			<span class="small"><?= BlockText::_('section-screen-2_3', $lang_id, 'text', 'Бэкеры') ?></span>
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
	<div class="container">
		<div class="column hd-5 no-p-w"><?= BlockText::_('section-screen-2_10', $lang_id, 'text', 'Первый раунд ICO закончится  через:') ?></div>
		<div class="column hd-5 no-p-w fr">
			<span class="time">12:48:24</span>
			<a href="#" class="btn"><?= Yii::t('app', 'FRONT_BUTTON_1') ?></a>
		</div>
	</div>
	</div>
</section>
<section class="section section-screen__3">
	<div class="container section3-screen__wrap">
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
</section>
<section class="section section-screen__4">
	<div class="container section4-screen__wrap">
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
	<div class="container">
		<?= BlockMulticontent::_(7, $lang_id) ?> <!-- Отзывы -->
	</div>
</section>

<section class="section section-screen__5">
	<div class="section5-top__layout">
		<div class="content-wrap">
		<div class="container">
			<div class="column hd-2"></div>
			<div class="column hd-6">
				<ul class="section5-opportunity__box theme-black">
					<li><i></i><span><?= BlockText::_('section-screen-5_1', $lang_id, 'text', 'Посты') ?></span></li>
					<li><i></i><span><?= BlockText::_('section-screen-5_2', $lang_id, 'text', 'Мессенджер') ?></span></li>
				</ul>
			</div>
			<div class="column hd-4">
				<div class="title"><?= BlockText::_('section-screen-5_3', $lang_id, 'text', 'Функции доступные до авторизации') ?></div>
			</div>
		</div>
		</div>
	</div>
	<div class="section5-bottom__layout">
		<div class="container">
			<div class="column hd-2"></div>
			<div class="column hd-6">
				<ul class="section5-opportunity__box">
					<li><i></i><span><?= BlockText::_('section-screen-5_4', $lang_id, 'text', 'Закрытые комнаты') ?></span></li>
					<li><i></i><span><?= BlockText::_('section-screen-5_5', $lang_id, 'text', 'Групповые чаты') ?></span></li>
					<li><i></i><span><?= BlockText::_('section-screen-5_6', $lang_id, 'text', 'Чат-каналы') ?></span></li>
				</ul>
			</div>
			<div class="column hd-4">
				<div class="title"><?= BlockText::_('section-screen-5_7', $lang_id, 'text', 'Функции доступные  после авторизации') ?></div>
				<?= BlockText::_('section-screen-5_8', $lang_id, 'html', '<p>В сети «Аноним» неважно кто ты, как ты выглядишь и какой у тебя В сети «Аноним» неважно кто ты, как ты выглядишь и какой у тебя</p>') ?>
			</div>
		</div>
		<div class="section5-stat__wrap">
		<div class="container">
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
</section>

<section class="section section-screen__6">
	<div class="container">
		<h2><?= BlockText::_('section-screen-6_0', $lang_id, 'text', 'Открытая продажа токенов сети') ?></h2>
		<div class="row row-minus">
			<div class="column hd-5">
				<div class="title"><?= BlockText::_('section-screen-6_1', $lang_id, 'text', 'pRe-sale') ?></div>
				<div class="section6-data__table">
					<div class="row">
						<span class="small"><?= BlockText::_('section-screen-6_2', $lang_id, 'text', 'Срок проведения') ?></span>
						<span class="large"><?= BlockText::_('section-screen-6_3', $lang_id, 'text', '25.09.17 — 25.10.17') ?></span>
					</div>
					<div class="row">
						<span class="small"><?= BlockText::_('section-screen-6_4', $lang_id, 'text', 'Первые 2недели') ?></span>
						<span class="large"><?= BlockText::_('section-screen-6_5', $lang_id, 'text', '1 Anm = 0,7$') ?></span>
					</div>
					<div class="row">
						<span class="small"><?= BlockText::_('section-screen-6_6', $lang_id, 'text', 'Вторые 2недели') ?></span>
						<span class="large"><?= BlockText::_('section-screen-6_7', $lang_id, 'text', '1 Anm = 0,7$ копия') ?></span>
					</div>
					<div class="row">
						<span class="small"><?= BlockText::_('section-screen-6_8', $lang_id, 'text', 'Объем токенов на продажу') ?></span>
						<span class="large"><?= BlockText::_('section-screen-6_9', $lang_id, 'text', '3 000 000') ?></span>
					</div>
				</div>
				<ul class="section6-data__list">
					<li><?= BlockText::_('section-screen-6_10', $lang_id, 'text', 'Партнерская программа для специализированных Партнерская программа специализированных Партнерская программа') ?></li>
					<li><?= BlockText::_('section-screen-6_11', $lang_id, 'text', 'Партнерская программа для специ') ?></li>
					<li><?= BlockText::_('section-screen-6_12', $lang_id, 'text', 'Партнерская программа для') ?></li>
					<li><?= BlockText::_('section-screen-6_13', $lang_id, 'text', 'Партнерская программа для специализиро') ?></li>
					<li><?= BlockText::_('section-screen-6_14', $lang_id, 'text', 'Партнерская программа для специализированных') ?></li>
					<li><?= BlockText::_('section-screen-6_15', $lang_id, 'text', 'Партнерская программа для специализированных') ?></li>
				</ul>
			</div>
			<div class="column hd-7">
				<div class="title"><?= BlockText::_('section-screen-6_16', $lang_id, 'text', 'ОТS') ?></div>
				<div class="section6-data__table">
					<div class="row">
						<span class="small"><?= BlockText::_('section-screen-6_17', $lang_id, 'text', 'Срок проведения копия') ?></span>
						<span class="large"><?= BlockText::_('section-screen-6_18', $lang_id, 'text', '25.11.17 — 25.12.17') ?></span>
					</div>
					<div class="row row-minus">
						<div class="column hd-6">
							<span class="small"><?= BlockText::_('section-screen-6_19', $lang_id, 'text', 'Первая недели') ?></span>
							<span class="large"><?= BlockText::_('section-screen-6_20', $lang_id, 'text', '1 Anm = 0,8$') ?></span>
						</div>
						<div class="column hd-6">
							<span class="small"><?= BlockText::_('section-screen-6_21', $lang_id, 'text', 'Третья неделя') ?></span>
							<span class="large"><?= BlockText::_('section-screen-6_22', $lang_id, 'text', '1 Anm = 1,25$') ?></span>
						</div>
					</div>
					<div class="row row-minus">
						<div class="column hd-6">
							<span class="small"><?= BlockText::_('section-screen-6_23', $lang_id, 'text', 'Вторая 2недели') ?></span>
							<span class="large"><?= BlockText::_('section-screen-6_24', $lang_id, 'text', '1 Anm = 1$') ?></span>
						</div>
						<div class="column hd-6">
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

<section class="section section-screen__7">
	<div class="container">
		<h2><?= BlockText::_('section-screen-7_0', $lang_id, 'text', 'Дорожная карта') ?></h2>
		<div class="row">
			<div class="column hd-6">
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
			<div class="column hd-6">
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
</section>

<section id="block4" class="section section-screen__8">
	<div class="container">
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

<section class="section section-screen__9">
<div class="section9-left__layout"></div>
	<div class="container">
		<div class="column hd-6">
			<h2><?= BlockText::_('section-screen-9_0', $lang_id, 'text', 'УЧАСТВУЙТЕ <br> В ICO анонимной антисоциальной <br> сети') ?></h2>
			<div class="button-download"><a href="#" class="btn"><?= Yii::t('app', 'FRONT_BUTTON_3') ?></a></div>
		</div>
		<div class="column hd-6">
		<div class="section9-right__layout">
			<h2><?= BlockText::_('section-screen-9_1', $lang_id, 'text', 'связаться с нами') ?></h2>
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