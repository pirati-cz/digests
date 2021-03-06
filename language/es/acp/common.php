<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2018 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'DIGESTS_WEEKDAY' 					=> 'Domingo,Lunes,Martes,Miércoles,Jueves,Viernes,Sábado',
));

$weekdays = explode(',', $lang['DIGESTS_WEEKDAY']);

$lang = array_merge($lang, array(
	'PLURAL_RULE'											=> 1,

	'DIGESTS_ALL'											=> 'Todos',
	'DIGESTS_ALL_ALLOWED_FORUMS'							=> 'Todos los foros permitidos',
	'DIGESTS_ALL_HOURS'										=> 'Todas las horas',
	'DIGESTS_ALL_TYPES'										=> 'Todos los tipos de resúmenes',
	'DIGESTS_ALL_SUBSCRIBED'								=> array(
																1 => '%d usuario ha sido suscrito en masa para recibir resúmenes',
																2 => '%d usuarios han sido suscritos en masa para recibir resúmenes',
															),
	'DIGESTS_ALL_UNSUBSCRIBED'								=> array(
																1 => '%d usuario ha sido dado de baja en masa para recibir resúmenes',
																2 => '%d usuarios han sido dados de baja en masa para recibir resúmenes',
															),
	'DIGESTS_APPLY_TO'										=> 'Aplicar a',
	'DIGESTS_AVERAGE'										=> 'Media',
	'DIGESTS_BALANCE_APPLY_HOURS'							=> 'Aplicar balanceo a estas horas',
	'DIGESTS_BALANCE_LOAD'									=> 'Balancear la carga',
	'DIGESTS_BALANCE_HOURS'									=> 'Balancear estas horas',
	'DIGESTS_BASED_ON'										=> '(Basado en UTC%+d)',
	'DIGESTS_COLLAPSE'										=> 'Colapsar',
	'DIGESTS_COMMA'											=> ', ',		// Utilizado en saludos y para separar artículos en listas
	'DIGESTS_CREATE_DIRECTORY_ERROR'						=> 'No se puede crear la carpeta %s. Esto puede deberse a permisos insuficientes. Los permisos de archivo en la carpeta deben configurarse en escritura pública (777 en sistemas basados en Unix).',
	'DIGESTS_CURRENT_VERSION_INFO'							=> 'Tienes la versión <strong>%s</strong>.',
	'DIGESTS_CUSTOM_STYLESHEET_PATH'						=> 'Ruta del estilo customizado',
	'DIGESTS_CUSTOM_STYLESHEET_PATH_EXPLAIN'				=> 'Esta configuración solo se aplica si la casilla para habilitar la hoja de estilo personalizada está habilitada. Si está habilitado, esta hoja de estilo se aplicará a todos los resúmenes estilizados. La ruta debe ser una ruta relativa desde la carpeta de estilos de phpBB y normalmente debe estar en la subcarpeta del tema. Nota: tú eres responsable de crear esta hoja de estilo y de colocarla en un archivo con el nombre ingresado aquí en la ubicación apropiada de tu servidor. Ejemplo: prosilver/theme/digest_stylesheet.css. Para más información sobre la creación de hojas de estilo, haz clic en <a href="http://www.w3schools.com/css/"> aquí</a>.',
	'DIGESTS_DEFAULT'										=> 'Suscribirse usando los valores por defecto',
	'DIGESTS_DAILY_ONLY'									=> 'Solo resúmenes diarios',
	'DIGESTS_ENABLE_AUTO_SUBSCRIPTIONS'						=> 'Habilitar suscripciones automáticas',
	'DIGESTS_ENABLE_AUTO_SUBSCRIPTIONS_EXPLAIN'				=> 'Si quieres que los nuevos usuarios obtengan resúmenes de forma automática, seleccione sí. Los resúmenesrsquo; la configuración por defecto se aplicará automáticamente. (Estos se configuran en los resúmenes&rsquo; y la configuración predeterminada del usuario). Al habilitar esta opción, <em>no</em> creará suscripciones para los usuarios que actualmente no están suscritos, los usuarios inactivos o los nuevos usuarios que eligieron no recibir un resumen durante el registro. Puedes configurarlos individualmente utilizando la función de edición de suscriptores, o globalmente con la opción de suscripción / cancelación de la suscripción masiva.',
	'DIGESTS_ENABLE_CUSTOM_STYLESHEET'						=> 'Habilitar hoja de estilo customizada',
	'DIGESTS_ENABLE_CUSTOM_STYLESHEET_EXPLAIN'				=> 'Si no está habilitado, la hoja de estilo predeterminada para el estilo seleccionado en el perfil del usuario se aplica a las versiones con estilo de sus resúmenes.',
	'DIGESTS_ENABLE_LOG'									=> 'Escribir todas las acciones del resumen en el log del admin',
	'DIGESTS_ENABLE_LOG_EXPLAIN'							=> 'Si está habilitado, todas las acciones de resumen se escribirán en el registro de admin (que se encuentra en la pestaña de mantenimiento). Esto es útil para responder a preguntas de resúmenes, ya que indica qué hizo el mailer de resúmenes, cuándo y para qué suscriptores. Habilitar esto resultará rápidamente en un registro de admin muy largo, ya que al menos dos entradas se escribirán cada hora en el registro. <em>Nota</em>: los errores, las excepciones y las advertencias siempre se escriben en el registro.',
	'DIGESTS_ENABLE_SUBSCRIBE_UNSUBSCRIBE'					=> 'Habilitar suscripción o darse de baja en masa',
	'DIGESTS_ENABLE_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'			=> 'Si dices que sí, cuando presiones Enviar, se producirá la acción de suscripción o cancelación en masa de la suscripción. Habilitar con cuidado!',
	'DIGESTS_EXCLUDE_FORUMS'								=> 'Siempre excluir estos foros',
	'DIGESTS_EXCLUDE_FORUMS_EXPLAIN'						=> 'Ingrese los forum_ids para foros que nunca deben aparecer en un resumen. Separa los forum_ids con comas. Si se pone en 0, no se debe excluir ningún foro. Para determinar los forum_ids, al navegar por un foro, observe el parámetro &ldquo;f&rdquo; en el campo URL. Este es el forum_id. Ejemplo: http://www.example.com/phpBB3/viewforum.php?f=1. No utilices forum_ids que correspondan a categorías. <i>Esta configuración se ignora si los temas marcados solo son solicitados por un suscriptor.</i>',
	'DIGESTS_EXPAND'										=> 'Expandir',
	'DIGESTS_FREQUENCY_EXPLAIN'								=> 'Los resúmenes semanales se envían el día de la semana establecido en la configuración general de los resúmenes. Los resúmenes mensuales se envían el primer día del mes. El Tiempo Universal Coordinado (UTC) se utiliza para determinar el día de la semana.',
	'DIGESTS_FORMAT_FOOTER' 								=> 'Formato del resumen',
	'DIGESTS_FROM_EMAIL_ADDRESS'							=> 'Desde este correo',
	'DIGESTS_FROM_EMAIL_ADDRESS_EXPLAIN'					=> 'Cuando los usuarios reciben un resumen, esta dirección de correo electrónico aparecerá en el campo DESDE. Si lo deja en blanco, se enviará de forma predeterminada a la dirección de correo electrónico del foro. Ten cuidado si utilizas una dirección de correo electrónico con un dominio distinto al que se encuentra el resumen, ya que tu servidor de correo o el servidor de correo electrónico del usuario pueden interpretar el correo electrónico como correo no deseado.',
	'DIGESTS_FROM_EMAIL_NAME'								=> 'Desde nombre del email',
	'DIGESTS_FROM_EMAIL_NAME_EXPLAIN'						=> 'Este es el nombre DESDE que aparecerá en el cliente de correo electrónico. Si lo dejas en blanco, se identificará como un robot para tu foro.',
	'DIGESTS_HAS_UNSUBSCRIBED'								=> 'Se ha dado de baja',
	'DIGESTS_HOUR_SENT'										=> 'Hora enviado (basado en UTC%+d)',
	'DIGESTS_HOUR_SENT_GMT'									=> 'Hora de envío por defecto (UTC)',
	'DIGESTS_IGNORE'										=> 'Ignorar acciones globales',
	'DIGESTS_ILLOGICAL_DATE'								=> 'Tu fecha y hora no son validos. Por favor corrigelo y vuelve a enviar utilizando una fecha y hora como YYYY-MM-DD HH:MM:SS.',
	'DIGESTS_INCLUDE_ADMINS'								=> 'Incluir administradores',
	'DIGESTS_INCLUDE_ADMINS_EXPLAIN'						=> 'Esto suscribirá o dará de baja a los administradores además de usuarios normales.',
	'DIGESTS_INCLUDE_FORUMS'								=> 'Siempre incluir estos foros',
	'DIGESTS_INCLUDE_FORUMS_EXPLAIN'						=> 'Introduce los forum_ids para los foros que deben aparecer en un resumen. Separa los forum_ids con comas. Si se establece en 0, no se deben incluir foros. Para determinar los forum_ids, al navegar por un foro, observa el &ldquo;f&rdquo; parámetro en el campo URL. Este es el forum_id. Ejemplo: http://www.example.com/phpBB3/viewforum.php?f=1. No utilices forum_ids que corresponden a categorías. <i>Esta configuración se ignora si los temas marcados solo son solicitados por un suscriptor.</i>',
	'DIGESTS_LAST_SENT'										=> 'Ultimo resumen enviado',
	'DIGESTS_LIST_USERS'    								=> array(
																	1 => '%d Usuario',
																	2 => '%d Usuarios',
															),
	'DIGESTS_LOWERCASE_DIGEST_TYPE'							=> 'Minúsculas para el tipo de resumen en resumenes',
	'DIGESTS_LOWERCASE_DIGEST_TYPE_EXPLAIN'					=> 'En inglés, el título del resumen será algo así como &ldquo;Nombre de mi foro Resumen Diario&rdquo;. En ciertos idiomas &ldquo;Resumen Diario&rdquo; Lógicamente precederá al nombre del foro. Si se establece en sí, entonces el tipo de resumen aparecerá algo así como &ldquo;Resumen diario del nombre de mi foro&rdquo;, con la primera letra del nombre del foro en minúsculas.',
	'DIGESTS_MAILER_NOT_RUN'								=> 'El Mailer no ha sido ejecutado porque no estaba habilitado o no has solicitado borrar la carpeta de resúmenes.',
	'DIGESTS_MAILER_RAN_SUCCESSFULLY'						=> 'El correo se ha ejecutado correctamente.',
	'DIGESTS_MAILER_RAN_WITH_ERROR'							=> 'Se produjo un error mientras se estaba ejecutando el correo. Uno o más resúmenes pueden haber sido generados exitosamente. Los registros de administración y error de phpBB pueden contener más información.',
	'DIGESTS_MAILER_SPOOLED'								=> 'Cualquier resumen creado para la fecha y hora se guardó en el
	store/phpbbservices/digests folder.',
	'DIGESTS_MARK_UNMARK_ROW'								=> 'Marcar o desmarcar fila para cambios',
	'DIGESTS_MARK_ALL'										=> 'Marcar o desmarcar todas las filas',
	'DIGESTS_MAX_CRON_HOURS'								=> 'Horas máximas para que el remitente las procese.',
	'DIGESTS_MAX_CRON_HOURS_EXPLAIN'						=> 'Establezca esto en 0 (cero) para procesar todos los resúmenes de todas las horas en la cola cuando se ejecuta el anuncio publicitario. Sin embargo, si tiene <strong> alojamiento compartido </strong>, entonces la ejecución de la aplicación de correo puede desencadenar límites de recursos y provocar un error. Es más probable que esto suceda si tiene muchos suscriptores y el tráfico de la placa es escaso. Configuración de un <a href="https://wiki.phpbb.com/PhpBB3.1/RFC/Modular_cron#Use_system_cron">system cron</a> es la forma más fácil de minimizar este problema y también debe garantizar la llegada oportuna de los resúmenes.',
	'DIGESTS_MAX_ITEMS'										=> 'Máximo de publicaciones permitidas en cualquier resumen.',
	'DIGESTS_MAX_ITEMS_EXPLAIN'								=> 'Por motivos de rendimiento, es posible que deba establecer un límite absoluto en el número de publicaciones en cualquier resumen. Si establece esto en 0 (cero), esto permite que un resumen sea de un tamaño ilimitado. Puede usar cualquier número entero en este campo. Tenga en cuenta que un resumen está limitado por la cantidad de publicaciones en el tipo de resumen solicitado (diario, semanal o mensual), así como por otros criterios que el usuario puede establecer.',
	'DIGESTS_MAIL_FREQUENCY' 								=> 'Frecuencia de los resúmenes',
	'DIGESTS_MIGRATE_UNSUPPORTED_VERSION'					=> 'Las actualizaciones de la modificación de resúmenes (para phpBB 3.0) son compatibles a partir de la versión 2.2.6. Tienes la versión% s. La extensión no se puede migrar o instalar. Por favor, busque ayuda en el foro de soporte en phpbb.com.',
	'DIGESTS_MIN_POPULARITY_SIZE'							=> 'Tema mínimo de la publicación de la cuenta de popularidad',
	'DIGESTS_MIN_POPULARITY_SIZE_EXPLAIN'					=> 'Esto establece el número mínimo de publicaciones por día necesarias para que un tema se considere popular. Un suscriptor no puede establecer un valor por debajo de este valor. Este valor se aplica solo al período de tiempo del suscriptor: día, semana o mes, por lo que refleja la reciente popularidad del tema.',
	'DIGESTS_MONTHLY_ONLY'									=> 'Solo resúmenes mensuales',
	'DIGESTS_NEVER_VISITED'									=> 'Nunca visitado',
	'DIGESTS_NO_DIGESTS_SENT'								=> 'No hay resúmenes enviados',
	'DIGESTS_NO_MASS_ACTION'								=> 'No se realizó ninguna acción porque no habilitó la función',
	'DIGESTS_NOTIFY_ON_ADMIN_CHANGES'						=> 'Notificar al miembro por correo electrónico de los cambios del resumen del administrador',
	'DIGESTS_NOTIFY_ON_ADMIN_CHANGES_EXPLAIN'				=> 'La edición de suscriptores, la carga de saldos y la suscripción / cancelación de la suscripción masiva permiten al administrador cambiar la configuración de resumen de un usuario. En caso afirmativo, se enviarán correos electrónicos a los suscriptores cuando un administrador cambie cualquier aspecto de su suscripción.',
	'DIGESTS_NUMBER_OF_SUBSCRIBERS'							=> 'Número de suscriptores',
	'DIGESTS_PMS_MARK_READ'									=> 'Marcar mis mensajes privados si están en resumen',
	'DIGESTS_RANDOM_HOUR'									=> 'Hora aleatoria',
	'DIGESTS_REBALANCED'									=> array(
																	1 => 'Durante este rebalanceo, se modificó la hora de envío de resumen de los suscriptores de %d.',
																	2 => 'Durante este rebalanceo, se modificó la hora de envío de resumen de los suscriptores de %d.',
															),
	'DIGESTS_REGISTRATION_FIELD'							=> 'Permitir a los usuarios suscribirse a resúmenes al registrarse',
	'DIGESTS_REGISTRATION_FIELD_EXPLAIN'					=> 'Si está habilitado, al registrarse, los usuarios tienen la opción de obtener resúmenes utilizando los valores predeterminados dej foro. Esta opción no aparece si las suscripciones automáticas están habilitadas.',
	'DIGESTS_REPLY_TO_EMAIL_ADDRESS'						=> 'Responder a la dirección de correo electrónico',
	'DIGESTS_REPLY_TO_EMAIL_ADDRESS_EXPLAIN'				=> 'Cuando los usuarios reciben un resumen, esta dirección de correo electrónico aparecerá en el campo RESPONDER A. Si lo deja en blanco, se establecerá de forma predeterminada en la dirección de contacto de correo electrónico de su foro. Tenga cuidado si utiliza una dirección de correo electrónico con un dominio distinto al que se encuentra en el resumen, ya que su servidor de correo o el servidor de correo del usuario pueden interpretar el correo electrónico como correo no deseado.',
	'DIGESTS_RESET_CRON_RUN_TIME'							=> 'Restablecer el correo',
	'DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'					=> 'Si se restablece, la próxima vez que se ejecuta la aplicación de correo creará resúmenes solo para la hora actual. Se eliminan todos los resúmenes en la cola. El restablecimiento puede ser útil cuando haya terminado de probar los resúmenes o si el cron de phpBB no se ha ejecutado en mucho tiempo.',
	'DIGESTS_RUN_TEST'										=> 'Ejecutar el correo',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL'							=> 'Borrar la carpeta store/phpbbservices/digests',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL_ERROR'					=> 'No se pudieron eliminar todos los archivos en la carpeta store/phpbbservices/digests. Esto puede deberse a un problema de permisos o se eliminó la carpeta. Los permisos de archivo en la carpeta deben configurarse en escritura pública (777 en sistemas basados en Unix).',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL_EXPLAIN'					=> 'Si ecoges que sí, los ficheros dentro de store/phpbbservices/digests se borrarán antes de que se graben los resumenes. Puedes ejecutar esto sin ejecutar el mailer.',
	'DIGESTS_RUN_TEST_DATE_HOUR'							=> 'Fecha y hora para ejecutar',
	'DIGESTS_RUN_TEST_DATE_HOUR_EXPLAIN'					=> 'Utiliza el selector para escoger fecha y hora. La fecha y hora que escojas será seguro la zona horaria de tu perfil.',
	'DIGESTS_RUN_TEST_EMAIL_ADDRESS'						=> 'Dirección de correo electrónico de prueba',
	'DIGESTS_RUN_TEST_EMAIL_ADDRESS_EXPLAIN'				=> 'Si se especifica una dirección de correo electrónico en este campo, todos los resúmenes de la hora solicitada se enviarán a esta dirección de correo electrónico en lugar de la dirección de correo electrónico de contacto del foro. <em> Nota </em>: si eligió enviar correos electrónicos a archivos, este campo se ignora.',
	'DIGESTS_RUN_TEST_SEND_TO_ADMIN'						=> 'Enviar todos los resúmenes a la dirección de correo electrónico especificada',
	'DIGESTS_RUN_TEST_SEND_TO_ADMIN_EXPLAIN'				=> 'Si deseas enviar los resúmenes en la prueba por correo electrónico, todos los resúmenes se enviarán por correo electrónico a la dirección especificada en el campo a continuación. <em> Nota </em>: si eliges enviar correos electrónicos a archivos, esta configuración se ignora. En caso afirmativo, pero no se especifica una dirección de correo electrónico, se utilizará la dirección de correo electrónico de contacto del foro. <em> Precaución </em>: ciertos servidores de correo electrónico pueden interpretar un gran volumen de correos electrónicos en un corto período de tiempo desde la misma dirección que el correo no deseado o el uso inadecuado. Habilitar con cuidado. Si dices que no, los resúmenes se enviarán a los suscriptores, lo que puede confundirles.',
	'DIGESTS_RUN_TEST_SPOOL'								=> 'Enviar resultados a archivos en lugar de enviar por correo electrónico',
	'DIGESTS_RUN_TEST_SPOOL_EXPLAIN'						=> 'Previene a los resumenes de enviarse. En su lugar cada resumen se escribe en un fichero en la carpeta store/phpbbservices/digests con los siguientes nombres de ficheros: usuario-yyyy-mm-dd-hh.html o usuario-yyyy-mm-dd-hh.txt. (Los ficheros con extensión .txt son resumenes en texto.) usuario es tu usuario del foro. yyyy indica el año, mm es el mes, dd es el día y hh la hora en UTC. Para ver esos ficheros, primero descargalos a una carpeta local. Mira el fichero en el navegador utilizando el modo local: CTRL+O o CMD+O (Mac). <em>Nota</em>: utiliza la letra O, no el número 0.',
	'DIGESTS_SALUTATION_FIELDS' 							=> 'Selecciona los campos de saludo',
	'DIGESTS_SALUTATION_FIELDS_EXPLAIN' 					=> 'Ingrese los nombres de campo del perfil personalizado, si corresponde, desea sustituir el nombre de usuario en el saludo de resumen. Si se deja en blanco, se usa el nombre de usuario. Ingrese los nombres de identificación de campo que se encuentran en la página de campos de perfil personalizado. Separe los nombres de múltiples campos con comas. <em>Nota:</em> Los campos deben ser del tipo “Campo de texto único”. Si no existe ninguno de los campos de perfil personalizados o no hay ningún valor para los campos para el suscriptor, se utilizará el nombre de usuario en su lugar. Ejemplo: nombre, apellido (si creó campos de perfil personalizados con estos nombres). Se colocará un espacio entre cada campo de perfil personalizado en el saludo de resumen.',
	'DIGESTS_SEARCH_FOR_MEMBER'								=> 'Buscar usuario',
	'DIGESTS_SEARCH_FOR_MEMBER_EXPLAIN' 					=> 'Ingrese el nombre de miembro completo o parcial o la dirección de correo electrónico para buscar, luego presione Intro o Enter. Déjelo en blanco para ver a todos los miembros. Las búsquedas de nombres de miembros no distinguen entre mayúsculas y minúsculas. <em>Nota</em>: Debe haber un símbolo @ en el campo para realizar una búsqueda por correo electrónico.',
	'DIGESTS_SELECT_FORUMS_ADMIN_EXPLAIN'					=> 'La lista de foros incluye solo los foros que este usuario puede leer. Si deseas dar a ese usuario acceso a foros adicionales que no se ven aquí, expande sus permisos de usuario o grupo. Ten en cuenta que puedes ajustar los foros que aparecen en su resumen, si su tipo de resumen es &ldquo;Ninguno&rdquo; no se enviará ningún resumen.',
	'DIGESTS_SHOW'											=> 'Mostrar',
	'DIGESTS_SHOW_EMAIL'									=> 'Mostrar correo en el log',
	'DIGESTS_SHOW_EMAIL_EXPLAIN'							=> 'Si está habilitado, la dirección de correo electrónico del suscriptor se muestra en las entradas en el registro de administración por el nombre de usuario o el suscriptor. Esto puede ser útil en la resolución de problemas de problemas de envío de correo.',
	'DIGESTS_SHOW_FORUM_PATH'								=> 'Mostrar la ruta del foro en el resumen',
	'DIGESTS_SHOW_FORUM_PATH_EXPLAIN'						=> 'Si está habilitado, los nombres de los foros de resumen mostrarán las categorías y los foros en los que está anidado un foro, por ejemplo: &ldquo;Categoría 1 :: Foro 1 :: Categoría A :: Foro B&rdquo;, yendo tan profundo como las categorías y los foros están anidados en tu foro. De lo contrario, solo se mostrará el nombre del foro que contiene &ldquo;Foro B&rdquo; en este ejemplo.',
	'DIGESTS_SORT_ORDER'									=> 'Orden de clasificación',
	'DIGESTS_STOPPED_SUBSCRIBING'							=> 'Se ha dado de baja',
	'DIGESTS_STRIP_TAGS'									=> 'Tags para quitar del resumen',
	'DIGESTS_STRIP_TAGS_EXPLAIN'							=> 'Los servidores de correo pueden rechazar correos electrónicos o remitentes de listas negras que contengan ciertas etiquetas HTML, o colocar resúmenes en una carpeta de correo no deseado. Escribe las etiquetas (sin los caracteres &lt; o &gt;) para excluir, separadas por comas. Por ejemplo, para eliminar las etiquetas de video e iframe, pon &ldquo;video,iframe&rdquo; en este campo. Evita poner etiquetas comunes como h1, p y div, ya que son esenciales para procesar los resúmenes.',
	'DIGESTS_SUBSCRIBE_EDITED'								=> 'Tus ajustes de suscripción de resumen han sido editados',
	'DIGESTS_SUBSCRIBE_SUBJECT'								=> 'Has sido suscrito para recibir resúmenes de correo electrónico',
	'DIGESTS_SUBSCRIBE_ALL'									=> 'Suscribir a todos',
	'DIGESTS_SUBSCRIBE_ALL_EXPLAIN'							=> 'Si dices que no, todos serán dados de baja.',
	'DIGESTS_SUBSCRIBE_LITERAL'								=> 'Suscribir',
	'DIGESTS_SUBSCRIBED'									=> 'Suscrito',
	'DIGESTS_SUBSCRIBERS_DAILY'                           	=> 'Suscritores diarios',
	'DIGESTS_SUBSCRIBERS_WEEKLY'                           	=> 'Suscritores semanales',
	'DIGESTS_SUBSCRIBERS_MONTHLY'                           => 'Suscritores mensuales',
	'DIGESTS_UNSUBSCRIBE'									=> 'Darse de baja',
	'DIGESTS_UNSUBSCRIBE_SUBJECT'							=> 'Has sido dado de baja de los correos de resumen',
	'DIGESTS_UNSUBSCRIBED'									=> 'No registrado',
	'DIGESTS_USER_DIGESTS_CHECK_ALL_FORUMS'					=> 'Todos los foros seleccionados por defecto',
	'DIGESTS_USER_DIGESTS_MAX_DISPLAY_WORDS'				=> 'Número máximo de palabras a mostrar en una publicación',
	'DIGESTS_USER_DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'		=> 'Establecido en -1 para mostrar el texto completo de la publicación de forma predeterminada. Establecer en cero (0) significa que, de forma predeterminada, el usuario no verá ningún mensaje de texto.',
	'DIGESTS_USER_DIGESTS_PM_MARK_READ'						=> 'Marcar los mensajes privaods como leidos cuando aparecen en un resumen',
	'DIGESTS_USERS_PER_PAGE'								=> 'Suscritores por página',
	'DIGESTS_USERS_PER_PAGE_EXPLAIN'						=> 'Esto controla la cantidad de filas de suscriptores que un administrador ve por página cuando selecciona la opción de editar suscriptores. Se recomienda que deje esto a 20. Establecer este valor demasiado alto puede provocar un error de PHP max_input_vars.',
	'DIGESTS_WEEKLY_DIGESTS_DAY'							=> 'Selecciona el día de la semana para enviar resúmenes semanales.',
	'DIGESTS_WEEKLY_DIGESTS_DAY_EXPLAIN'					=> 'El día de la semana se basa en UTC. Dependiendo de la hora, los suscriptores en el hemisferio occidental pueden obtener su resumen semanal un día antes de lo esperado.',
	'DIGESTS_WEEKLY_ONLY'									=> 'Solo resúmenes semanales',
	'DIGESTS_WITH_SELECTED'									=> 'Con seleccionado',

));