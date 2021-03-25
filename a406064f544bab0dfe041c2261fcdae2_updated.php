<?php
if (file_exists('./bootstrap.php')) {
    require_once('./bootstrap.php');
} else {
    die('Please put this file in the home directory !');
}
function PT_UpdateLangs($lang, $key, $value) {
    global $conn;
    $update_query         = "UPDATE langs SET `{lang}` = '{lang_text}' WHERE `lang_key` = '{lang_key}'";
    $update_replace_array = array(
        "{lang}",
        "{lang_text}",
        "{lang_key}"
    );
    return str_replace($update_replace_array, array(
        $lang,
        mysqli_real_escape_string($conn, $value),
        $key
    ), $update_query);
}
$updated = false;
if (!empty($_GET['updated'])) {
    $updated = true;
}
if (!empty($_POST['query'])) {
    $query = mysqli_query($conn, base64_decode($_POST['query']));
    if ($query) {
        $data['status'] = 200;
    } else {
        $data['status'] = 400;
        $data['error']  = mysqli_error($conn);
    }
    header("Content-type: application/json");
    echo json_encode($data);
    exit();
}
if (!empty($_POST['update_langs'])) {
    $data  = array();
    $query = mysqli_query($conn, "SHOW COLUMNS FROM `langs`");
    while ($fetched_data = mysqli_fetch_assoc($query)) {
        $data[] = $fetched_data['Field'];
    }
    unset($data[0]);
    unset($data[1]);
    unset($data[2]);
    unset($data[3]);
    $lang_update_queries = array();
    foreach ($data as $key => $value) {
        $value = ($value);
        if ($value == 'arabic') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'وأضاف هدية');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'أرسلت هدية لك.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'يجب عليك الاشتراك باستخدام {0} فقط.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'لا تجزئة');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'لم يتم العثور على طلبات صديق');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'تلقى طلب الصداقة');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'أنت مؤيد الآن.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'cashfree.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'رقم التليفون');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'انتظر من فضلك');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'iyzipay.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'حدث خطأ غير معروف');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2checkout.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'الدفع');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'تبوك');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'حالة');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'أزيز');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'يرجى التأكد من تفاصيل معلوماتك.');
        } else if ($value == 'dutch') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Gift toegevoegd');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'stuurde een geschenk aan jou.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'Je moet alleen aanmelden met behulp van {0}.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'Geen hash');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'Geen vriendenverzoeken gevonden');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Vriendverzoek ontvangen');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'Je bent nu een pro.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'Cashfree');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'telefoonnummer');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'even geduld aub');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'Iyzipay');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Er is een onbekende fout opgetreden');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2checkout');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Uitchecken');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'adres');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'staat');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'zip');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'Check alsjeblieft je gegevens.');
        } else if ($value == 'french') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Cadeau ajouté');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'envoyé un cadeau à vous.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'Vous devez vous inscrire en utilisant {0} uniquement.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'Pas de hasch');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'Aucune demande d\'amis trouvée');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Demande d\'ami reçue');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'Vous êtes un pro maintenant.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'Sans argent');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'numéro de téléphone');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'S\'il vous plaît, attendez');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'Iyzipay');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Une erreur inconnue s\'est produite');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', 'Chèque');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Vérifier');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'adresse');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'Etat');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'Zip *: français');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'S\'il vous plaît vérifier vos informations.');
        } else if ($value == 'german') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Geschenk hinzugefügt');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'schickte dir ein Geschenk.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'Sie müssen nur mit {0} anmelden.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'Kein Hash');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'Keine Freundschaftsanfragen gefunden');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Freundschaftsanfrage erhalten.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'Du bist jetzt ein Profi.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'Barrierefrei');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'Telefonnummer');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'Warten Sie mal');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'IYZIPAY.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Unbekannter Fehler aufgetreten');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2checkout.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Überprüfen');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'Adresse');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'Zustand');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'Postleitzahl');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'bitte überprüfe deine Details.');
        } else if ($value == 'italian') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Regalo aggiunto.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'inviato un regalo a te.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'È necessario sottoscrivere solo usando solo {0}.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'Nessun hash.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'Nessuna richiesta di amicizia trovata');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Richiesta di amicizia ricevuta');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'Sei un professionista ora.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'Cashfree.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'numero di telefono');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'attendere prego');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'Iyzipay.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Errore sconosciuto');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2Checkout.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Check-out');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'indirizzo');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'stato');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'cerniera lampo');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'Si prega di controllare i tuoi dettagli.');
        } else if ($value == 'portuguese') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Presente adicionado');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'enviou um presente para você.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'Você deve se inscrever usando apenas {0}.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'Sem hash.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'Nenhum pedido de pedidos encontrados');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Pedido de amizade recebido');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'Você é um profissional agora.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'Cashfree');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'número de telefone');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'por favor, aguarde');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'Iyzipay.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Ocorreu um erro desconhecido');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2Checkout');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Verificação de saída');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'Morada');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'Estado');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'fecho eclair');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'Por favor, verifique seus dados.');
        } else if ($value == 'russian') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Подарок добавил');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'отправил вам подарок.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'Вы должны перерегистрировать только использование {0} только.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'Нет хеш');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'Ни один запрос на добавление в друзья не найдено');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Запрос на добавление в друзья');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'Вы профессионал.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'Кашельство');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'телефонный номер');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'пожалуйста, подождите');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'Iyzipay');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Произошла неизвестная ошибка');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2ъечь');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Проверить');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'адрес');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'государственный');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'zip.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'Пожалуйста, проверьте ваши данные.');
        } else if ($value == 'spanish') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Regalo añadido');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'Te envió un regalo.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'Debe registrarse usando {0} solamente.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'No hash');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'No se han encontrado solicitudes de amigos.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Solicitud de amistad recibida');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'Eres un profesional ahora.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'CashFree');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'número de teléfono');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'espere por favor');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'IYZIPAY');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Se produjo un error desconocido');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2Comprar');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Revisa');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'dirección');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'Expresar');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'Código Postal');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'Por favor comprueba tus detalles.');
        } else if ($value == 'turkish') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Hediye eklendi');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'sana bir hediye gönderdi.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'Sadece {0} kullanarak kaydolmalısınız.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'Yoksul');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'Arkadaşlık isteği bulunamadı');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Arkadaşlık isteği alındı');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'Sen şimdi bir profesyonelsin.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'Cashfree');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'telefon numarası');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'lütfen bekleyin');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'İyzipay');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Bilinmeyen hata oluştu');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2checkout');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Ödeme');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'adres');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'durum');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'zip');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'Lütfen bilgilerinizi kontrol edin.');
        } else if ($value == 'english') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Gift added');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'sent a gift to you.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'you must signup using {0} only.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'No hash');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'No friend requests found');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Friend request received');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'You are a pro now.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'CashFree');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'phone number');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'please wait');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'Iyzipay');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Unknown error occured');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2Checkout');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Check out');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'address');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'state');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'zip');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'please check your details.');
        } else if ($value != 'english') {
            $lang_update_queries[] = PT_UpdateLangs($value, 'gift_added', 'Gift added');
            $lang_update_queries[] = PT_UpdateLangs($value, 'send_a_gift_to_you.', 'sent a gift to you.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_must_signup_using__0__only.', 'you must signup using {0} only.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_hash', 'No hash');
            $lang_update_queries[] = PT_UpdateLangs($value, 'no_friend_request_found', 'No friend requests found');
            $lang_update_queries[] = PT_UpdateLangs($value, 'friend_request_received', 'Friend request received');
            $lang_update_queries[] = PT_UpdateLangs($value, 'you_are_a_pro_now.', 'You are a pro now.');
            $lang_update_queries[] = PT_UpdateLangs($value, 'cashfree', 'CashFree');
            $lang_update_queries[] = PT_UpdateLangs($value, 'phone_number', 'phone number');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_wait', 'please wait');
            $lang_update_queries[] = PT_UpdateLangs($value, 'iyzipay', 'Iyzipay');
            $lang_update_queries[] = PT_UpdateLangs($value, 'unknown_error', 'Unknown error occured');
            $lang_update_queries[] = PT_UpdateLangs($value, '2checkout', '2Checkout');
            $lang_update_queries[] = PT_UpdateLangs($value, 'check_out', 'Check out');
            $lang_update_queries[] = PT_UpdateLangs($value, 'address', 'address');
            $lang_update_queries[] = PT_UpdateLangs($value, 'state', 'state');
            $lang_update_queries[] = PT_UpdateLangs($value, 'zip', 'zip');
            $lang_update_queries[] = PT_UpdateLangs($value, 'please_check_details', 'please check your details.');
        }
    }
    if (!empty($lang_update_queries)) {
        foreach ($lang_update_queries as $key => $query) {
            $sql = mysqli_query($conn, $query);
        }
    }
    $name = md5(microtime()) . '_updated.php';
    rename('update.php', $name);
}
?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <title>Updating Quickdate</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <style>
         @import url('https://fonts.googleapis.com/css?family=Roboto:400,500');
         @media print {
            .wo_update_changelog {max-height: none !important; min-height: !important}
            .btn, .hide_print, .setting-well h4 {display:none;}
         }
         * {outline: none !important;}
         body {background: #f3f3f3;font-family: 'Roboto', sans-serif;}
         .light {font-weight: 400;}
         .bold {font-weight: 500;}
         .btn {height: 52px;line-height: 1;font-size: 16px;transition: all 0.3s;border-radius: 2em;font-weight: 500;padding: 0 28px;letter-spacing: .5px;}
         .btn svg {margin-left: 10px;margin-top: -2px;transition: all 0.3s;vertical-align: middle;}
         .btn:hover svg {-webkit-transform: translateX(3px);-moz-transform: translateX(3px);-ms-transform: translateX(3px);-o-transform: translateX(3px);transform: translateX(3px);}
         .btn-main {color: #ffffff;background-color: #b0088d;border-color: #b0088d;}
         .btn-main:disabled, .btn-main:focus {color: #fff;}
         .btn-main:hover {color: #ffffff;background-color: #0dcde2;border-color: #0dcde2;box-shadow: -2px 2px 14px rgba(168, 72, 73, 0.35);}
         svg {vertical-align: middle;}
         .main {color: #b0088d;}
         .wo_update_changelog {
          border: 1px solid #eee;
          padding: 10px !important;
         }
         .content-container {display: -webkit-box; width: 100%;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-flex-direction: column;flex-direction: column;min-height: 100vh;position: relative;}
         .content-container:before, .content-container:after {-webkit-box-flex: 1;box-flex: 1;-webkit-flex-grow: 1;flex-grow: 1;content: '';display: block;height: 50px;}
         .wo_install_wiz {position: relative;background-color: white;box-shadow: 0 1px 15px 2px rgba(0, 0, 0, 0.1);border-radius: 10px;padding: 20px 30px;border-top: 1px solid rgba(0, 0, 0, 0.04);}
         .wo_install_wiz h2 {margin-top: 10px;margin-bottom: 30px;display: flex;align-items: center;}
         .wo_install_wiz h2 span {margin-left: auto;font-size: 15px;}
         .wo_update_changelog {padding:0;list-style-type: none;margin-bottom: 15px;max-height: 440px;overflow-y: auto; min-height: 440px;}
         .wo_update_changelog li {margin-bottom:7px; max-height: 20px; overflow: hidden;}
         .wo_update_changelog li span {padding: 2px 7px;font-size: 12px;margin-right: 4px;border-radius: 2px;}
         .wo_update_changelog li span.added {background-color: #4CAF50;color: white;}
         .wo_update_changelog li span.changed {background-color: #e62117;color: white;}
         .wo_update_changelog li span.improved {background-color: #9C27B0;color: white;}
         .wo_update_changelog li span.compressed {background-color: #795548;color: white;}
         .wo_update_changelog li span.fixed {background-color: #2196F3;color: white;}
         input.form-control {background-color: #f4f4f4;border: 0;border-radius: 2em;height: 40px;padding: 3px 14px;color: #383838;transition: all 0.2s;}
input.form-control:hover {background-color: #e9e9e9;}
input.form-control:focus {background: #fff;box-shadow: 0 0 0 1.5px #a84849;}
         .empty_state {margin-top: 80px;margin-bottom: 80px;font-weight: 500;color: #6d6d6d;display: block;text-align: center;}
         .checkmark__circle {stroke-dasharray: 166;stroke-dashoffset: 166;stroke-width: 2;stroke-miterlimit: 10;stroke: #7ac142;fill: none;animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;}
         .checkmark {width: 80px;height: 80px; border-radius: 50%;display: block;stroke-width: 3;stroke: #fff;stroke-miterlimit: 10;margin: 100px auto 50px;box-shadow: inset 0px 0px 0px #7ac142;animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;}
         .checkmark__check {transform-origin: 50% 50%;stroke-dasharray: 48;stroke-dashoffset: 48;animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;}
         @keyframes stroke { 100% {stroke-dashoffset: 0;}}
         @keyframes scale {0%, 100% {transform: none;}  50% {transform: scale3d(1.1, 1.1, 1); }}
         @keyframes fill { 100% {box-shadow: inset 0px 0px 0px 54px #7ac142; }}
      </style>
   </head>
   <body>
      <div class="content-container container">
         <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <div class="wo_install_wiz">
                 <?php if ($updated == false) { ?>
                  <div>
                     <h2 class="light">Update to v1.4.2 </span></h2>
                     <div class="setting-well">
                        <h4>Changelog</h4>
                        <ul class="wo_update_changelog">
                            <li>[Added] new admin panel, v2.</li>
                            <li>[Added] notifications system in admin panel. </li>
                            <li>[Added] +4 payments methods.</li>
                            <li>[Added] new theme [love]. </li>
                            <li>[Added] new APIs.</li>
                            <li>[Fixed] 40+ reported bugs.</li>
                            <li>[Improved] stability & speed. </li>
                        </ul>
                        <p class="hide_print">Note: The update process might take few minutes.</p>
                        <p class="hide_print">Important: If you got any fail queries, please copy them, open a support ticket and send us the details.</p>
                        <br>
                             <button class="pull-right btn btn-default" onclick="window.print();">Share Log</button>
                             <button type="button" class="btn btn-main" id="button-update">
                             Update 
                             <svg viewBox="0 0 19 14" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                                <path fill="currentColor" d="M18.6 6.9v-.5l-6-6c-.3-.3-.9-.3-1.2 0-.3.3-.3.9 0 1.2l5 5H1c-.5 0-.9.4-.9.9s.4.8.9.8h14.4l-4 4.1c-.3.3-.3.9 0 1.2.2.2.4.2.6.2.2 0 .4-.1.6-.2l5.2-5.2h.2c.5 0 .8-.4.8-.8 0-.3 0-.5-.2-.7z"></path>
                             </svg>
                          </button>
                     </div>
                     <?php }?>
                     <?php if ($updated == true) { ?>
                      <div>
                        <div class="empty_state">
                           <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                              <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                              <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                           </svg>
                           <p>Congratulations, you have successfully updated your site. Thanks for choosing WoWonder.</p>
                           <br>
                           <a href="<?php echo $wo['config']['site_url'] ?>" class="btn btn-main" style="line-height:50px;">Home</a>
                        </div>
                     </div>
                     <?php }?>
                  </div>
               </div>
            </div>
            <div class="col-md-1"></div>
         </div>
      </div>
   </body>
</html>
<script>  
var queries = [
    "UPDATE `options` SET `option_value`= '1.4.2' WHERE option_name = 'version';",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'specific_email_signup', NULL, current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'push1', '0', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'checkout_payment', 'yes', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'checkout_mode', 'sandbox', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'checkout_currency', 'USD', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'checkout_seller_id', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'checkout_publishable_key', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'checkout_private_key', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'cashfree_payment', 'yes', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'cashfree_mode', 'sandBox', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'cashfree_client_key', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'cashfree_secret_key', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_payment', 'yes', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_mode', '1', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_key', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_buyer_id', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_secret_key', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_buyer_name', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_buyer_surname', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_buyer_gsm_number', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_buyer_email', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_identity_number', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_address', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_city', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_country', '', current_timestamp());",
    "INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`) VALUES (NULL, 'iyzipay_zip', '', current_timestamp());",
    "ALTER TABLE `users` ADD `conversation_id` VARCHAR(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL AFTER `lock_private_photo`;",
    "ALTER TABLE `users` ADD `state` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '' AFTER `location`, ADD `zip` INT(11) UNSIGNED NULL DEFAULT '0' AFTER `location`, ADD `cc_phone_number` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '' AFTER `location`;",
    "ALTER TABLE `notifications` ADD `admin` INT(11) NOT NULL DEFAULT '0' AFTER `created_at`;",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'gift_added');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'send_a_gift_to_you.');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'you_must_signup_using__0__only.');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'no_hash');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'no_friend_request_found');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'friend_request_received');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'you_are_a_pro_now.');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'cashfree');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'phone_number');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'please_wait');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'iyzipay');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'unknown_error');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, '2checkout');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'check_out');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'address');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'state');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'zip');",
    "INSERT INTO `langs` (`id`, `lang_key`) VALUES (NULL, 'please_check_details');",


];

$('#input_code').bind("paste keyup input propertychange", function(e) {
    if (isPurchaseCode($(this).val())) {
        $('#button-update').removeAttr('disabled');
    } else {
        $('#button-update').attr('disabled', 'true');
    }
});

function isPurchaseCode(str) {
    var patt = new RegExp("(.*)-(.*)-(.*)-(.*)-(.*)");
    var res = patt.test(str);
    if (res) {
        return true;
    }
    return false;
}

$(document).on('click', '#button-update', function(event) {
    if ($('body').attr('data-update') == 'true') {
        window.location.href = '<?php echo $site_url?>';
        return false;
    }
    $(this).attr('disabled', true);
    $('.wo_update_changelog').html('');
    $('.wo_update_changelog').css({
        background: '#1e2321',
        color: '#fff'
    });
    $('.setting-well h4').text('Updating..');
    $(this).attr('disabled', true);
    RunQuery();
});

var queriesLength = queries.length;
var query = queries[0];
var count = 0;
function b64EncodeUnicode(str) {
    // first we use encodeURIComponent to get percent-encoded UTF-8,
    // then we convert the percent encodings into raw bytes which
    // can be fed into btoa.
    return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g,
        function toSolidBytes(match, p1) {
            return String.fromCharCode('0x' + p1);
    }));
}
function RunQuery() {
    var query = queries[count];
    $.post('?update', {
        query: b64EncodeUnicode(query)
    }, function(data, textStatus, xhr) {
        if (data.status == 200) {
            $('.wo_update_changelog').append('<li><span class="added">SUCCESS</span> ~$ mysql > ' + query + '</li>');
        } else {
            $('.wo_update_changelog').append('<li><span class="changed">FAILED</span> ~$ mysql > ' + query + '</li>');
        }
        count = count + 1;
        if (queriesLength > count) {
            setTimeout(function() {
                RunQuery();
            }, 1500);
        } else {
            $('.wo_update_changelog').append('<li><span class="added">Updating Langauges & Categories</span> ~$ languages.sh, Please wait, this might take some time..</li>');
            $.post('?run_lang', {
                update_langs: 'true'
            }, function(data, textStatus, xhr) {
              $('.wo_update_changelog').append('<li><span class="fixed">Finished!</span> ~$ Congratulations! you have successfully updated your site. Thanks for choosing QuickDate.</li>');
              $('.setting-well h4').text('Update Log');
              $('#button-update').html('Home <svg viewBox="0 0 19 14" xmlns="http://www.w3.org/2000/svg" width="18" height="18"> <path fill="currentColor" d="M18.6 6.9v-.5l-6-6c-.3-.3-.9-.3-1.2 0-.3.3-.3.9 0 1.2l5 5H1c-.5 0-.9.4-.9.9s.4.8.9.8h14.4l-4 4.1c-.3.3-.3.9 0 1.2.2.2.4.2.6.2.2 0 .4-.1.6-.2l5.2-5.2h.2c.5 0 .8-.4.8-.8 0-.3 0-.5-.2-.7z"></path> </svg>');
              $('#button-update').attr('disabled', false);
              $(".wo_update_changelog").scrollTop($(".wo_update_changelog")[0].scrollHeight);
              $('body').attr('data-update', 'true');
            });
        }
        $(".wo_update_changelog").scrollTop($(".wo_update_changelog")[0].scrollHeight);
    });
}
</script>