<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ГОСТы и другая нормативная документация");
$APPLICATION->SetPageProperty("keywords", "Миртрубпласт, мир, Документация ГОСТ, полиэтиленовые трубы ГОСТ, пластиковые трубы ГОСТ, трубы для водоснабжения ГОСТ, трубы для газопровода ГОСТ, канализационные трубы ГОСТ.");
$APPLICATION->SetPageProperty("description", "Библиотек ГОСТов и ТУ. Объекты газового надзора. Строительные объекты, Нормативная документация, общая для всех объектов.");
$APPLICATION->SetTitle("ГОСТЫ");
?>

<div itemscope itemtype="https://schema.org/Article">
    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="<?=$arSite["NAME"]; ?>">
        <meta itemprop="telephone" content="8 800 555 28 29">
        <meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
        <link itemprop="url" href="<?=$APPLICATION->GetCurPage(); ?>" />
    </div>
    <h1 itemprop="name headline">ГОСТы и другая нормативная документация</h1>
    <h4 itemprop="description">Библиотек ГОСТов и ТУ. Объекты газового надзора. Строительные объекты, Нормативная документация, общая для всех объектов.</h4>
    <div itemprop="articleBody">
        <p><strong>Библиотека ГОСТов и ТУ</strong></p>
        <p>В данном разделе содержаться основные нормотивно-технические документы имеющие отношение к деятельности нашей Компании. Данные документы будут представлены в формате .DOC. Если Вы не можете найти здесь нужный документ, но хотите его включить в нашу библиотеку, пишите на <a href="mailto:<?=$arSite["EMAIL"]; ?>?subject=%D0%97%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0%20%D0%BD%D0%B0%20%D1%82%D1%80%D1%83%D0%B1%D1%8B%20%D0%B8%20%D1%84%D0%B8%D1%82%D0%B8%D0%BD%D0%B3%D0%B8" onclick="ym(25615220, 'reachGoal', 'email-sale'); return true;" title="E-mail - Отдел продаж" target="_blank" ><span itemprop="email"><?=$arSite["EMAIL"]; ?></span></a></p>
        <div class="production">
            <h2>Объекты газового надзора</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Номер</th>
                        <th>Название НТД</th>
                    </tr>
                    <tr>
                        <td>СНиП 42-01-2002</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/1-SNiP_42-01-2002.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Газораспределительные системы</a></td>
                    </tr>
                    <tr>
                        <td>СНиП 3.01.01-85*</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/2-SNiP_3_01_01-85.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Организация строительного производства</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ Р 50838-2009</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/gost_r_50838_2009.pdf" target="_blank"><i class="fa fa-file-pdf-o">&nbsp;</i>Трубы из полиэтилена для газопроводов. Технические условия</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 11262-80</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/4-gost_11262.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Пластмассы. Методы испытания на растяжение</a></td>
                    </tr>
                    <tr style="display: none;">
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>

            <h2>Строительные объекты</h2>

            <table class="table">
                <tbody>
                    <tr>
                        <th>Номер</th>
                        <th>Название НТД</th>
                    </tr>
                    <tr>
                        <td>СНиП 2.04.01-85*</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/5-SNiP_2_04_01-85_2000_.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Внутренний водопровод и канализация</a></td>
                    </tr>
                    <tr>
                        <td>СНиП 2.04.02-84</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/6-SNiP_2_04_02-84_s_izm_1986_popr_2000.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Водоснабжение. Наружные сети и сооружения</a></td>
                    </tr>
                    <tr>
                        <td>СНиП 2.04.05-91</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/7-SNiP_2_04_05-91_2000.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Отопление, вентиляция и кондиционирование</a></td>
                    </tr>
                    <tr>
                        <td>СНиП 2.04.07-86</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/8-SNiP_2_04_07-86_2000.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Тепловые сети</a></td>
                    </tr>
                    <tr>
                        <td>СНиП 3.05.04-85*</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/9-SNiP_3_05_04-85_1990.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Наружные сети и сооружения водоснабжения и канализации. М.2000</a></td>
                    </tr>
                    <tr>
                        <td>СНиП 3.05.05-84</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/10-SNiP_3_05_05-84.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Технологическое оборудование и технологические трубопроводы. М. 1998 г.</a></td>
                    </tr>
                    <tr>
                        <td>СНиП 3.05.03-85</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/11-SNiP_3-05-03-85.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Тепловые сети</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 52134-2003</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/12-gost_52134-2003.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы напорные из термопластов и соединительные детали к ним для систем водоснабжения и отопления</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ ИСО 161-1-2004</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/13-gost_161-1-2004.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы из термопластов для транспортирования жидких и газообразных сред</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 16971-71</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/14-gost_16971-71.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Швы сварных соединений из винипласта, поливинилхлоридного пластиката и полиэтилена</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 22689.0-89</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/15-gost_22689_0-89.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы полиэтиленовые канализационные и фасонные части к ним. Общие технические условия</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 22689.1-89</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/16-gost_22689_1-89.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы полиэтиленовые канализационные и фасонные части к ним. Сортамент</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 22689.2-89</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/17-gost_22689_2-89.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы полиэтиленовые канализационные и фасонные части к ним. Конструкция</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 24157-80</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/18-gost_24157-80.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы из пластмасс. Метод определения стойкости при постоянном внутреннем давлении</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 27077-86</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/19-gost_27077-86.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Детали соединительные из термопластов. Методы определения изменения внешнего вида после прогрева</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 27078-86</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/20-gost_27078-86.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы из термопластов. Методы определения изменения длины труб после прогрева</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 28117-89</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/21-gost_28117-89.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы из непластифицированного поливинилхлорида</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 29325-92</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/22-gost_29325-92.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы из пластмасс. Определение размеров</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ Р 50825-95</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/23-gost_50825-95.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы и детали соединительные из непластифицированного поливинилхлорида. Определение температуры размягчения по Вика</a></td>
                    </tr>
                    <tr>
                        <td>СП 41-109-2005</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/24-SP_41-109-2005.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Проектирование и монтаж внутренних систем водоснабжения и отопления зданий с использованием труб из "сшитого" полиэтилена</a></td>
                    </tr>
                    <tr>
                        <td>СП 41-107-2004</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/25-SP_41-107-2004.rtf" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Проектирование и монтаж подземных трубопроводов горячего водоснабжения из труб ПЭ-С в тепловой изоляции из пенополиуретана в полиэтиленовой оболочке</a></td>
                    </tr>
                    <tr>
                        <td>СП 41-103-2000</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/26-SP_41-103-2000.rtf" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Проектирование тепловой изоляции оборудования и трубопроводов</a></td>
                    </tr>
                    <tr>
                        <td>СП 40-107-2003</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/27-SP_40-107-2003.rtf" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Проектирование, монтаж и эксплуатация систем внутренней канализации из полипропиленовых труб</a></td>
                    </tr>
                    <tr>
                        <td>СП 40-103-98</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/28-SP_40-103-98.rtf" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Проектирование и монтаж трубопроводов систем холодного и горячего внутреннего водоснабжения с использованием металлополимерных труб</a></td>
                    </tr>
                    <tr>
                        <td>СП 40-102-2000</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/29-SP_40-102-2000.rtf" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Проектирование и монтаж трубопроводных систем водоснабжения и канализации из полимерных материалов</a></td>
                    </tr>
                    <tr>
                        <td>СП 40-101-96</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/30-SP_40-101-96.rtf" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Проектирование и монтаж трубопроводов из полипропилена «рандом-сополимер»</a></td>
                    </tr>
                    <tr>
                        <td>Постановление</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/31-Postanovlenie_pravit_RF.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Постановление Правительства Российской Федерации от 1 февраля 2006 г. N 54</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/32-Feder_sluzhba.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Федеральная служба по экологическому, технологическому и атомному надзору сообщает, что с 1 января 2007 г</a></td>
                    </tr>
                    <tr>
                        <td>РД-11-02-2006</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/33-rd11-02-2006.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>ТребованиÑ¿итальном ремонте объектов капитального строительства</a></td>
                    </tr>
                    <tr>
                        <td>РД-11-03-2006</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/35-rd11-03-2006.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Порядок формирования и ведения дел при осуществлении государственного строительного надзора</a></td>
                    </tr>
                    <tr>
                        <td>РД-11-04-2006</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/36-rd11-04-2006.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Порядок проведения проверок</a></td>
                    </tr>
                    <tr>
                        <td>ВСН 440-83</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/37-VCN20440-83.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Инструкция по монтажу технологических трубопроводов из пластмассовых труб</a></td>
                    </tr>
                    <tr>
                        <td>СН 550-82</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/38-SN_550-8220.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Инструкция по проектированию технологических трубопроводов из пластмассовых труб</a></td>
                    </tr>
                    <tr style="display: none;">
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>

            <h2>Нормативная документация, общая для всех объектов</h2>

            <table class="table">
                <tbody>
                    <tr>
                        <th>Номер</th>
                        <th>Название НТД</th>
                    </tr>
                    <tr>
                        <td>РД 03-613-03</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/39-Porydok_primeneniya_svar_materialov.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Порядок применения сварочных материалов при изготовлении, монтаже, ремонте и реконструкции технических устройств для опасных производственных объектов</a></td>
                    </tr>
                    <tr>
                        <td>РД 03-614-03</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/40-Porydok_primeneniya_svar_oborud.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Порядок применения сварочного оборудования при изготовлении, монтаже, ремонте и реконструкции технических устройств для опасных производственных объектов</a></td>
                    </tr>
                    <tr>
                        <td>РД 03-615-03</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/41-Porydok_primeneniya_svar_technologij.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Порядок применения сварочных технологий при изготовлении, монтаже, ремонте и реконструкции технических устройств для опасных производственных объектов</a></td>
                    </tr>
                    <tr>
                        <td>РД 03-606-03</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/42-Porydok_primeneniya_svar_oborud.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Инструкция по визуальному и измерительному контролю</a></td>
                    </tr>
                    <tr>
                        <td>РД 03-495-02</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/43-RD_03-495-02_tech_reglam.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Технологический регламент проведения аттестации сварщиков и специалистов сварочного производства</a></td>
                    </tr>
                    <tr>
                        <td>ПБ-03-273-99</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/44-PB-03-273-99.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Правила аттестации сварщиков и специалистов сварочного производства</a></td>
                    </tr>
                    <tr>
                        <td>ФЗ № 184-ФЗ</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/45-FZ_o_tech_regulirovanii.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>О техническом регулировании</a></td>
                    </tr>
                    <tr>
                        <td>ГОСТ 18599-2001</td>
                        <td style="width: 70%;"><a href="<?=SITE_TEMPLATE_PATH; ?>/images/snip/gost-18599-2001_trubnapor-iz-polietilena_TY.doc" target="_blank"><i class="fa fa-file-word-o">&nbsp;</i>Трубы напор.из полиэтилена ТУ</a></td>
                    </tr>
                    <tr style="display: none;">
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:menu","neighbours",Array(
            "ROOT_MENU_TYPE" => "neighbours", 
            "MAX_LEVEL" => "1", 
            "CHILD_MENU_TYPE" => "top", 
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "Y",
            "MENU_CACHE_TYPE" => "N", 
            "MENU_CACHE_TIME" => "3600", 
            "MENU_CACHE_USE_GROUPS" => "Y", 
            "MENU_CACHE_GET_VARS" => "" 
        )
    );?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>