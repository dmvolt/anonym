<?php
use yii\helpers\Html;
use app\components\helpers\Text;
use app\components\helpers\Language;

use app\modules\infoblock\components\BlockText;
use app\assets\PageAsset;
use app\assets\EditPageAsset;

use yii\bootstrap\Modal;

if(Yii::$app->user->can('adminPanel')){
	EditPageAsset::register($this);
	/* AppAsset::register($this); */
}
else{
	PageAsset::register($this);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= $this->params['meta_description'] ?>">
<meta name="keywords" content="<?= $this->params['meta_keywords'] ?>">

<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
	
<?php $this->head() ?>

<!--<link rel="stylesheet" href="css/jquery.pagepiling.css">-->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
	$(document).ready(function() {
		  $("a.scrollto").click(function() {
		    var elementClick = $(this).attr("href")
		    var destination = $(elementClick).offset().top;
		    jQuery("html:not(:animated),body:not(:animated)").animate({
		      scrollTop: destination
		    }, 800);
		    return false;
		  });
		});
</script>

</head>
<body>
<?php $this->beginBody() ?>
<?= $this->params['siteinfo']->counter ?>
    
<div class="bacgraund-fon"></div>
<div class="fixed-top__menu" style="position: fixed;">
	<div class="column hd-2 logo-paper"><a href="<?= Yii::$app->homeUrl ?>" class="logo-main"></a></div>
	<div class="column hd-7 lg-6 sm-6">
		<div class="burg-butt burg-butt2">
            <div id="bbt" onclick="openbox('box'); return false" class="buef buef2"></div>
        </div>
		<ul class="main-top__menu main-top__menu-paper paper-adap" id="box" style="display: none;">
			<!--<li><a href="#">проект</a></li>
			<li><a href="#">экономика</a></li>
			<li><a href="#">дорожная карта</a></li>
			<li><a href="#">команда</a></li>-->
			<ul class="bord556">
				<li><a href="#m111" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_10', $lang_id, 'text', '1. введение') ?></a></li>
	            <li><a href="#m22" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_11', $lang_id, 'text', '2. аноним') ?></a></li>
	            <li><a href="#m33" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_12', $lang_id, 'text', '3. ПОЧЕМУ МЫ') ?></a></li>
	            <li><a href="#m44" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_13', $lang_id, 'text', '4. ДЛЯ КОГО СОЗДАНА СЕТЬ') ?></a></li>
	            <li><a href="#m55" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_14', $lang_id, 'text', '5. ЗАЧЕМ СОЗДАНА СЕТЬ') ?></a></li>
	            <li><a href="#m66" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_15', $lang_id, 'text', '6. ЧТО УЖЕ СДЕЛАЛИ') ?></a></li>
	            <li><a href="#m77" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_16', $lang_id, 'text', '7.  ЧТО МЫ ХОТИМ СДЕЛАТЬ') ?></a></li>
	            <li><a href="#m88" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_17', $lang_id, 'text', '8. АНОНИМНЫЙ БЛОКЧЕЙН') ?></a></li>
	            <li><a href="#m99" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_18', $lang_id, 'text', '9. АНОНИМНАЯ МОДЕЛЬ МОНЕТИЗАЦИИ') ?></a></li>
	            <li><a href="#m101" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_19', $lang_id, 'text', '10. ТОКЕН АНОНИМ') ?></a></li>
	            <!--<li><a href="#m112" class="scrollto"><span></span><?//= BlockText::_('whitepaper-1_20', $lang_id, 'text', '11. ПРИВАТНЫЙ ДОСТУП В СЕТЬ АНОНИМ') ?></a></li>-->
	            <li><a href="#m123" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_21', $lang_id, 'text', '11. ВЫГОДА ДЕРЖАТЕЛЯ ТОКЕНОВ') ?></a></li>
	            <li><a href="#m134" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_22', $lang_id, 'text', '12. ПЕРВООЧЕРЕДНЫЕ ЭТАПЫ РАЗВИТИЯ') ?></a></li>
	            <li><a href="#m145" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_23', $lang_id, 'text', '13. ОТКРЫТАЯ ПРОДАЖА ТОКЕНОВ СЕТИ АНОНИМ') ?></a></li>
	            <li><a href="#m156" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_24', $lang_id, 'text', '14. ИНВЕСТИЦИИ В БУДУЩЕЕ СЕТИ АНОНИМ') ?></a></li>
	            <li><a href="#m167" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_25', $lang_id, 'text', '15. НАША ОТВЕТСТВЕННОСТЬ') ?></a></li>
	            <li><a href="#m178" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_26', $lang_id, 'text', '16. ЮРИДИЧЕСКАЯ ЗАЩИТА') ?></a></li>
	            <li><a href="#m189" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_27', $lang_id, 'text', '17. КОМАНДА') ?></a></li>
	            <li><a href="#m190" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_28', $lang_id, 'text', '18. СООБЩЕСТВО') ?></a></li>
		        <li><a href="#m191" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_29', $lang_id, 'text', '19. ССЫЛКИ НА СКАЧИВАНИЕ') ?></a></li>
		        <li><a href="#m192" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_30', $lang_id, 'text', '20. ЗАКЛЮЧЕНИЕ') ?></a></li>
		     </ul>
		</ul>
		
	</div>
	<!--<div class="column hd-2 lg-3 sm-2"><a href="#" class="btn btn-pagin">Whitepaper</a></div>-->
	<!--<div class="column hd-1 lg-1 sm-2 text-right btn-lang-paper"><a href="#" class="btn-lang">Rus</a></div>-->
	
	<div id="#lang" class="column hd-1 lg-1 sm-2 text-right btn-lang-paper dropdown">
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


<a href="#" class="icon-share icon-share-paper"><i class="fa fa-share-alt"></i></a>
<a href="#m111" class="icon-step icon-step-paper scrollto"><i class="fa fa-long-arrow-down"></i></a>



<div id="">
   <section class="section-screen__2" style="height: 100vh;position: relative;z-index: 9;">
      <div class="content-width">
         <h1><?= BlockText::_('whitepaper-1_0', $lang_id, 'text', 'white paper') ?></h1>
         <ul>
            <li><a href="#m111" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_10', $lang_id, 'text', '1. введение') ?></a></li>
			<li><a href="#m22" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_11', $lang_id, 'text', '2. аноним') ?></a></li>
			<li><a href="#m33" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_12', $lang_id, 'text', '3. ПОЧЕМУ МЫ') ?></a></li>
			<li><a href="#m44" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_13', $lang_id, 'text', '4. ДЛЯ КОГО СОЗДАНА СЕТЬ') ?></a></li>
			<li><a href="#m55" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_14', $lang_id, 'text', '5. ЗАЧЕМ СОЗДАНА СЕТЬ') ?></a></li>
			<li><a href="#m66" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_15', $lang_id, 'text', '6. ЧТО УЖЕ СДЕЛАЛИ') ?></a></li>
			<li><a href="#m77" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_16', $lang_id, 'text', '7.  ЧТО МЫ ХОТИМ СДЕЛАТЬ') ?></a></li>
			<li><a href="#m88" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_17', $lang_id, 'text', '8. АНОНИМНЫЙ БЛОКЧЕЙН') ?></a></li>
			<li><a href="#m99" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_18', $lang_id, 'text', '9. АНОНИМНАЯ МОДЕЛЬ МОНЕТИЗАЦИИ') ?></a></li>
			<li><a href="#m101" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_19', $lang_id, 'text', '10. ТОКЕН АНОНИМ') ?></a></li>
			<!--<li><a href="#m112" class="scrollto"><span></span><?//= BlockText::_('whitepaper-1_20', $lang_id, 'text', '11. ПРИВАТНЫЙ ДОСТУП В СЕТЬ АНОНИМ') ?></a></li>-->
			<li><a href="#m123" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_21', $lang_id, 'text', '11. ВЫГОДА ДЕРЖАТЕЛЯ ТОКЕНОВ') ?></a></li>
			<li><a href="#m134" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_22', $lang_id, 'text', '12. ПЕРВООЧЕРЕДНЫЕ ЭТАПЫ РАЗВИТИЯ') ?></a></li>
			<li><a href="#m145" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_23', $lang_id, 'text', '13. ОТКРЫТАЯ ПРОДАЖА ТОКЕНОВ СЕТИ АНОНИМ') ?></a></li>
			<li><a href="#m156" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_24', $lang_id, 'text', '14. ИНВЕСТИЦИИ В БУДУЩЕЕ СЕТИ АНОНИМ') ?></a></li>
			<li><a href="#m167" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_25', $lang_id, 'text', '15. НАША ОТВЕТСТВЕННОСТЬ') ?></a></li>
			<li><a href="#m178" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_26', $lang_id, 'text', '16. ЮРИДИЧЕСКАЯ ЗАЩИТА') ?></a></li>
			<li><a href="#m189" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_27', $lang_id, 'text', '17. КОМАНДА') ?></a></li>
			<li><a href="#m190" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_28', $lang_id, 'text', '18. СООБЩЕСТВО') ?></a></li>
			<li><a href="#m191" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_29', $lang_id, 'text', '19. ССЫЛКИ НА СКАЧИВАНИЕ') ?></a></li>
			<li><a href="#m192" class="scrollto"><span></span><?= BlockText::_('whitepaper-1_30', $lang_id, 'text', '20. ЗАКЛЮЧЕНИЕ') ?></a></li>
         </ul>
      </div>
   </section>
   <section class="">
	      <div class="menu-right-fixed">
	         <ul>
	            <li id="m1" class="menu-button active-menu">
	            	<a href="#m111">
	            		<span>
	            			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
	            		</span>
	            		<?= BlockText::_('whitepaper-1_10', $lang_id, 'text', '1. введение') ?>
	            	</a>
	        	</li>
	            <li id="m2" class="menu-button">
	            	<a href="#m22" class="scrollto">
	            		<span>
	            			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
	            		</span>
	            	<?= BlockText::_('whitepaper-1_11', $lang_id, 'text', '2. аноним') ?>
	            </a></li>
	            <li id="m3" class="menu-button">
	            	<a href="#m33" class="scrollto">
	            		<span>
	            			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
	            		</span>
	            		<?= BlockText::_('whitepaper-1_12', $lang_id, 'text', '3. ПОЧЕМУ МЫ') ?>
	            	</a>
	            </li>
	            <li id="m4" class="menu-button">
	            	<a href="#m44" class="scrollto">
	            		<span>
	            			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
	            		</span>
		            	<?= BlockText::_('whitepaper-1_13', $lang_id, 'text', '4. ДЛЯ КОГО СОЗДАНА СЕТЬ') ?>
		            </a>
		        </li>
	            <li id="m5" class="menu-button">
	            	<a href="#m55" class="scrollto">
	            		<span>
	            			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
	            		</span>
	            	<?= BlockText::_('whitepaper-1_14', $lang_id, 'text', '5. ЗАЧЕМ СОЗДАНА СЕТЬ') ?></a></li>
					
	            <li id="m6" class="menu-button"><a href="#m66" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_15', $lang_id, 'text', '6. ЧТО УЖЕ СДЕЛАЛИ') ?></a></li>
	            <li id="m7" class="menu-button"><a href="#m77" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_16', $lang_id, 'text', '7.  ЧТО МЫ ХОТИМ СДЕЛАТЬ') ?></a></li>
	            <li id="m8" class="menu-button"><a href="#m88" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_17', $lang_id, 'text', '8. АНОНИМНЫЙ БЛОКЧЕЙН') ?></a></li>
	            <li id="m9" class="menu-button"><a href="#m99" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_18', $lang_id, 'text', '9. АНОНИМНАЯ МОДЕЛЬ МОНЕТИЗАЦИИ') ?></a></li>
	            <li id="m10" class="menu-button"><a href="#m101" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_19', $lang_id, 'text', '10. ТОКЕН АНОНИМ') ?></a></li>
	            <!--<li id="m11" class="menu-button"><a href="#m112" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?//= BlockText::_('whitepaper-1_20', $lang_id, 'text', '11. ПРИВАТНЫЙ ДОСТУП В СЕТЬ АНОНИМ') ?></a></li>-->
	            <li id="m12" class="menu-button"><a href="#m123" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_21', $lang_id, 'text', '11. ВЫГОДА ДЕРЖАТЕЛЯ ТОКЕНОВ') ?></a></li>
	            <li id="m13" class="menu-button"><a href="#m134" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_22', $lang_id, 'text', '12. ПЕРВООЧЕРЕДНЫЕ ЭТАПЫ РАЗВИТИЯ') ?></a></li>
	            <li id="m14" class="menu-button"><a href="#m145" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_23', $lang_id, 'text', '13. ОТКРЫТАЯ ПРОДАЖА ТОКЕНОВ СЕТИ АНОНИМ') ?></a></li>
	            <li id="m15" class="menu-button"><a href="#m156" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_24', $lang_id, 'text', '14. ИНВЕСТИЦИИ В БУДУЩЕЕ СЕТИ АНОНИМ') ?></a></li>
	            <li id="m16" class="menu-button"><a href="#m167" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_25', $lang_id, 'text', '15. НАША ОТВЕТСТВЕННОСТЬ') ?></a></li>
	            <li id="m17" class="menu-button"><a href="#m178" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_26', $lang_id, 'text', '16. ЮРИДИЧЕСКАЯ ЗАЩИТА') ?></a></li>
	            <li id="m18" class="menu-button"><a href="#m189" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_27', $lang_id, 'text', '17. КОМАНДА') ?></a></li>
	            <li id="m19" class="menu-button"><a href="#m190" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_28', $lang_id, 'text', '18. СООБЩЕСТВО') ?></a></li>
	            <li id="m20" class="menu-button"><a href="#m191" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_29', $lang_id, 'text', '19. ССЫЛКИ НА СКАЧИВАНИЕ') ?></a></li>
	            <li id="m21" class="menu-button"><a href="#m192" class="scrollto"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span><?= BlockText::_('whitepaper-1_30', $lang_id, 'text', '20. ЗАКЛЮЧЕНИЕ') ?></a></li>
	         </ul>
	      </div>
      <div id="m111"  data-id="m1" class="content-width">
         <div class="menu-block-paper">
            <span><?= BlockText::_('whitepaper-2_0', $lang_id, 'text', '1. введение') ?></span>
			<?= BlockText::_('whitepaper-2_1', $lang_id, 'html', '<p>
               Представьте, что где - то в медиапространстве есть закрытый ресурс, в
				котором собираются для общения открытые, неординарные и развитые люди.
			</p>
			<p>
				               - Там отсутствует надоедливая реклама.<br>
				- Там при регистрации не требуют никаких конфиденциальных данных.<br>
				- Там абсолютно не важно то, как ты выглядишь и какой у тебя социальный
				статус.<br>
				- Там можно говорить обо всем, не заботясь о том, что подумают другие.<br>
				- Там люди находят друг друга, руководствуясь исключительно своими
				интересами и целями<br>
				- Там высказывают свое истинное отношение к вещам.<br>
				- Там поддерживают свободу слова
            </p>
            <p style="
               margin-top: 10px;
               font-size: 21px;
               line-height: 1.2;
               ">
               Хотели бы Вы оказаться в таком месте?<br>
Стать частью приватного сообщества?
            </p>') ?>
            <div class="border-bottom-paper"></div>
         </div>
      </div>
      <div id="m22" data-id="m2" class="content-width">
         <div class="menu-block-paper">
            <span><?= BlockText::_('whitepaper-3_0', $lang_id, 'text', '2.	АНОНИМ') ?></span>
			<?= BlockText::_('whitepaper-3_1', $lang_id, 'html', '<p>
               Добро пожаловать в сеть Аноним!
            </p>
            <p>
               Аноним - это возможность присоединиться к закрытому сообществу более
одного миллиона интересных людей по всему миру. 
            </p>
            <p>
            •   Это простой способ рассказать о том, что происходит с тобой и вокруг тебя
абсолютно анонимно.
            </p>
            <p>
             •  Это возможность поведать то, что сложно доверить публике; поделиться
своими мыслями без страха, что подумают другие.
            </p>
            <p>
              • Это легкий способ создать приватное комьюнити с помощью групповых
сообществ и чат-каналов.
            </p>
            <p>
               Говори о том, что действительно важно для тебя
            </p>
            <p>
               Здесь неважно кто ты, как ты выглядишь и какой у тебя социальный статус.<br>
Здесь ценятся только твои мысли и твоя точка зрения.<br>
Здесь принято быть собой, общаясь без масок и социальных ярлыков.<br>
Здесь возможно обрести единомышленников, проявлять свободомыслие и<br>
самое главное - себя.
            </p>') ?>
            <div class="img-paper">
               <img src="/img/img-ff.jpg">
            </div>
            <div class="border-bottom-paper" style="
               margin-top: 28px;
               "></div>
         </div>
      </div>
      <div id="m33" data-id="m3" class="content-width">
         <div class="menu-block-paper">
            <span><?= BlockText::_('whitepaper-4_0', $lang_id, 'text', '3. ПОЧЕМУ МЫ') ?></span>
			<?= BlockText::_('whitepaper-4_1', $lang_id, 'html', '<p>
               <strong>• Свобода выражения.</strong><br>
               Свобода мыслить и говорить вне зависимости от того, что сказано и кем.
            </p>
            <p>
               <strong>• Тёплая атмосфера</strong><br>
               Возможность поведать самые сокровенные тайны.
            </p>
            <p>
               <strong>• Отсутствие регистрации.</strong>
            </p>
            <p>
               <strong>• Отсутствие рекламы</strong>
            </p>
            <p>
               <strong>• Мировой уровень.</strong><br>
               Уже в числе пользователей Анонима присутствуют страны СНГ, а также
Германия и США.
            </p>
            <p>
               <strong>• Продвинутый интерфейс.</strong><br>
               Система блокчейн, VR технологии и применение нейронной сети для
коммуникаций.
            </p>
            <p>
               <strong>• Безопасность.</strong><br>
               Приватное хранение данных, система закрытого доступа при регистрации.
            </p>
            <p>
               <strong>• Прибыль.</strong><br>
              Система монетизации для активных пользователей сети.
            </p>
            <p>
               <strong>• Наличие грамотной модерации.</strong><br>
               Система выявляет вредоносный контент методом фиксации «стоп слов»
без раскрытия личности пользователя.
            </p>') ?>
            <div class="border-bottom-paper"></div>
         </div>
      </div>
      <div id="m44" data-id="m4" class="content-width">
         <div class="menu-block-paper">
            <span><?= BlockText::_('whitepaper-5_0', $lang_id, 'text', '4. ДЛЯ КОГО СОЗДАНА СЕТЬ?') ?></span>
			<?= BlockText::_('whitepaper-5_1', $lang_id, 'html', '<p>
               - Для тех, кто готов делиться познавательными историями, новостями и
мыслями с другими пользователями свободно и без социальных барьеров и
предрассудков.
            </p>
            <p>
               - Для тех, кто готов публиковать новости и инсайдерскую информацию
анонимно в целях своей безопасности.
            </p>
            <p>
               - Для желающих вести новостные каналы и оставаться в тени по
политическим и коммерческим соображениям.
            </p>
            <p>
              - Для сообществ и компаний, которые хотят проводить знать истинные
предпочтения людей.
            </p>
            <p>
               - Для тех, кто хочет объединяться в закрытые сообщества по интересам.
            </p>
            <p>
            	Аноним — <strong>это единство.</strong><br>
            	Аноним — <strong>это гласность.</strong><br>
            	Аноним — <strong> это свобода.</strong>
            </p>') ?>
            <div class="border-bottom-paper"></div>
         </div>
      </div>
      <div id="m55" data-id="m5" class="content-width">
         <div class="menu-block-paper">
            <span><?= BlockText::_('whitepaper-6_0', $lang_id, 'text', '5. ЗАЧЕМ СОЗДАНА СЕТЬ?') ?></span>
			<?= BlockText::_('whitepaper-6_1', $lang_id, 'html', '<p>
               Наша цель в создании приватного сообщества продвинутых людей с высоким
уровнем взаимного доверия и понимания. Людей с более высокой степенью
развития и осознанности. 
            </p>
            <p>
               Мы спроектировали автоматизированную экосистему вокруг сообщества для
внутренней коммуникации между его участниками.
            </p>
            <p>
               Задумайтесь, ведь всегда существовали тайные общества, закрытые элитные
клубы, корни которых уходят далеко в прошлое. Некоторые из них даже
влияли на ход истории. Ведь собранная в одном месте группа
заинтересованных людей, объединенных одним смыслом и целью, может
вершить великие дела!
            </p>
            <p>
               Кто знает, возможно Аноним сможет повлиять на ход истории?
            </p>') ?>
            <div class="border-bottom-paper"></div>
         </div>
      </div>
      <div id="m66" data-id="m6" class="content-width">
         <div class="menu-block-paper">
            <span><?= BlockText::_('whitepaper-7_0', $lang_id, 'text', '6. ЧТО МЫ УЖЕ СДЕЛАЛИ') ?></span>
			<?= BlockText::_('whitepaper-7_1', $lang_id, 'html', '<p>
               Первая рабочая версия сети Аноним была опубликована в Play Market и APP
				Store в ноябре 2016 года. Проект был запущен с минимальным набором
				функций (новостная лента историй от анонимных пользователей, анонимный
				месенджер, фотолента, групповые сообщества и возможность прослушивать
				аудиофайлы). 
            </p>
            <p>
               Ключевая ценность сети заключалась в отсутствии конфиденциальных
				данных при регистрации пользователей. Не требовалось вводить номер
				телефона и адрес электронной почты. Пользователи могли сами придумывать
				свой псевдоним из любых свободных в системе логинов и никнеймов.
            </p>
            <p>
               В течении 2016 - 2017 года произошло три изменения в развитии проекта.
Был изменён функционал и дизайн сети Аноним.
            </p>
            <p>
               На сегодняшний день выпущено более 80 обновлений.
            </p>') ?>
            
            <span style="text-transform: none;"><?= BlockText::_('whitepaper-7_2', $lang_id, 'text', 'Метрики на 3 квартал 2017 года') ?></span>
            <div class="img-paper">
               <img src="/img/gghh.png">
            </div>
			<?= BlockText::_('whitepaper-7_3', $lang_id, 'html', '<p>
            	Наша стратегия была направлена на проверку гипотезы живучести и
востребованности сети, поэтому мы не вкладывались в продвижение и
маркетинг. Ставка была сделана на сарафанное радио и органический
прирост. Рекламный бюджет составил 0 рублей.
            </p>') ?>
            
            <span><?= BlockText::_('whitepaper-7_4', $lang_id, 'text', 'ОБНОВЛЕНИЕ 2.0') ?></span>
			
			<?= BlockText::_('whitepaper-7_5', $lang_id, 'html', '<p>
            	В октябре 2017 года мы готовимся к обновлению сети Аноним версии 2.0. с
переработанной архитектурой и функциональностью приложения.
            </p>
            <p>
            	На протяжении года мы внимательно слушали все предложения и замечания
от пользователей, вступали в диалог и выявляли их истинные предпочтения.
Мы подготовили ряд новых и востребованных функций в сети Аноним. Кроме
того, мы завершаем работу над web-версией по просьбе пользователей.
            </p>
            <p>
            	В версии 2.0 наша команда разработала и реализовала новый функционал:
чат-каналы и групповые чаты. Мы подготовили площадку для серой зоны СМИ
- свободного выражения и трансляции настоящих новостей без цензуры и
дополнительных фильтров. В эпоху информационного шума теперь возможно
непредвзято и правдиво отразить то или иное событие и направить человека
к источнику информации. Мы хотим дать возможность специализированным
и анонимным СМИ получить доступ к заинтересованной аудитории. Они
смогут транслировать свой контент и монетизировать свою деятельность не
только с нативной рекламы в своих чат-каналах, но и получать
вознаграждение от самой сети и доната подписчиков.
            </p>
            <p>
            	Также в версии 2.0 мы ограничили доступ новым пользователям к сети
Аноним при регистрации. Система закрытого пользования введена по
инициативе сообщества приложения. Это сделано потому, что пользователи
хотят сформировать интересное и уютное приватное пространство для
общения между участниками. Теперь можно создать элитное сообщество в
цифровом пространстве, но не по социальному статусу, а по настоящим
            </p>
            <p>
            	человеческим качествам. Такое ограничение во многом позволит самим
пользователям формировать атмосферу, которая даст возможность найти
собеседников по вкусу, не теряя их на просторах сети.
            </p>
            <p>
            	На данный момент действует открытая система регистрации для создания
псевдонима но после вступления в сеть 1 000 001 пользователя, регистрация в
Анониме будет ограничена. Попасть в сеть будет возможно только по
приглашению от пользователей, либо по приобретенному инвайту
(условному приглашению) на внутренней бирже сети Анонима.
            </p>') ?>
            <div class="border-bottom-paper"></div>
         </div>
      </div>
      <div id="m77" data-id="m7" class="content-width">
         <div class="menu-block-paper">
            <span><?= BlockText::_('whitepaper-8_0', $lang_id, 'text', '7. ЧТО МЫ ХОТИМ СДЕЛАТЬ') ?></span>
			<?= BlockText::_('whitepaper-8_1', $lang_id, 'html', '<p>
               В ближайшем будущем мы планируем создать закрытую экосистему сети
Аноним, позволяющую существовать сообществу максимально автономно на
столько, на сколько это возможно.
            </p>
            <p>
               Мы планируем использовать современные технологии и инструменты для
взаимодействия и коммуникации между участниками сети, а именно:
            </p>
            <p>
              <strong>- В первую очередь Защита данных,</strong>
              когда исходные голосовые, текстовые,
фото-, видеофайлы и любая другая информация, передающаяся через канал
коммуникации, может быть прочтена только отправителем и получателем
и при этом не может быть перехвачена третьими лицами — будь то
киберпреступники, хакеры, органы власти или же сотрудники силовых
структур. Такой тип шифрования будет доступен теперь для всех участников
сети Аноним.
            </p>
            <p>
              <strong>- Создание партнерской программы со специализированными и не
форматными СМИ для их участия в сети Аноним.</strong>
			профильные каналы и сообщества для выпуска приватного контента сети
Аноним. Мы реализуем программу вознаграждения каналов и сообществ по
партнерской программе сети Аноним.
            </p>
            <p>
               <strong>- Создание инструментов для открытой разработки приложений для
экосистемы сети Аноним</strong>
(Open Source, возможность создавать приложения
для сети, интеграция сторонних сервисов)
            </p>
            <p>
               <strong>- Достичь 30 млн пользователей сообщества</strong>
                (количество не самоцель,
цель - качество сообщества)
            </p>
            <p>
               <strong>- Реализация технологии блокчейн для хранения конфиденциальных
данных.</strong>
			Разработки собственного блокчейн решения для сети Аноним, для
хранения данных в зашифрованном виде.
            </p>
            <p>
               <strong>- Создание внутренних автономных финансовых инструментов</strong>
               для
обеспечения полного цикла операций по обмену ресурсами между
участниками экосистемы. Первым этапом будет введение внутренней биржи
активов.
            </p>
            <p>
               <strong>- Создание внутренней закрытой кооперативной</strong>
               площадки для
реализации совместных проектов, как внутри системы, так и за её пределами.
Это будет всем привычная краудфандинговая и краудинвестинговая система,
но исключительно для членов сообщества сети Аноним.
            </p>
            <p>
               <strong>- Разработка VR коммуникации</strong>
              во внутреннем месенджере сети Аноним.
Мы создадим приватный чат, где пользователи могут воспользоваться
современными VR технологиями, выбирать любые виртуальные геолокации,
использовать любых персонажей и VR атрибутики в приватной
коммуникации. Кроме того, можно будет беседовать с другими
пользователями на любой выбранной геолокации. Например: На Гранд
Каньоне или Луне, в образе Дарта Вейдера и т.д. Эти функции призваны
открыть потенциал для творчества и развития технологии в данном
направлении.
            </p>') ?>
            <div class="border-bottom-paper"></div>
         </div>
      </div>
      <div id="m88" data-id="m8" class="content-width">
         <div class="menu-block-paper">
            <span><?= BlockText::_('whitepaper-9_0', $lang_id, 'text', '8.	АНОНИМНЫЙ БЛОКЧЕЙН') ?></span>
			<?= BlockText::_('whitepaper-9_1', $lang_id, 'html', '<p>
               В начале 2017 года вышло обновление сети Аноним с новым функционалом и
внутренней монетизацией. Последняя позволяла пользователям получать
цифровые монетки сети Аноним за полезные действия. Система
вознаграждала пользователя за создание и публикацию контента в сети
Аноним.
            </p>
            <p>
               Кроме того, пользователи сети Аноним могли приобрести цифровую валюту в
самом приложении для оплаты внутренних покупок через магазины Play
Market и APP Store.
            </p>
            <p>
               Однако, в разработке такого обновления мы столкнулись с тремя
проблемами: <br>
- Магазины приложений берут комиссию с одной транзакции в размере 30% <br>
- Пользователи не могут вывести полученные цифровые активы в фиат или
поменять на более ликвидный актив. Если же подключать сторонние сервисы,
то также возникает вопрос о высокой комиссии <br>
- Проблема двойных трат.
            </p>
            <p>
               Наша команда рассмотрела вопрос о децентрализованном хранении данных
и их защиты с применением технологии блокчейн ( это способ хранения
конфиденциальных данных в зашифрованном виде на стороне клиента, а не
на централизованном сервере компании). Наша команда уверена в
конструктивном решении проблемы хранения конфиденциальных данных с
помощью блокчейн технологии, а именно разработки собственного блокчейн
решения для сети Аноним, для хранения данных в зашифрованном виде.
            </p>') ?>
           <!-- <div class="teble-paper" style="margin-top: 40px;margin-bottom: 105px;">
               <div class="top-paperf">
                  Требуемые инвестиций в размере <strong>1500K</strong> USD:
               </div>
               <div class="top-paperf">
                  <div class="left-paper-text">
                     Партнерская программа
                     для специализированных/неформатных информационных каналов, групповых сообществ, СМИ, блогеров, в качестве мотивации привлечения на ресурс (программа запуска информационной автономной экосистемы)
                  </div>
                  <div class="namber-text">
                     61%
                  </div>
               </div>
               <div class="top-paperf">
                  <div class="left-paper-text">
                     Операционные расходы на команду ФОТ<br>
                     до укомплектовка команды<br>
                     - Архитектор системы<br>
                     - Блокчейн программисты (команда из 5-7 
                  </div>
                  <div class="namber-text">
                     4%
                  </div>
               </div>
               <div class="top-paperf">
                  Требуемые инвестиций в размере <strong>10000K- 15000K</strong> USD:
               </div>
               <div class="top-paperf">
                  <div class="left-paper-text">
                     Партнерская программа
                     для специализированных/неформатных информационных каналов, групповых сообществ, СМИ, блогеров, в качестве мотивации привлечения на ресурс (программа запуска информационной автономной экосистемы)
                  </div>
                  <div class="namber-text">
                     61%
                  </div>
               </div>
               <div class="top-paperf">
                  <div class="left-paper-text">
                     Операционные расходы на команду ФОТ<br>
                     до укомплектовка команды<br>
                     - Архитектор системы<br>
                     - Блокчейн программисты (команда из 5-7 
                  </div>
                  <div class="namber-text">
                     4%
                  </div>
               </div>
               <div id="m17" class="container" style="padding-top: 120px;">
                  <span>17.	КОМАНДА</span>
                  <div class="row">
                     &lt;
                     <div class="column hd-3">
                        <div class="section8-team__box">
                           <div class="section8-team__image"><img src="img/pic-team2.png" alt=""></div>
                           <div class="section8-team__person">
                              <span class="name">Роман</span>
                              <span class="second-name">Горгун</span>
                              <span class="position">IOS Developer копия</span>
                           </div>
                        </div>
                     </div>
                     <div class="column hd-3">
                        <div class="section8-team__box">
                           <div class="section8-team__image"><img src="img/pic-team.png" alt=""></div>
                           <div class="section8-team__person">
                              <span class="name">Александр</span>
                              <span class="second-name">Климов</span>
                              <span class="position">Android Developer</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="column hd-3">
                        <div class="section8-team__box">
                           <div class="section8-team__image"><img src="img/pic-team2.png" alt=""></div>
                           <div class="section8-team__person">
                              <span class="name">Роман</span>
                              <span class="second-name">Горгун</span>
                              <span class="position">IOS Developer копия</span>
                           </div>
                        </div>
                     </div>
                     <div class="column hd-3">
                        <div class="section8-team__box">
                           <div class="section8-team__image"><img src="img/pic-team.png" alt=""></div>
                           <div class="section8-team__person">
                              <span class="name">Александр</span>
                              <span class="second-name">Климов</span>
                              <span class="position">Android Developer</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>--
            <span>ЗАКЛЮЧЕНИЕ</span>--
            <p style="margin-bottom: 85px;">
               Мы искренне хотим, чтобы у людей появилось место, где они могут открыться без страха порицания и стеснения перед обществом. В таком месте каждый может найти ответы на свои вопросы и самое главное Себя. 
               Аноним - будь Собой!
            </p>
            <span style="padding-top: 78px;line-height: 1.1;">Ну что <br>Ты с нами?</span>-->
            <div class="border-bottom-paper"></div>
         </div>
      </div>
      <div id="m99" data-id="m9" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-10_0', $lang_id, 'text', '9. АНОНИМНАЯ МОДЕЛЬ МОНЕТИЗАЦИИ') ?></span>
			<?= BlockText::_('whitepaper-10_1', $lang_id, 'html', '<p>
         		Сеть Аноним была создана на общественных началах и не является
коммерческим проектом. Это полностью авторская идея.
Именно поэтому в приложении нет рекламы. Это фундаментальный принцип
сети Аноним.
         	</p>
         	<p>
         		Сеть Аноним была создана на общественных началах и не является
коммерческим проектом. Это полностью авторская идея.
Именно поэтому в приложении нет рекламы. Это фундаментальный принцип
сети Аноним.
         	</p>
         	<p>
         		На сегодняшний день реализована платная система подписок, которая
позволяет пользователям получить доступ к полному функционалу сети
Аноним (к закрытым разделам, к приватным функциям, приватным чатканалам, режиму невидимка и т. д.). Комиссия с приобретенных инвайтов и
других цифровых активов на внутренней бирже сети Аноним через бэкеров
составляет около 2%. Кроме того, сеть Аноним планирует обеспечивать
развитие приватных локальных сообществ и способствовать взаимодействию
между пользователями посредством поощрения качественно созданного
контента. Для этой цели было придумано вознаграждение токенами.
         	</p>') ?>
         </div>
     </div>
     <div id="m101" data-id="m10" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-11_0', $lang_id, 'text', '10. ТОКЕН АНОНИМ') ?></span>
			<?= BlockText::_('whitepaper-11_1', $lang_id, 'html', '<p>
         		Токен - это символьный идентификатор.<br>
         		<strong>
         			Токен Anonym выпущен на платформе Ethereum.<br>
Стандарт - ERC20
         		</strong>
         		Эмиссия токенов ограниченна, единоразовая.
Токены, которые не будут проданы вовремя OTS, будут сожжены.
         	</p>
         	<p>
         		Вид токена - <strong>Appcoin</strong> — наиболее удачный и пока что успешный способ привязки
токена блокчейн-проекта, в котором токен или монета проекта используется во
внутренней (circular) экономике. Держатели токена получают прибыль за счет
роста цены токена благодаря фиксированной эмиссии и растущему количеству
пользователей и, следовательно, спросу на монеты
         	</p>
         	<p>
         		Токен сети Аноним позволяет пользователям совершать обменные действия
внутри приложения, получать в обмен цифровые товары и услуги.
Пользователи сети Аноним могут получать токены за полезные совершенные
действия. Например, за создание и публикацию контента, а также за
модерацию постов и администрирование каналов и групп в сети Аноним.
         	</p>') ?>
         	<div class="img-paper">
               <img src="/img/ds2.png">
            </div>
            <span><?= BlockText::_('whitepaper-11_2', $lang_id, 'text', 'ВОЗНАГРАЖДЕНИЕ<br>УЧАСТНИКОВ СЕТИ АНОНИМ') ?></span>
			<?= BlockText::_('whitepaper-11_3', $lang_id, 'html', '<p>
         		Схема вознаграждения токенами пользователя за создание
и публикацию контента
         	</p>') ?>
         	<div class="img-paper">
               <img src="/img/gh3.png">
            </div>
            <span><?= BlockText::_('whitepaper-11_4', $lang_id, 'text', 'СХЕМА РАБОТЫ БИРЖИ ИНВАЙТОВ') ?></span>
         	<div class="img-paper">
               <img src="/img/gh4.png">
            </div>
			<?= BlockText::_('whitepaper-11_5', $lang_id, 'html', '<p>
         		- Инвайт могут сгенерировать только держатели токенов, с объемом более
1000 токенов и выставить на обмен на внутренней бирже сети Аноним.
         	</p>
         	<p>
         		-Инвайты выставляются на внутренней биржи сети Аноним в соответствии с
выделенной квотой на количество пользователей в определенный
временной промежуток (квота определяется прогнозом на потенциальное
кол-во пользователей в сравнении с прошедшим периодом).
         	</p>
         	<p>
         		-Токены можно выставить на продажу по рыночной стоимости на внутренней
бирже сети Аноним для других пользователей.
         	</p>
         	<p>
         		- Мы предоставляем инвайты всем, кто вкладывается в проект в дополнение к
токенам, которые они получают.
         	</p>') ?>
         </div>
     </div>
     <div id="m112" data-id="m11" class="content-width">
         <div class="menu-block-paper">
         	
         </div>
     </div>
     <div id="m123" data-id="m12" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-13_0', $lang_id, 'text', 'ЧТО ПОЛУЧАЮТ ВЛАДЕЛЬЦЫ ТОКЕНОВ?') ?></span>
			<?= BlockText::_('whitepaper-13_1', $lang_id, 'html', '<p>
            	- Держатели токенов имеют 50% скидку на весь цифровой контент сети
Аноним.
            </p>
            <p>
            	- Токены сети Аноним торгуются на бирже криптовалюты.
            </p>
            <p>
            	- Команда обязуется использовать 30% чистой прибыли на выкуп токенов <strong>X 2
от рыночной стоимости,</strong> для поддержания рыночной стоимости токена
Anonym.
            </p>') ?>
            
            <span><?= BlockText::_('whitepaper-13_2', $lang_id, 'text', 'ОСОБЫЕ ВОЗМОЖНОСТИ ДЛЯ ДЕРЖАТЕЛЕЙ БОЛЕЕ 1000 ТОКЕНОВ') ?></span>
			<?= BlockText::_('whitepaper-13_3', $lang_id, 'html', '<p>
            	-Держатели токенов (с объемом >= 1000 токенов) могут создавать инвайты
пропорционально количеству имеющихся токенов, токены при этом не
сгорают, остаются в полном объеме у держателя токенов. Инвайты можно
обменять на другие цифровые активы или фиат на внутренней бирже
инвайтов сети Аноним<strong>
	(стоимость инвайта на внутренней бирже = от 20-
50 USD (цена может варьироваться), 1 инвайт = 100 Anm))
*Механика получения работы инвайтов описана в разделе схема
работы биржи инвайтов.
</strong>
            </p>') ?>
            
            <span><?= BlockText::_('whitepaper-13_4', $lang_id, 'text', 'НАГЛЯДНАЯ ВЫГОДА ДЛЯ ДЕРЖАТЕЛЕЙ ТОКЕНОВ:') ?></span>
			<?= BlockText::_('whitepaper-13_5', $lang_id, 'html', '<p>
		         		Пример:
		         	</p>
		         	<p>
		         		Вы приобрели 1000 Anonуm ( аббревиатура - Anm)<br>
		по курсу 1 Anm = 0,8$<br>
		Итого: вы приобрели 1000 Anm на сумму 800 $
		         	</p>
		         	<p>
		         		Система генерирует бонусные инвайты только с объемом >= 1000 Anm у
		держателя токенов.
		         	</p>
		         	<p>
		         		Соотношение стоимости инвайта к токену<br>
		1 инвайт = 100 токенов<br>
		Таким образом:<br>
		1000 Anm сгенерируют 10 инвайтов<br>
		1000 Anm = 10 инвайт<br>
		1 инвайт = от 20$ до 50$ по курсу на внутренней бирже
		         	</p>
		         	<p>
		         		Выгода:<br>
		10 инвайтов = от 200$ до 500$ ежемесячно (токены при этом не сгорают они
		идут в дополнение к токенам. Инвайты генерируются только раз в месяц).
		         	</p>') ?>
         </div>
     </div>
     <div id="m134" data-id="m13" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-14_0', $lang_id, 'text', 'ПЕРВООЧЕРЕДНЫЕ ЭТАПЫ РАЗВИТИЯ') ?></span>
         	<div class="img-paper">
               <img src="/img/gh5.png">
            </div>
			<?= BlockText::_('whitepaper-14_1', $lang_id, 'html', '<p>
            	Реализацию запланированных функций, можно отслеживать по мере выпуска
обновлений сети Аноним.
            </p>') ?>
            
            <div class="img-paper">
               <img src="/img/gh6.png">
            </div>
         </div>
     </div>
     <div id="m145" data-id="m14" class="content-width">
         <div class="menu-block-paper">
         	<div class="img-paper">
               <img src="/img/gh7.png">
            </div>
         </div>
     </div>
     <div id="m156" data-id="m15" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-16_0', $lang_id, 'text', 'ИНВЕСТИЦИИ pre-OPEN TOKEN SALE') ?>
            	 <br>
            	<small style="font-size: 16px;"><?= BlockText::_('whitepaper-16_1', $lang_id, 'text', '(15.10.17 - 10.11.17)') ?></small>
            </span>
             <div class="img-paper">
               <img src="/img/gh8.png">
            </div>
            <span><?= BlockText::_('whitepaper-16_2', $lang_id, 'text', 'ИНВЕСТИЦИИ pre-OPEN TOKEN SALE') ?>
            	 <br>
            	<small style="font-size: 16px;"><?= BlockText::_('whitepaper-16_3', $lang_id, 'text', '(25.11.17 - 25.12.17)') ?></small>
            </span>
             <div class="img-paper">
               <img src="/img/gh9.png">
            </div>
         </div>
     </div>
     <div id="m167" data-id="m16" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-17_0', $lang_id, 'text', 'ГАРАНТИИ СОХРАННОСТИ ПРИВЛЕЧЕННЫХ СРЕДСТВ') ?></span>
			<?= BlockText::_('whitepaper-17_1', $lang_id, 'html', '<p>
	- Международный эскроу, кошелек с цифровыми активами будет открываться
только при наличии одновременно трёх подписей из четырёх, две из которых
принадлежат юристам.
</p>
<p>
	- Ответственность юридического лица за целевое использование фондов.
</p>
<p>
	- Проведение транзакций по расходам через блокчейн
</p>
<p>
	- Ежемесячная публичная отчетность о доходах и расходах.
</p>') ?>
         </div>
     </div>
     <div id="m178" data-id="m17" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-18_0', $lang_id, 'text', 'ЮРИДИЧЕСКИЕ ОСОБЕННОСТИ') ?></span>
			<?= BlockText::_('whitepaper-18_1', $lang_id, 'html', '<p>
	Покупатели токенов не являются инвесторам, а токен инвестицией.
</p>
<p>
	Anonym -токен — application (utility) token.
</p>
<p>
	Покупка токена — это покупка цифрового актива на доступ к программному
обеспечению и данным.
</p>
<p>
	Продажа токенов будет происходить на основании оферты.
</p>
<p>
	Владельцы токенов не будут иметь ограничений на перепродажу токенов
другим
лицам.
</p>
<p>
	С целью соблюдения требований AML (Anti-money laundering) будет
проводиться
процедура KYC (know your client).
</p>
<p>
	Токен не является ценной бумагой/инвестицией согласно Howey Test: <br>
- Токен приобретается за деньги или их аналог. <br>
- Организаторы токенсейла являются группой лиц, объединенных в одно
предприятие.
</p>
<p>
	Токен не удовлетворяет третьему пункту Howey Test (With a reasonable
expectation of profits derived solely or predominantly from the efforts of others),
поскольку:
Не происходит и не планируется выплата дивидендов держателям токенов.
</p>
<p>
	Токен не является облигацией, эмитетнт не выплачивает держателям токена
регулярные % по займу.
</p>
<p>
	Чтобы извлечь прибыль из владения токеном, необходимо приложить усилия:
воспользоваться программным обеспечением, совершить сделки внутри
сети.
</p>
<p>
	Благодаря такому юридическому статусу, токен можно легально купить и
продать как за крипто-активы, так и за фиатные деньги, в том числе
гражданам США и Китая.
</p>') ?>
         </div>
     </div>
     <div id="m189" data-id="m18" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-19_0', $lang_id, 'text', 'КОМАНДА СЕТИ АНОНИМ') ?></span>
			<?= BlockText::_('whitepaper-19_1', $lang_id, 'html', '<p>
	<strong>Че Стас -</strong>
	 Автор проекта, Архитектор Анонима
реализация проектов совместно со СберТех, Роцид, ИРИ (kiberбезопасность)
team leader собственной команды APP разработки с 2013 года. Выпускник
МШУ Сколково, направление «стартап Академия»
</p>
<p>
	<strong>Джонатан (псевдоним) - </strong>
	  Стратегический партнер, известный IT
предприниматель основатель известного анонимного стартапа - мессенджер,
предпочел остаться Анонимным, в случае успеха инвест компании сети
Аноним, выступит с публичным обращением к пользователям и инвесторам
сети Аноним
</p>
<p>
	<strong>Илья Захаров -</strong>
	 Технический руководитель senior backend developer,
разработчик софт в области информационной безопасности и шифрования
</p>
<p>
	<strong>Антон Козлов -</strong>
	 Основатель digital агенства Black Sun, сооснователь fofresh,
куч по программе стартап академия МШУ Сколково, консультант по
маркетингу
</p>
<p>
	<strong>Татьяна Яковлева - </strong>
	 Основатель Московской школы PR, руководитель PR
службы компании ostrovok.ru, carprice.ru, консультант по международной PR
стратегии
</p>
<p>
	<strong>Ашот Габрелянов - </strong>
	 Экс директор Life news, ментор, консультант по контент
стратегии работа с специализированными СМИ
</p>
<p>Команда разработчиков:</p>
<p>
	<strong>Алексей Ковалев -</strong>manager team
</p>
<p>
	<strong>Алексей Ковалев -</strong>backend developer
</p>
<p>
	<strong>Роман Горгун -</strong>IOS developer
</p>
<p>
	<strong>Александр Климов -</strong>android developer
</p>
<p>
	<strong>Александр Шестаков -</strong>system admin
</p>
<p>
	<strong>Юлия Приходько -</strong> senior designer
</p>
<p>
	<strong>Константин Куксин -</strong>frontend developer
</p>') ?>
         </div>
     </div>
      <div id="m190" data-id="m19" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-20_0', $lang_id, 'text', 'СООБЩЕСТВО АНОНИМ') ?></span>
			<?= BlockText::_('whitepaper-20_1', $lang_id, 'html', '<p>
				Более 70 участников волонтерского движения насчитывает сеть Аноним на
			сегодняшний день.
			</p>
			<p>
				Каждый день поступают предложения о помощи проекту. Пользователи хотят
			стать причастными к делу, стать основой команды сети Аноним. Сегодня в
			волонтерском движении пользователи из 14 стран. Если ты готов
			присоединиться к нашему сообществу и попытаться изменить не только себя,
			но и мир во круг, то мы с радостью тебя ждем.
			</p>
			<p>
				Только вместе, объединенные одним смыслом и целью, мы сможем создавать
			великие дела.
			</p>') ?>
         </div>
     </div>
     <div id="m191" data-id="m20" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-21_0', $lang_id, 'text', 'ССЫЛКИ НА СКАЧИВАНИЕ') ?></span>
         	<p>
         		<strong><?= BlockText::_('whitepaper-21_1', $lang_id, 'text', 'Google Play:') ?></strong>
         	</p>
         	<p>
         		<a href="https://play.google.com/store/apps/details?id=com.appache.anonimka">
         			<?= BlockText::_('whitepaper-21_2', $lang_id, 'text', 'Скачать') ?>
         		</a>
         	</p>
         	<p>
         		<strong><?= BlockText::_('whitepaper-21_3', $lang_id, 'text', 'App Store:') ?></strong>
         	</p>
         	<p>
         		<a href="https://itunes.apple.com/us/app/%D0%B0%D0%BD%D0%BE%D0%BD%">
         			<?= BlockText::_('whitepaper-21_4', $lang_id, 'text', 'Скачать') ?>
         		</a>
         	</p>
         </div>
     </div>
     <div id="m192" data-id="m21" class="content-width">
         <div class="menu-block-paper">
         	<span><?= BlockText::_('whitepaper-22_0', $lang_id, 'text', 'ЗАКЛЮЧЕНИЕ') ?></span>
			<?= BlockText::_('whitepaper-22_1', $lang_id, 'html', '<p>
				Мы искренне хотим, чтобы у людей появилось место, где они могут открыться
			без страха перед обществом, без стеснения общепринятыми рамками.
			</p>
			<p>
				В таком месте каждый сможет найти ответы на свои вопросы и самое
			главное — вновь обрести Себя.
			</p>
			<p>
				Аноним - будь Собой!
			</p>
			<p style="font-size: 30px; margin-bottom: 55px;">
				Ну что… Ты с нами?
			</p>') ?>
         </div>
     </div>
   </section>
</div>

<script>
	$(document).ready(function(){
		$('.scrollto').click(function(){
			$('.menu-button').removeClass('active-menu');
			$(this).parents('.menu-button').addClass('active-menu');
		});
	});

	window.onscroll = function() {
	  var scrolled = window.pageYOffset || document.documentElement.scrollTop;
	  $('.content-width').each(function(i,el){
		   if ((Number($(this).offset().top)-Number(scrolled))<65 && (Number($(this).offset().top)-Number(scrolled))>0){
			var id = $(this).data('id');
			if ($('#'+id)){
				$('.menu-button').removeClass('active-menu');
				$('#'+id).addClass('active-menu');
			}
		   }
	  });

	}
</script>

<div class="fadeScreen"></div>
<div class="popup-box">
	<h1>Title</h1>
	<i class="fa fa-close popup-close"></i>
</div>

<script type="text/javascript">
	function openbox(id) {
		display = document.getElementById(id).style.display;

		if (display == 'none') {
			document.getElementById(id).style.display = 'block';
		} else {
			document.getElementById(id).style.display = 'none';
		}
	}
	$("#bbt").click(function () {
		$("#bbt").toggleClass("activ-burg");
	});
</script>

<!-- Scripts END -->
<?php if(Yii::$app->user->can('adminPanel')):?>
	<?php Modal::begin([
		'id' => 'modal_edit',
		'size' => 'modal-lg',
	]); ?>
	<div class="modal-body-content"></div>
	<?php Modal::end(); ?>
<?php endif; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>