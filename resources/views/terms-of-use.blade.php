@extends('layout')

@if($lang_session == 'ru')
    @section('title', 'FELICITA - Пользовательское соглашение')
    @section('keywords', 'пользовательское соглашение')
    @section('description', 'FELICITA - Пользовательское соглашение.')
@else
    @section('title', 'FELICITA - Угода з користувачем')
    @section('keywords', 'угода з користувачем')
    @section('description', 'FELICITA - Угода з користувачем.')
@endif
@section('img', './img/logo-og.png')
@section('robots', 'noindex')






@section('content')


<div class="page-container">
    <section id="agreement">
        @if ($lang_session == 'ru')
        <h1>Пользовательское соглашение</h1>
        Настоящим соглашением (далее - Соглашение) регулируются отношения по принятию заказов, реализации продукции и обеспечение его доставки.
        <br><br>
        Соглашение является публичным электронным договором и заключается на неопределенный срок.
        <br><br>
        FELICITA осуществляет свою деятельность в пределах, определенных на Сервисе.
        <br><br>
        Целью деятельности Сервиса FELICITA является предоставление услуг по принятию заказов, реализации продукции, организации его доставки к пользователю с помощью Сервиса, а также оплаты заказа от имени и за счет пользователя.
        <ul>
            <li>
                <h2>1. Определение понятий</h2>
                <b>Продукция</b> -продукция общественного питания и доставляется пользователю Службой Доставки на условиях, определенных настоящим Соглашением.
                <br><br>
                <b>Служба доставки</b> - специалисты по доставке или субъекты хозяйствования, которые осуществляют доставку Заказ Пользователю.
                <br><br>
                <b>Сервис</b> - платформа, расположенная по адресу https://felicita.kitchen в сети Интернет, которая предоставляет пользователям широкие возможности осуществить быстрый и простой поиск, заказ и доставку продукции в режиме реального времени с помощью сети Интернет.
                <br><br>
                <b>Пользователь</b> - физическое лицо, имеет полную гражданскую правоспособность и дееспособность.
                <br><br>
                <b>Доставка</b> - услуга доставки Продукции Службой доставки, заказ которой был осуществлен пользователем с использованием Сервиса.
                <br><br>
                <b>Заказ</b> - заказ пользователем Продукции и Доставки, совершенное с использованием Сервиса.
                <br><br>
                <b>Промокод</b> - последовательность символов, активация которой при заказе продукции предоставляет Пользователю скидку на Продукцию.
            </li>
            <li>
                <h2>2. Порядок заказа Продукции</h2>
                Условия Заказа, стоимости Продукции и ее Доставки содержатся на Сервисе.
                <br><br>
                Пользователь обязан при осуществлении Заказа предоставить Сервиса достоверную информацию относительно адреса доставки, номера телефона, количества Продукции.
                <br><br>
                В случае, если Пользователь имеет аллергию на любые ингредиенты, он обязан сообщить об этом Сервис не позднее, чем через 10 минут после совершения Заказа.
                <br><br>
                Заказ осуществляется лично Пользователем на Сервисе.
                <br><br>
                Подтверждение Заказа происходит с помощью телефонной связи. Разговор с пользователем может быть записан.
                <br><br>
                Пользователь осознает, что изображение Продукции на Сервисе имеет художественное оформление, а потому может отличаться от реального вида Продукции.
            </li>
            <li>
                <h2>3. Срок выполнения Заказа</h2>
                Информация о сроке выполнения Заказа пользователя, определенная на Сервисе, является ориентировочной и может не учитывать отдельные обстоятельства, в частности о пробках на дорогах, погодных условий, и тому подобное.
            </li>
            <li>
                <h2>4. Отмена Заказа</h2>
                Пользователь имеет право отменить заказ Продукции не позднее, чем через 10 минут после совершения Заказа на Сервисе.
                <br><br>
                В случае отмены Заказа Продукции Пользователем позже, чем в определенный срок, Пользователь обязан оплатить стоимость Продукции и услуги доставки. В таком случае, пользователю не возвращается стоимость Продукции и Доставки.
            </li>
            <li>
                <h2>5. Получение Заказа</h2>
                Пользователь обязан находиться по указанному адресу доставки, а также обеспечить его принятие и оплату.
                <br><br>
                Заказ Продукции считается исполненным с момента ее передачи Службой доставки пользователю или его представителю.
                <br><br>
                Служба доставки обязана выдать пользователю вместе с Заказом квитанцию, товарный или кассовый чек или другой документ о стоимости Продукции.
                <br><br>
                В случае отсутствия пользователя по адресу доставки дольше, чем 10 минут с момента прибытия Службы доставки, невозможности вручения Продукции Пользователю по его вине, отказа пользователя от Продукции (за исключением отказа от Продукции ненадлежащего качества в порядке, определенном Соглашением), Пользователь обязан уплатить стоимость Продукции и услуг Доставки. В таком случае, пользователю не поворачивается оплачена стоимость продукции и услуг Доставки.
                <br><br>
                Если Пользователь считает, что доставлена Продукция является ненадлежащего качества или не соответствует количеству и составу заказанной на Сервисе продукции, он обязан немедленно после принятия Продукции направить жалобу и фотографии и / или видеозапись доставленной Продукции к FELICITA путем передачи ее по электронной почте указанной на сайте https://felicita.kitchen или посредством телефонной связи.
                <br><br>
                В случае удовлетворения FELICITA жалобы пользователя, возврат средств осуществляется в форме, которой производилась оплата, в течение 10 банковских дней, если иное не предусмотрено договоренностью между FELICITA и Пользователем.
                <br><br>
                FELICITA вправе отказать Пользователю, который предварительно отказывался и / или отменял Заказ в исполнении Заказ, если выбран способ оплаты «при получении заказанной Продукции».
            </li>
            <li>
                <h2>6. Оплата</h2>
                Стоимость Продукции и Доставки определяется на Сервисе. Стоимость включает все налоги.
                <br><br>
                FELICITA имеет право изменять стоимость Продукции и Доставки в одностороннем порядке. FELICITA не имеет права изменять стоимость Продукции и Доставки на Заказы, которые были приняты к исполнению, кроме случаев если Сервисе допущено очевидную ошибку относительно стоимости Продукции.
                <br><br>
                Способы оплаты за Продукцию и доставку:
                <br>- Безналичный расчет банковской картой Visa, MasterCard при осуществлении Заказа.
                <br>- Наличный расчет или безналичный с помощью POS-терминала при получении заказанной Продукции.
                <br><br>
                Пользователь осуществляет оплату за Продукцию и доставку Заказ на счет FELICITA.
            </li>
            <li>
                <h2>7. Политика возврата и возмещения стоимости товаров</h2>
                Согласно статье 9 Закона Украины "О защите прав потребителей" предусмотрено право потребителя обменять непродовольственных товар надлежащего качества на аналогичный, если купленный товар не подошел по форме, габаритам, фасону, цвету размеру или по другим причинам не может быть использован по назначению.
                <br><br>
                В случае несоответствия качества или состояния продукции на момент доставки сервис FELICITA обязуется возмещать убытки пользователя в 100% размере или полностью бесплатную замену продукции на соответствующую условиям сделки в течение 24 часов с момента получения обращения пользователя. Для этого пользователь должен обратиться в течение 6 часов после осуществления доставки по телефону +380934404001 или отправить электронное письмо по адресу: felicita.kitchen.ua@gmail.com с просьбой возмещения убытков или замену некачественной продукции. Сервис FELICITA берет на себя ответственность полностью бесплатную замену товара или возврат средств в 100% объеме за поврежденную или не надлежащего качества продукцию.
                <br><br>
                В соответствии с Постановлением Кабинета Министров Украины от 19 марта 1994 № 172 «О реализации отдельных положений Закона Украины" О защите прав потребителей ", продовольственные товары надлежащего качества утверждены в перечень не подлежащих обмену (возврату).
                <br><br>
                Проверив товар на качество в присутствии специалиста службы доставки при осуществлении доставки или самовывоза товара пользователь дает согласие на получение заказа пользователем в надлежащем состоянии.
            </li>
            <li>
                <h2>8. Ответственность сторон</h2>
                Пользователь соглашается, что FELICITA не несет ответственности за:
                <br>- достоверность предоставленной Пользователем, в частности относительно адреса доставки;
                <br>- препятствия и задержки в деятельности операторов услуг платежной инфраструктуры;
                <br>- сохранение информации на Сервисе, предоставляемой и / или используется пользователями;
                <br>- скорость работы и / или любые другие сбои в функционировании Сервиса;
                <br>- любые убытки, вызванные деятельностью Сервиса.
                <br><br>
                FELICITA несет ответственность перед Пользователем в пределах стоимости заказанной Продукции и ее Доставки.
                <br><br>
                Пользователь обязуется возместить убытки, понесенные FELICITA и / или Службой доставки в связи с реализацией и доставкой продукции с использованием информации недостоверно предоставленной Пользователем.
            </li>
            <li>
                <h2>9. Использование промокодов</h2>
                Промокод не является платежным средством.
                <br><br>
                Пользователь имеет право использовать промокод только при условии оплаты при осуществлении Заказа.
                <br><br>
                Каждый промокод ограничен сроком действия. FELICITA без согласования и уведомления Пользователя имеет право изменить срок действия промокод.
                <br><br>
                Пользователь обязан самостоятельно запрашивать информацию о сроке действия промокод на Сервисе.
                <br><br>
                Промокод не может быть использован для оплаты Доставки продукции, если иное не установлено в рекламном объявлении FELICITA и / или на Сервисе.
                <br><br>
                Промокод не может быть использован пользователем, который предварительно отказывался и / или отменял Заказ.
                <br><br>
                В случае выявления признаков действий пользователя и / или других лиц по обогащению на промокод, FELICITA имеет право аннулировать действие промокод.
            </li>
            <li>
                <h2>10. Внесение изменений</h2>
                Соглашение может быть изменено и / или дополнено FELICITA в одностороннем порядке. Новая редакция Соглашения вступает в силу с момента его публикации на веб-странице https://felicita.kitchen , если иное не установлено новой редакцией Соглашения.
                <br><br>
                Продолжение использования Сервиса Пользователем после изменения и / или дополнения Соглашения считается принятием новой редакции Соглашения.
                <br><br>
                В случае несогласия с новой редакцией Соглашения, Пользователь обязан немедленно прекратить использование Сервиса.
            </li>
            <li>
                <h2>11. Заключительные положения</h2>
                Все правоотношения, возникающие в связи с выполнением условий Соглашения, регламентируются нормами действующего законодательства Украины.
                <br><br>
                Стороны обязуются приложить все усилия для того, чтобы спорные вопросы по выполнению или толкованию Соглашения решались путем переговоров.
                <br><br>
                Все споры, возникающие из Соглашения, рассматриваются судами Украины.
            </li>
        </ul>
        @else

        <h1>Угода з користувачем</h1>
        Цією Угодою з користувачем (надалі - Угода) регулюються відносини щодо прийняття замовлень, реалізації продукції та забезпечення її доставки.
        <br><br>
        Угода є публічним електронним договором і укладається на невизначений строк.
        <br><br>
        FELICITA здійснює свою діяльність в межах, визначених на Сервісі.
        <br><br>
        Метою діяльності Сервісу FELICITA є надання від імені партнерів послуг щодо прийняття замовлень, реалізації продукції, організації її доставки до користувача за допомогою Сервісу, а також оплати замовлення від імені та за рахунок користувача.
        <ul>
            <li>
                <h2>1. Визначення понять</h2>
                <b>Продукція</b> - продукція громадського харчування та доставляється користувачеві Службою Доставки на умовах, визначених цією Угодою.
                <br><br>
                <b>Служба доставки</b> - фахівці з доставки або суб'єкти господарювання, які здійснюють доставку Замовлення Користувачеві.
                <br><br>
                <b>Сервіс</b> - платформа, що розташована за адресою https://felicita.kitchen в мережі Інтернет, яка надає користувачам широкі можливості здійснити швидкий і простий пошук, замовлення і доставку продукції в режимі реального часу за допомогою мережі Інтернет.
                <br><br>
                <b>Користувач</b> - фізична особа, має повну цивільну правоздатність та дієздатність.
                <br><br>
                <b>Доставка</b> - послуга доставки Продукції Службою доставки, замовлення якої здійснене Користувачем із використанням Сервісу.
                <br><br>
                <b>Замовлення</b> - замовлення Користувачем Продукції та Доставки, здійснене із використанням Сервісу.
                <br><br>
                <b>Промокод</b> - послідовність символів, активація якої при Замовленні Продукції надає Користувачу знижку на Продукцію.
            </li>
            <li>
                <h2>2. Порядок замовлення Продукції </h2>
                Істотні умови Замовлення, вартості Продукції та її Доставки містяться на Сервісі.
                <br><br>
                Користувач зобов'язаний при здійсненні Замовлення надати Сервісу достовірну інформацію щодо адреси доставки, номери телефону, кількості Продукції.
                <br><br>
                У випадку, якщо Користувач має алергію на будь-які інгредієнти, він зобов’язаний повідомити про це Сервіс не пізніше, ніж через 10 хвилин після здійснення Замовлення.
                <br><br>
                Замовлення здійснюється особисто Користувачем на Сервісі.
                <br><br>
                Підтвердження Замовлення відбувається за допомогою телефонного зв'язку. Розмова з користувачем може бути записаний.
                <br><br>
                Користувач усвідомлює, що зображення Продукції на Сервісі має художнє оформлення, а тому може відрізнятися від реального вигляду Продукції.
            </li>
            <li>
                <h2>3. Строк виконання замовлення</h2>
                Інформація щодо строку виконання Замовлення Користувача, визначена на Сервісі, є орієнтовною та може не враховувати окремі обставини, зокрема щодо заторів на автошляхах, погодних умов, тощо.
            </li>
            <li>
                <h2>4. Скасування Замовлення</h2>
                Користувач має право скасувати Замовлення Продукції не пізніше, ніж через 10 хвилин після здійснення Замовлення на Сервісі.
                <br><br>
                У випадку скасування Замовлення Продукції Користувачем пізніше, ніж у визначений строк, Користувач зобов’язаний сплатити вартість Продукції та послугу Доставки. В такому випадку, Користувачу не повертається вартість Продукції та Доставки.
            </li>
            <li>
                <h2>5. Отримання Замовлення</h2>
                Користувач зобов’язаний знаходитись за вказаною адресою доставки, а також забезпечити її прийняття та оплату.
                <br><br>
                Замовлення Продукції вважається виконаним з моменту її передачі Службою доставки Користувачу або його представнику.
                <br><br>
                Служба доставки зобов’язана видати Користувачу разом із Замовленням квитанцію, товарний чи касовий чек або інший документ щодо вартості Продукції.
                <br><br>
                У випадку відсутності Користувача за адресою доставки довше, ніж 10 хвилин з моменту прибуття Служби доставки, неможливості вручення Продукції Користувачу з його вини, відмови Користувача від Продукції (за винятком відмови від Продукції неналежної якості у порядку, визначеному Угодою), Користувач зобов’язаний сплатити вартість Продукції та послуг Доставки. В такому випадку, Користувачу не повертається оплачена вартість Продукції та послугу Доставки.
                <br><br>
                Якщо Користувач вважає, що доставлена ​​Продукція є неналежної якості або не відповідає кількості і складу замовленої в межах Сервісу продукції, він зобов'язаний негайно після прийняття Продукції направити скаргу і фотографії і / або відеозапис доставленої Продукції до FELICITA шляхом передачі її по електронній пошті зазначеної на сайті https: //felicita.kitchen або за допомогою телефонного зв'язку.
                <br><br>
                У разі задоволення FELICITA скарги користувача, повернення коштів здійснюється в формі, якої здійснювалась оплата, протягом 10 банківських днів, якщо інше не передбачено домовленістю між FELICITA і Користувачем.
                <br><br>
                FELICITA має право відмовити Користувачу, котрий попередньо відмовлявся та/або скасовував Замовлення, у виконанні Замовлення, якщо обрано спосіб оплати «під час отримання замовленої Продукції».
            </li>
            <li>
                <h2>6. Оплата</h2>
                Вартість Продукції та Доставки визначається на Сервісі. Вартість включає усі податки.
                <br><br>
                FELICITA має право змінювати вартість Продукції і Доставки в односторонньому порядку. FELICITA не має права змінювати вартість Продукції і Доставки на Замовлення, які були прийняті до виконання, крім випадків якщо Сервісу допущено очевидну помилку щодо вартості Продукції.
                <br><br>
                Способи оплати за Продукцію та Доставку:
                <br>- Безготівковий розрахунок банківською карткою Visa, MasterCard під час здійснення Замовлення.
                <br>- Готівковий розрахунок або безготівковий за допомогою POS-терміналу під час отримання замовленої Продукції.
                <br><br>
                Користувач здійснює оплату за Продукцію та Доставку Замовлення на рахунок FELICITA.
            </li>
            <li>
                <h2>7. Політика повернення та відшкодування вартості товарів</h2>
                Згідно зі статтею 9 Закону України "Про захист прав споживачів" передбачено право споживача обміняти не продовольчий товар належної якості на аналогічний, якщо куплений товар не підійшов за формою, габаритами, фасоном, кольором розміром або з інших причин не може бути використаний за призначенням.
                <br><br>
                У разі не відповідності якості або стану продукції на момент доставлення сервіс FELICITA зобов’язується відшкодовувати збитки користувача у 100% розмірі або повністю безкоштовну заміну продукції на відповідну до умов угоди протягом 24 годин з моменту отримання звернення користувача. Для цього користувач має звернутися протягом 6 годин після здійснення доставлення за телефоном +380934404001 або надіслати електронне письмо на адресу: felicita.kitchen.ua@gmail.com з проханням відшкодування збитків або заміну неякісної продукції. Сервіс FELICITA бере на себе відповідальність повністю безкоштовну заміну товару або повернення коштів у 100% обсязі за пошкоджену або не належної якості продукцію.
                <br><br>
                Відповідно до Постанови Кабінету Міністрів України від 19 березня 1994 р. № 172 "Про реалізацію окремих положень Закону України "Про захист прав споживачів", продовольчі товари належної якості затверджено у перелік, що не підлягають обміну (поверненню).
                <br><br>
                Перевіривши товар на якість у присутності фахівця служби доставлення при здійсненні доставлення або самовивозу товару користувач дає згоду на отримання замовлення користувачем у належному стані.
            </li>
            <li>
                <h2>8. Відповідальність сторін</h2>
                Користувач погоджується, що FELICITA не несе відповідальність за:
                <br>- достовірність інформації, наданої Користувачем, зокрема щодо адреси доставки;
                <br>- перешкоди та затримки в діяльності операторів послуг платіжної інфраструктури;
                <br>- збереження інформації на Сервісі, що надавалася та/або використовується Користувачами;
                <br>- швидкість роботи та/або будь-які інші збої в функціонуванні Сервісу;
                <br>- будь-які збитки, що спричинені діяльністю Сервісу.
                <br><br>
                FELICITA несе відповідальність перед Користувачем в межах вартості замовленої Продукції та її Доставки.
                <br><br>
                Користувач зобов'язується відшкодувати збитки, понесені FELICITA і / або Службою доставки в зв'язку з реалізацією і доставкою продукції з використанням інформації недостовірно наданої Користувачем.
            </li>
            <li>
                <h2>9. Використання Промокодів</h2>
                Промокод не є платіжним засобом.
                <br><br>
                Користувач має право використати Промокод лише за умови оплати під час здійснення Замовлення.
                <br><br>
                Кожен Промокод обмежений строком дії. FELICITA без погодження та повідомлення Користувача має право змінити строк дії Промокоду.
                <br><br>
                Користувач зобов’язаний самостійно запитувати інформацію щодо строку дії Промокоду на Сервісі.
                <br><br>
                Промокод не може бути використаний для оплати Доставки Продукції, якщо інше не встановлено у рекламному оголошенні FELICITA та/або на Сервісі.
                <br><br>
                Промокод не може бути використаний Користувачем, котрий попередньо відмовлявся та/або скасовував Замовлення.
                <br><br>
                У випадку виявлення ознак дій Користувача та/або інших осіб щодо збагачення на Промокодах, FELICITA має право анулювати чинність Промокоду.
            </li>
            <li>
                <h2>10. Внесення змін</h2>
                Угода може бути змінена та/або доповнена FELICITA в односторонньому порядку. Нова редакція Угоди набуває чинності з моменту її публікації на веб-сторінці https://felicita.kitchen , якщо інше не встановлено новою редакцією Угоди.
                <br><br>
                Продовження використання Сервісу Користувачем після зміни та/або доповнення Угоди вважається прийняттям нової редакції Угоди.
                <br><br>
                У випадку незгоди із новою редакцією Угоди, Користувач зобов’язаний негайно припинити використання Сервісу.
            </li>
            <li>
                <h2>11. Заключні положення</h2>
                Усі правовідносини, що виникають у зв'язку з виконанням умов Угоди, регламентуються нормами чинного законодавства України.
                <br><br>
                Сторони зобов‘язуються прикласти всіх зусиль для того, щоб спірні питання по виконанню або тлумаченню Угоди вирішувалися шляхом переговорів.
                <br><br>
                Усі спори, які виникають з Угоди, розглядаються судами України.
            </li>
        </ul>
        @endif

    </section>
</div>








@endsection