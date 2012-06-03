<?php
/**
*
* acp_styles [Português]
*
* @package language
* @version 1.0.4
* @Traduzido por: http://phpbbportugal.com | pré-Acordo Ortográfico
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* 
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'			=> 'Conjuntos de Imagens são todos os botões, Fórum, pastas, etc. e outras imagens não especificamente usadas pelo Estilo do Fórum. Aqui pode editar, exportar ou apagar um Conjunto de Imagens existente e importar ou activar novos Conjuntos.',
	'ACP_STYLES_EXPLAIN'			=> 'Aqui pode gerir os Estilos do Fórum. Um Estilo é formado por um Template, um Tema e Conjunto de Imagens. Pode alterar os Estilos, apagar, desactivar, reactivar, criar ou importar novos Estilos. Pode usar a Função Prever para pré-visualizar o novo Estilo. O Estilo Padrão está assinalado com um asterisco (*). Está indicado em cada um dos Estilos instalados o número de Utilizadores que o está a usar.<br />As modificações nos Estilos dos Utilizadores não se reflecte aqui no <b>Painel de Administração</b>.',
	'ACP_TEMPLATES_EXPLAIN'			=> 'Um Template é o código usado para gerar o visual do Fórum. Pode alterar, apagar, desactivar, activar, criar ou importar novos Templates. Também pode modificar o código do Template usado para gerar BBCode.',
	'ACP_THEMES_EXPLAIN'			=> 'Aqui pode criar, instalar, editar, apagar e exportar Temas. Um Tema é a combinação de cores e imagens que são usadas nos Templates para definir o visual básico do Fórum. As opções disponíveis dependem da configuração do servidor e da instalação do phpBB, consulte o manual para mais informações. Na criação de novos Temas é opcional o uso de um Tema já existente.',
	'ADD_IMAGESET'					=> 'Criar Conjunto de Imagens',
	'ADD_IMAGESET_EXPLAIN'			=> 'Aqui pode criar um novo Conjunto de Imagens. As opções adicionais dependem das configurações do Servidor e das Permissões de Ficheiros. Pode usar um Conjunto existente para criar um novo Conjunto de imagem. Também pode enviar, importar (do sistema de Ficheiros) um Ficheiro do Conjunto de imagens. Se enviar ou importar um Ficheiro o nome do novo Conjunto pode ser o nome do Ficheiro (para isto deixe o nome do Conjunto em branco).',
	'ADD_STYLE'						=> 'Criar Estilo',
	'ADD_STYLE_EXPLAIN'				=> 'Aqui pode criar um novo Estilo. As opções adicionais dependem da configuração do Servidor e das Permissões de Ficheiros. Pode usar um Estilo existente para criar um novo. Também pode enviar, importar (do sistema de Ficheiros) um Ficheiro de Estilo. Se enviar ou importar um Ficheiro de Estilo o nome do novo Estilo será determinado automaticamente.',
	'ADD_TEMPLATE'					=> 'Criar Template',
	'ADD_TEMPLATE_EXPLAIN'			=> 'Aqui pode adicionar um novo Template. As opções adicionais dependem da configuração do Servidor e das Permissões de Ficheiros. Pode usar um Template existente para criar um novo. Também pode enviar, importar (do sistema de Ficheiros) um Ficheiro de Template. Se enviar ou importar um Ficheiro o nome do novo Template pode ser o nome do Ficheiro (para isto deixe o nome do Template em branco).',
	'ADD_THEME'						=> 'Criar Tema',
	'ADD_THEME_EXPLAIN'				=> 'Aqui pode adicionar um novo Tema. As opções adicionais dependem da configuração do Servidor e das Permissões de Ficheiros. Pode usar um Tema existente para criar um novo. Também pode enviar, importar (do sistema de Ficheiros) um Ficheiro de Tema. Se enviar ou importar um Ficheiro o nome do novo Tema pode ser o nome do Ficheiro (para isto deixe o nome do Tema em branco).',
	'ARCHIVE_FORMAT'				=> 'Tipo do Ficheiro',
	'AUTOMATIC_EXPLAIN'				=> 'Deixe em branco para detecção automática.',

	'BACKGROUND'					=> 'Fundo',
	'BACKGROUND_COLOUR'				=> 'Cor de Fundo',
	'BACKGROUND_IMAGE'				=> 'Imagem de Fundo',
	'BACKGROUND_REPEAT'				=> 'Repetição do Fundo',
	'BOLD'							=> 'Negro',

	'CACHE'							=> 'Memória',
	'CACHE_CACHED'					=> 'Em Memória',
	'CACHE_FILENAME'				=> 'Ficheiro do Template',
	'CACHE_FILESIZE'				=> 'Tamanho do Ficheiro',
	'CACHE_MODIFIED'				=> 'Modificado',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Deseja actualizar todas os dados do Conjunto de Imagens? As configurações dos Conjuntos de Imagens substituirão todas as modificações que fez fora do Editor de Conjuntos de Imagens.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Deseja limpar todas as versões em memória dos Ficheiros do seu Template?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Deseja actualizar todos os dados do Template na Base de Dados com o conteúdo dos ficheiros no Sistema de Ficheiros? Isto substituirá todas as modificações que fez fora do editor de Template enquanto o Template foi armazenado na Base de Dados.',
	'CONFIRM_THEME_REFRESH'			=> 'Deseja actualizar todos os dados do Tema na Base de Dados com o conteúdo dos ficheiros no Sistema de Ficheiros? Isto substituirá todas as modificações que fez fora do editor de Tema enquanto o Tema foi armazenado na Base de Dados.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Criar novo Conjunto de Imagens',
	'CREATE_STYLE'					=> 'Criar novo Estilo',
	'CREATE_TEMPLATE'				=> 'Criar novo Conjunto de Template',
	'CREATE_THEME'					=> 'Criar novo Tema',
	'CURRENT_IMAGE'					=> 'Imagem Actual',

	'DEACTIVATE_DEFAULT'			=> 'Não pode desactivar o Estilo Padrão.',
	'DELETE_FROM_FS'				=> 'Apagar do Sistema de Ficheiros',
	'DELETE_IMAGESET'				=> 'Apagar Conjunto de Imagens',
	'DELETE_IMAGESET_EXPLAIN'		=> 'Aqui pode remover o Conjunto de imagens seleccionado da Base de Dados. Por favor, note que não é possível anular esta acção. Deve exportar primeiro o Conjunto de Imagens para possível uso futuro.',
	'DELETE_STYLE'					=> 'Apagar Estilo',
	'DELETE_STYLE_EXPLAIN'			=> 'Aqui pode remover o Estilo seleccionado. Por favor, note que não é possível anular esta acção.',
	'DELETE_TEMPLATE'				=> 'Apagar Template',
	'DELETE_TEMPLATE_EXPLAIN'		=> 'Aqui pode remover o Template seleccionado da Base de Dados.  Por favor, note que não é possível anular esta ação. Deve exportar primeiro o Conjunto de Imagens para possível uso futuro.',
	'DELETE_THEME'					=> 'Apagar Tema',
	'DELETE_THEME_EXPLAIN'			=> 'Aqui pode remover o Tema seleccionado da Base de Dados.  Por favor, note que não é possível anular esta ação. Deve exportar primeiro o Conjunto de Imagens para possível uso futuro.',
	'DETAILS'						=> 'Detalhes',
	'DIMENSIONS_EXPLAIN'			=> 'Seleccionando Sim aqui irá incluir os parâmetros de largura/altura.',


	'EDIT_DETAILS_IMAGESET'			=> 'Editar detalhes do Conjunto de Imagens',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'	=> 'Aqui pode editar certos detalhes do Conjunto de Imagens como seu nome.',
	'EDIT_DETAILS_STYLE'			=> 'Editar Estilo',
	'EDIT_DETAILS_STYLE_EXPLAIN'	=> 'Usando o Formulário seguinte pode modificar um Estilo existente. Pode alterar a combinação do Template, Tema e Conjunto de Imagens que definem o Estilo próprio. Também pode criar um Estilo Padrão.',
	'EDIT_DETAILS_TEMPLATE'			=> 'Editar detalhes do Template',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'	=> 'Aqui pode editar certos detalhes da template, como o seu nome. Também tem a opção de trocar o armazenamento da folha de estilos do Sistema de Ficheiros para a Base de Dados e vice versa. Esta opção depende das configurações do PHP e se o Conjunto de Template pude ser guardado no servidor.',
	'EDIT_DETAILS_THEME'			=> 'Editar detalhes do Tema',
	'EDIT_DETAILS_THEME_EXPLAIN'	=> 'Aqui pode editar certos detalhes do Tema, por exemplo o nome. Pode optar por mudar a forma de armazenamento da Folha de Estilos do Sistema de Ficheiros para a Base de Dados e vice versa. Esta opção depende das configurações do PHP e se sua folha de estilos puder ser escrita no servidor.',
	'EDIT_IMAGESET'					=> 'Editar Conjunto de Imagens',
	'EDIT_IMAGESET_EXPLAIN'			=> 'Aqui pode editar as imagens individuais no qual define o conjunto de imagens. Também pode especificar dimensões para esta imagem. Dimensões são opcionais, especificá-los pode superar determinadas edições de renderização em alguns navegadores. Não especificando-os reduz um pouco o tamanho do registo na Base de Dados.',
	'EDIT_TEMPLATE'					=> 'Editar Template',
	'EDIT_TEMPLATE_EXPLAIN'			=> 'Aqui pode editar seu conjunto Template directamente. Por favor lembre-se que essas edições são permanentes e não podem serem desfeitas depois de enviadas. Se o PHP puder gravar ficheiros de templates na sua directoria de estilos algumas alterações aqui serão gravaras directamente nos ficheiros. Se o PHP não puder gravar estes ficheiros serão copiados para a Base de Dados e todas as alterações serão reflectidas apenas lá. Por favor tenha cuidado ao editar o seu template, lembre-se de fechar todas as variáveis de termos de substituição {XXXX} e indicações condicionais.',
	'EDIT_TEMPLATE_STORED_DB'		=> 'O ficheiro de Template não pode ser gravado mas o conjunto Template foi armazenado na Base de Dados contendo o ficheiro modificado.',
	'EDIT_THEME'					=> 'Editar Tema',
	'EDIT_THEME_EXPLAIN'			=> 'Aqui pode editar o Tema seleccionado, trocando cores, imagens, etc.',
	'EDIT_THEME_STORED_DB'			=> 'A folha de estilos não pode ser gravada sendo armazenada na Base de Dados contendo sua modificação.',
	'EDIT_THEME_STORE_PARSED'		=> 'O Tema requer que o seu stylesheet esteja analisado gramaticalmente. Isto só é possível se estiver armazenado na Base de Dados.',
	'EDITOR_DISABLED'				=> 'O Editor de Templates encontra-se desactivado.',
	'EXPORT'						=> 'Exportar',
	
	'FOREGROUND'					=> 'Primeiro Plano',
	'FONT_COLOUR'					=> 'Cor da Fonte',
	'FONT_FACE'						=> 'Fonte',
	'FONT_FACE_EXPLAIN'				=> 'Pode especificar múltiplas fontes separadas por vírgulas. Se um Utilizador não tiver a primeira fonte instalada, a próxima fonte funcionando será escolhida.',
	'FONT_SIZE'						=> 'Tamanho da Fonte',

	'GLOBAL_IMAGES'					=> 'Global',

	'HIDE_CSS'						=> 'Esconder código CSS',

	'IMAGE_WIDTH'					=> 'Largura da Imagem',
	'IMAGE_HEIGHT'					=> 'Altura da Imagem',
	'IMAGE'							=> 'Imagem',
	'IMAGE_NAME'					=> 'Nome da Imagem',
	'IMAGE_PARAMETER'				=> 'Parâmetro',
	'IMAGE_VALUE'					=> 'Valor',
	'IMAGESET_ADDED'				=> 'Novo conjunto de Imagens adicionado ao Sistema de Ficheiros.',
	'IMAGESET_ADDED_DB'				=> 'Novo conjunto de Imagens adicionado à Base de Dados.',
	'IMAGESET_DELETED'				=> 'Conjunto de Imagens apagado com sucesso.',
	'IMAGESET_DELETED_FS'			=> 'Conjunto de Imagens removido da Base de Dados mas alguns ficheiros ainda restam no Sistema de Ficheiros.',
	'IMAGESET_DETAILS_UPDATED'		=> 'Detalhes do Conjunto de Imagens actualizado com sucesso.',
	'IMAGESET_ERR_ARCHIVE'			=> 'Por favor seleccione um método de Ficheiro.',
	'IMAGESET_ERR_COPY_LONG'		=> 'O copyright não pode ter mais que 60 caracteres.',
	'IMAGESET_ERR_NAME_CHARS'		=> 'O nome do conjunto de Imagens pode conter apenas caracteres alfanuméricos, -, +, _ e espaço.',
	'IMAGESET_ERR_NAME_EXIST'		=> 'Um conjunto de Imagens com o mesmo nome já existe.',
	'IMAGESET_ERR_NAME_LONG'		=> 'O nome do conjunto de Imagens não pode conter mais que 30 caracteres.',
	'IMAGESET_ERR_NOT_IMAGESET'		=> 'O Ficheiro que especificou não contém um Conjunto de Imagens válido.',
	'IMAGESET_ERR_STYLE_NAME'		=> 'Tem que indicar um nome para este Conjunto de Imagens.',
	'IMAGESET_EXPORT'				=> 'Exportar Conjunto de Imagens',
	'IMAGESET_EXPORT_EXPLAIN'		=> 'Aqui pode exportar um Conjunto de Imagens no formulário de Ficheiro. Este Ficheiro deve conter todas os dados necessários para instalar o Conjunto de Imagens noutro Fórum. Deve seleccionar para transferir o Ficheiro directamente ou colocá-lo na pasta de arquivo para transferir depois por FTP.',
	'IMAGESET_EXPORTED'				=> 'Conjunto de Imagens exportado com sucesso e armazenado em %s.',
	'IMAGESET_NAME'					=> 'Nome do Conjunto de Imagens',
	'IMAGESET_REFRESHED'			=> 'Conjunto de Imagens actualizado com sucesso.',
	'IMAGESET_UPDATED'				=> 'Conjunto de Imagens actualizado com sucesso.',
	'ITALIC'						=> 'Itálico',

	'IMG_CAT_BUTTONS'				=> 'Botões Localizados',
	'IMG_CAT_CUSTOM'				=> 'Imagens Customizadas',
	'IMG_CAT_FOLDERS'				=> 'Ícones de Tópico',
	'IMG_CAT_FORUMS'				=> 'Ícones de Fórum',
	'IMG_CAT_ICONS'					=> 'Ícones Gerais',
	'IMG_CAT_LOGOS'					=> 'Logos',
	'IMG_CAT_POLLS'					=> 'Imagens de votação',
	'IMG_CAT_UI'					=> 'Elementos gerais da interface do Utilizador',
	'IMG_CAT_USER'					=> 'Imagens Adicionais',

	'IMG_SITE_LOGO'					=> 'Logo Principal',
	'IMG_UPLOAD_BAR'				=> 'Barra de progresso de upload',
	'IMG_POLL_LEFT'					=> 'Fim da votação à esquerda',
	'IMG_POLL_CENTER'				=> 'Centro da votação',
	'IMG_POLL_RIGHT'				=> 'Fim da votação à direita',
	'IMG_ICON_FRIEND'				=> 'Adicionar como amigo',
	'IMG_ICON_FOE'					=> 'Adicionar como inimigo',

	'IMG_FORUM_LINK'				=> 'Fórum Link',
	'IMG_FORUM_READ'				=> 'Fórum',
	'IMG_FORUM_READ_LOCKED'			=> 'Fórum Bloqueado',
	'IMG_FORUM_READ_SUBFORUM'		=> 'Sub-fórum',
	'IMG_FORUM_UNREAD'				=> 'Fórum com Mensagens não lidas',
	'IMG_FORUM_UNREAD_LOCKED'		=> 'Fórum Bloqueado com Mensagens não lidas',
	'IMG_FORUM_UNREAD_SUBFORUM'		=> 'Sub-fórum com Mensagens não lidas',
	'IMG_SUBFORUM_READ'				=> 'Sub-fórum',
	'IMG_SUBFORUM_UNREAD'			=> 'Sub-fórum com Mensagens não lidas',

	'IMG_TOPIC_MOVED'				=> 'Tópico movido',

	'IMG_TOPIC_READ'				=> 'Tópico',
	'IMG_TOPIC_READ_MINE'			=> 'Tópico enviado para',
	'IMG_TOPIC_READ_HOT'			=> 'Tópico Popular',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Tópico Popular enviado para',
	'IMG_TOPIC_READ_LOCKED'			=> 'Tópico Bloqueado',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Tópico Bloqueado enviado para',

	'IMG_TOPIC_UNREAD'				=> 'Tópico Mensagens não lidas',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Tópico definido para não lidas',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Tópico Popular Mensagens não lidas',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Tópico Popular definido para não lidas',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Tópico Bloqueado não lidas',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Tópico Bloqueado definido para não lidas',

	'IMG_STICKY_READ'				=> 'Tópico fixado',
	'IMG_STICKY_READ_MINE'			=> 'Tópico fixado definido para',
	'IMG_STICKY_READ_LOCKED'		=> 'Tópico fixado Bloqueado',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Tópico fixado Bloqueado definido para não lidas',
	'IMG_STICKY_UNREAD'				=> 'Tópico fixado mensagens não lidas',
	'IMG_STICKY_UNREAD_MINE'		=> 'Tópico fixado definido para não lidas',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Tópico fixado Bloqueado mensagens não lidas',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Tópico fixado Bloqueado definido para não lidas',

	'IMG_ANNOUNCE_READ'				=> 'Anúncio',
	'IMG_ANNOUNCE_READ_MINE'		=> 'Anúncio definido para',
	'IMG_ANNOUNCE_READ_LOCKED'		=> 'Anúncio Bloqueado',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'	=> 'Anúncio Bloqueado definido para',
	'IMG_ANNOUNCE_UNREAD'			=> 'Anúncio mensagens não lidas',
	'IMG_ANNOUNCE_UNREAD_MINE'		=> 'Anúncio definido para não lidas',
	'IMG_ANNOUNCE_UNREAD_LOCKED'	=> 'Anúncio Bloqueado mensagens não lidas',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'=> 'Anúncio Bloqueado definido para não lidas',

	'IMG_GLOBAL_READ'				=> 'Global',
	'IMG_GLOBAL_READ_MINE'			=> 'Global definido para',
	'IMG_GLOBAL_READ_LOCKED'		=> 'Global Bloqueado',
	'IMG_GLOBAL_READ_LOCKED_MINE'	=> 'Global Bloqueado definido para',
	'IMG_GLOBAL_UNREAD'				=> 'Global mensagens não lidas',
	'IMG_GLOBAL_UNREAD_MINE'		=> 'Global definido para não lidas',
	'IMG_GLOBAL_UNREAD_LOCKED'		=> 'Global Bloqueado mensagens não lidas',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'	=> 'Global Bloqueado definido para não lidas',

	'IMG_PM_READ'					=> 'Mensagem Privadas Lidas',
	'IMG_PM_UNREAD'					=> 'Mensagem Privada Não Lida',

	'IMG_ICON_BACK_TOP'				=> 'Topo',

	'IMG_ICON_CONTACT_AIM'			=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'		=> 'Enviar Email',
	'IMG_ICON_CONTACT_ICQ'			=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'		=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'			=> 'MSNM',
	'IMG_ICON_CONTACT_PM'			=> 'Enviar Mensagem',
	'IMG_ICON_CONTACT_YAHOO'		=> 'YIM',
	'IMG_ICON_CONTACT_WWW'			=> 'Sítio web',

	'IMG_ICON_POST_DELETE'			=> 'Apagar Mensagem',
	'IMG_ICON_POST_EDIT'			=> 'Editar Mensagem',
	'IMG_ICON_POST_INFO'			=> 'Exibir detalhes da mensagem',
	'IMG_ICON_POST_QUOTE'			=> 'Citar Mensagem',
	'IMG_ICON_POST_REPORT'			=> 'Reportar Mensagem',
	'IMG_ICON_POST_TARGET'			=> 'Mini mensagem',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nova Mini mensagem',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Anexo',
	'IMG_ICON_TOPIC_LATEST'			=> 'Última Mensagem',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Última Mensagem não lida',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Mensagem Reportada',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Mensagem não Aprovada',

	'IMG_ICON_USER_ONLINE'			=> 'Utilizador ligado',
	'IMG_ICON_USER_OFFLINE'			=> 'Utilizador desligado',
	'IMG_ICON_USER_PROFILE'			=> 'Mostrar Perfil',
	'IMG_ICON_USER_SEARCH'			=> 'Procurar Mensagem',
	'IMG_ICON_USER_WARN'			=> 'Avisar Utilizador',

	'IMG_BUTTON_PM_FORWARD'			=> 'Encaminhar Mensagem Privada',
	'IMG_BUTTON_PM_NEW'				=> 'Nova Mensagem Privada',
	'IMG_BUTTON_PM_REPLY'			=> 'Responder',
	'IMG_BUTTON_TOPIC_LOCKED'		=> 'Tópico Bloqueado',
	'IMG_BUTTON_TOPIC_NEW'			=> 'Novo Tópico',
	'IMG_BUTTON_TOPIC_REPLY'		=> 'Responder Mensagem',

	'IMG_USER_ICON1'				=> 'Imagem definida pelo Utilizador 1',
	'IMG_USER_ICON2'				=> 'Imagem definida pelo Utilizador 2',
	'IMG_USER_ICON3'				=> 'Imagem definida pelo Utilizador 3',
	'IMG_USER_ICON4'				=> 'Imagem definida pelo Utilizador 4',
	'IMG_USER_ICON5'				=> 'Imagem definida pelo Utilizador 5',
	'IMG_USER_ICON6'				=> 'Imagem definida pelo Utilizador 6',
	'IMG_USER_ICON7'				=> 'Imagem definida pelo Utilizador 7',
	'IMG_USER_ICON8'				=> 'Imagem definida pelo Utilizador 8',
	'IMG_USER_ICON9'				=> 'Imagem definida pelo Utilizador 9',
	'IMG_USER_ICON10'				=> 'Imagem definida pelo Utilizador 10',
	'INACTIVE_STYLES'				=> 'Estilos inactivos',

	'INCLUDE_DIMENSIONS'			=> 'Incluir Dimensões',
	'INCLUDE_IMAGESET'				=> 'Incluir Conjunto de Imagens',
	'INCLUDE_TEMPLATE'				=> 'Incluir Template',
	'INCLUDE_THEME'					=> 'Incluir Tema',
	'INHERITING_FROM'				=> 'Heranças de',
	'INSTALL_IMAGESET'				=> 'Instalar Conjunto de Imagens',
	'INSTALL_IMAGESET_EXPLAIN'		=> 'Aqui pode instalar os Conjunto de Imagens seleccionados. Pode editar certos detalhes se quiser ou usar a instalação Padrão.',
	'INSTALL_STYLE'					=> 'Instalar Estilo',
	'INSTALL_STYLE_EXPLAIN'			=> 'Aqui pode instalar um novo Estilo e elementos correspondentes. Se já tem instalados os elementos relevantes do Estilo serão substituídos. Alguns Estilos necessitam que os elementos do Estilo já estejam instalados. Se tentar instalar um Estilo e os seus elementos ainda não estiverem instalados será avisado.',
	'INSTALL_TEMPLATE'				=> 'Instalar Template',
	'INSTALL_TEMPLATE_EXPLAIN'		=> 'Aqui pode instalar um novo Template. As opções disponíveis dependem da configuração do servidor.',
	'INSTALL_THEME'					=> 'Instalar Tema',
	'INSTALL_THEME_EXPLAIN'			=> 'Aqui pode instalar o Tema seleccionado. Pode usar a instalação Padrão ou editar alguns detalhes.',
	'INSTALLED_IMAGESET'			=> 'Conjuntos de Imagens Instalados',
	'INSTALLED_STYLE'				=> 'Estilos Instalados',
	'INSTALLED_TEMPLATE'			=> 'Templates Instalados',
	'INSTALLED_THEME'				=> 'Temas Instalados',

	'KEEP_IMAGESET'					=> 'Manter “%s” conjunto de imagens',
	'KEEP_TEMPLATE'					=> 'Manter “%s” Template',
	'KEEP_THEME'					=> 'Manter “%s” Tema',

	'LINE_SPACING'					=> 'Espaçamento da Linha',
	'LOCALISED_IMAGES'				=> 'Localizado',
	'LOCATION_DISABLED_EXPLAIN'		=> 'Esta configuração é hereditária e não pode ser modificada.',	

	'NO_CLASS'						=> 'Não há nenhuma classe na folha de estilos.',
	'NO_IMAGESET'					=> 'Não há nenhum Conjunto de Imagens no Sistema de Ficheiros.',
	'NO_IMAGE'						=> 'Nenhuma Imagem',
	'NO_IMAGE_ERROR'				=> 'Não há nenhuma imagem no Sistema de Ficheiros.',
	'NO_STYLE'						=> 'Não há nenhum Estilo no Sistema de Ficheiros.',
	'NO_TEMPLATE'					=> 'Não há nenhum Template no Sistema de Ficheiros.',
	'NO_THEME'						=> 'Não há nenhum Tema no Sistema de Ficheiros.',
	'NO_UNINSTALLED_IMAGESET'		=> 'Não há nenhum Pacote de Imagens desinstalado.',
	'NO_UNINSTALLED_STYLE'			=> 'Não há nenhum Estilo desinstalado.',
	'NO_UNINSTALLED_TEMPLATE'		=> 'Não há nenhum Template desinstalado.',
	'NO_UNINSTALLED_THEME'			=> 'Não há nenhum Tema desinstalado.',
	'NO_UNIT'						=> 'Nenhum',

	'ONLY_IMAGESET'					=> 'Este é o único Conjunto de Imagens restante, não pode apagá-lo.',
	'ONLY_STYLE'					=> 'Este é o único Estilo restante, não pode apagá-lo.',
	'ONLY_TEMPLATE'					=> 'Este é o único Template restante, não pode apagá-lo.',
	'ONLY_THEME'					=> 'Este é o único Tema restante, não pode apagá-lo.',
	'OPTIONAL_BASIS'				=> 'Bases Opcionais',

	'REFRESH'						=> 'Actualizar',
	'REPEAT_NO'						=> 'Nenhum',
	'REPEAT_X'						=> 'Apenas Horizontalmente',
	'REPEAT_Y'						=> 'Apenas Verticalmente',
	'REPEAT_ALL'					=> 'Ambas direcções',
	'REPLACE_IMAGESET'				=> 'Substituir Conjunto de Imagens por',
	'REPLACE_IMAGESET_EXPLAIN'		=> 'Este Conjunto de Imagens substituirá todos os Estilos que o usavam.',
	'REPLACE_STYLE'					=> 'Substituir Estilo por',
	'REPLACE_STYLE_EXPLAIN'			=> 'Este Estilo substituirá o anterior nos Utilizadores que o usavam.',
	'REPLACE_TEMPLATE'				=> 'Substituir Template por',
	'REPLACE_TEMPLATE_EXPLAIN'		=> 'Este Template substituirá todos os Estilos que o usavam.',
	'REPLACE_THEME'					=> 'Substituir Tema por',
	'REPLACE_THEME_EXPLAIN'			=> 'Este Tema substituirá todos os Estilos que o estiverem a usar.',
	'REPLACE_WITH_OPTION'			=> 'Substituir com “%s”',
	'REQUIRES_IMAGESET'				=> 'Este Estilo requer o Conjunto de Imagens %s para ser instalado.',
	'REQUIRES_TEMPLATE'				=> 'Este Estilo requer o Template %s para ser instalado.',
	'REQUIRES_THEME'				=> 'Este Estilo requer o Tema %s para ser instalado.',

	'SELECT_IMAGE'					=> 'Seleccionar Imagem',
	'SELECT_TEMPLATE'				=> 'Seleccionar Ficheiro do Template',
	'SELECT_THEME'					=> 'Seleccionar Ficheiro de Tema',
	'SELECTED_IMAGE'				=> 'Imagem Seleccionada',
	'SELECTED_IMAGESET'				=> 'Conjunto de Imagens seleccionado',
	'SELECTED_TEMPLATE'				=> 'Template seleccionado',
	'SELECTED_TEMPLATE_FILE'		=> 'Ficheiro de Template seleccionado',
	'SELECTED_THEME'				=> 'Tema seleccionado',
	'SELECTED_THEME_FILE'			=> 'Ficheiro de Tema seleccionado',
	'STORE_DATABASE'				=> 'Base de Dados',
	'STORE_FILESYSTEM'				=> 'Sistema de Ficheiros',
	'STYLE_ACTIVATE'				=> 'Activar',
	'STYLE_ACTIVE'					=> 'Activo',
	'STYLE_ADDED'					=> 'Estilo adicionado com sucesso.',
	'STYLE_DEACTIVATE'				=> 'Desactivar',
	'STYLE_DEFAULT'					=> 'Tornar Estilo Padrão',
	'STYLE_DELETED'					=> 'Estilo apagado com sucesso.',
	'STYLE_DETAILS_UPDATED'			=> 'Estilo editado com sucesso.',
	'STYLE_ERR_ARCHIVE'				=> 'Por favor seleccione um método de Ficheiro.',
	'STYLE_ERR_COPY_LONG'			=> 'O copyright não pode ter mais que 60 caracteres.',
	'STYLE_ERR_MORE_ELEMENTS'		=> 'Deve seleccionar pelo menos um Estilo.',
	'STYLE_ERR_NAME_CHARS'			=> 'O nome do Estilo pode conter apenas caracteres alfanuméricos, -, +, _ e espaço.',
	'STYLE_ERR_NAME_EXIST'			=> 'Um Estilo com o mesmo nome já existe.',
	'STYLE_ERR_NAME_LONG'			=> 'O nome do Estilo não pode ter mais que 30 caracteres.',
	'STYLE_ERR_NO_IDS'				=> 'Tem que seleccionar um template, Tema e Conjunto de imagens para este Estilo.',
	'STYLE_ERR_NOT_STYLE'			=> 'O Ficheiro importado ou enviado não contém um ficheiro válido de Estilo.',
	'STYLE_ERR_STYLE_NAME'			=> 'Tem que especificar um nome para este Estilo.',
	'STYLE_EXPORT'					=> 'Exportar Estilo',
	'STYLE_EXPORT_EXPLAIN'			=> 'Aqui pode exportar um Estilo no Formulário de Ficheiro. Um Estilo não precisa conter todos os elementos mas deve conter pelo menos um. Por exemplo, se tivesse criado um novo Tema e Conjunto de Imagens para um Template, pode exportar o Tema e o Conjunto de Imagens e omitir o Template. Deve seleccionar entre transferir o Ficheiro directamente ou enviá-lo para a sua pasta de arquivo para transferir depois por FTP.',
	'STYLE_EXPORTED'				=> 'Estilo exportado com sucesso e armazenado em %s.',
	'STYLE_IMAGESET'				=> 'Conjunto de Imagens',
	'STYLE_NAME'					=> 'Nome do Estilo',
	'STYLE_TEMPLATE'				=> 'Template',
	'STYLE_THEME'					=> 'Tema',
	'STYLE_USED_BY'					=> 'Usado por (incluindo Motor de Busca)',

	'TEMPLATE_ADDED'				=> 'Conjunto de Template adicionado e armazenado no Sistema de Ficheiros.',
	'TEMPLATE_ADDED_DB'				=> 'Conjunto de Template adicionado e armazenado na Base de Dados.',
	'TEMPLATE_CACHE'				=> 'Cache do Template',
	'TEMPLATE_CACHE_EXPLAIN'		=> 'Por Padrão o phpBB armazena em cache a versão compilada dos Templates. Isto reduz a carga do Servidor para cada vez que a página é vista e também reduz o tempo de geração da página. Aqui pode ver o status do cache de cada ficheiro e apagar ficheiros individuais ou o cache todo.',
	'TEMPLATE_CACHE_CLEARED'		=> 'Cache do Template limpo com sucesso.',
	'TEMPLATE_CACHE_EMPTY'			=> 'Não há Templates em cache.',
	'TEMPLATE_DELETED'				=> 'Pacote de Templates apagado com sucesso.',
	'TEMPLATE_DELETE_DEPENDENT'		=> 'O Template seleccionado não pode ser excluído porque existem uma ou mais definições herdadas:',
	'TEMPLATE_DELETED_FS'			=> 'Pacote de Templates removido da Base de Dados mas alguns ficheiros ainda restam no Sistema de Ficheiros.',
	'TEMPLATE_DETAILS_UPDATED'		=> 'Detalhes da Template actualizados com sucesso.',
	'TEMPLATE_EDITOR'				=> 'Template editor código HTML',
	'TEMPLATE_EDITOR_HEIGHT'		=> 'Altura do editor de Template',
	'TEMPLATE_ERR_ARCHIVE'			=> 'Por favor seleccione um método de Ficheiro.',
	'TEMPLATE_ERR_CACHE_READ'		=> 'A directoria de cache usada para armazenar as versões em cache dos Ficheiros de Template não pode ser aberta.',
	'TEMPLATE_ERR_COPY_LONG'		=> 'O copyright não pode ter mais que 60 caracteres.',
	'TEMPLATE_ERR_NAME_CHARS'		=> 'O nome do Template pode conter apenas caracteres alfanuméricos, -, +, _ e espaço.',
	'TEMPLATE_ERR_NAME_EXIST'		=> 'Já existe um Conjunto de Template com o mesmo nome.',
	'TEMPLATE_ERR_NAME_LONG'		=> 'O nome do Template não pode ter mais que 30 caracteres.',
	'TEMPLATE_ERR_NOT_TEMPLATE'		=> 'O Ficheiro especificado não contém um Conjunto de Template válido.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'O novo Template escolhido requer o Template %s para ser instalado e não herdando de si mesmo.',
	'TEMPLATE_ERR_STYLE_NAME'		=> 'Tem que especificar um nome válido para este template.',
	'TEMPLATE_EXPORT'				=> 'Exportar Templates',
	'TEMPLATE_EXPORT_EXPLAIN'		=> 'Aqui pode exportar um Conjunto de Templates no Formulário de um Ficheiro. Este Ficheiro deve conter todos os Ficheiros necessários para instalar os Templates em outros Fóruns. Pode seleccionar para transferir o Ficheiro directamente ou colocá-lo na sua pasta de arquivo para transferir depois por FTP.',
	'TEMPLATE_EXPORTED'				=> 'Templates exportados com sucesso e armazenados em %s.',
	'TEMPLATE_FILE'					=> 'Ficheiro de Template',
	'TEMPLATE_FILE_UPDATED'			=> 'Ficheiro de Template actualizado com sucesso.',
	'TEMPLATE_INHERITS'				=> 'Este Template tem heranças de %s e então não pode ter uma configuração de arquivo diferente como um Super Template.',
	'TEMPLATE_LOCATION'				=> 'Armazenar Templates em',
	'TEMPLATE_LOCATION_EXPLAIN'		=> 'Imagens são sempre armazenadas no Sistema de Ficheiros.',
	'TEMPLATE_NAME'					=> 'Nome do Template',
	'TEMPLATE_FILE_NOT_WRITABLE'	=> 'Não foi possível gravar o arquivo do estilo %s. Por favor confira as permissões para o directório e respectivos ficheiros.',
	'TEMPLATE_REFRESHED'			=> 'Template actualizado com sucesso.',

	'THEME_ADDED'					=> 'Novo Tema adicionado no Sistema de Ficheiros.',
	'THEME_ADDED_DB'				=> 'Novo Tema adicionado à Base de Dados.',
	'THEME_CLASS_ADDED'				=> 'Classe customizada adicionada com sucesso.',
	'THEME_DELETED'					=> 'Tema apagado com sucesso.',
	'THEME_DELETED_FS'				=> 'Tema removido da Base de Dados mas os Ficheiros ainda estão no Sistema de Ficheiros.',
	'THEME_DETAILS_UPDATED'			=> 'Detalhes do Tema actualizado com sucesso.',
	'THEME_EDITOR'					=> 'Editor de Tema',
	'THEME_EDITOR_HEIGHT'			=> 'Altura do editor de Tema',
	'THEME_ERR_ARCHIVE'				=> 'Por favor seleccione um método de Ficheiro.',
	'THEME_ERR_CLASS_CHARS'			=> 'Apenas caracteres alfanuméricos e ., :, -, _ e # são validos em nomes de classes.',
	'THEME_ERR_COPY_LONG'			=> 'O copyright não pode ter mais que 60 caracteres.',
	'THEME_ERR_NAME_CHARS'			=> 'O nome do Tema pode conter apenas caracteres alfanuméricos, -, +, _ e espaço.',
	'THEME_ERR_NAME_EXIST'			=> 'Já existe um Tema com o mesmo nome.',
	'THEME_ERR_NAME_LONG'			=> 'O nome do Tema não pode ter mais do que 30 caracteres.',
	'THEME_ERR_NOT_THEME'			=> 'O Ficheiro que especificou não contém um Tema válido.',
	'THEME_ERR_REFRESH_FS'			=> 'Este Tema está armazenado no Sistema de Ficheiros e não há necessidade de actualizá-lo.',
	'THEME_ERR_STYLE_NAME'			=> 'Tem que fornecer um nome para este tema.',
	'THEME_FILE'					=> 'Ficheiro de Tema',
	'THEME_EXPORT'					=> 'Exportar Tema',
	'THEME_EXPORT_EXPLAIN'			=> 'Aqui pode exportar um Tema no Formulário ou Ficheiro. Este arquivo deve conter todas as informações necessárias para instalar o Tema noutro Fórum. Pode seleccionar entre transferir o Ficheiro directamente ou colocá-lo na sua pasta de arquivo para transferir depois por FTP.',
	'THEME_EXPORTED'				=> 'Tema exportado com sucesso e armazenado em %s.',
	'THEME_LOCATION'				=> 'Armazenar folha de Estilo em',
	'THEME_LOCATION_EXPLAIN'		=> 'Imagens são sempre armazenadas no Sistema de Ficheiros.',
	'THEME_NAME'					=> 'Nome do Tema',
	'THEME_REFRESHED'				=> 'Tema actualizado com sucesso.',
	'THEME_UPDATED'					=> 'O Tema seleccionado foi actualizado com sucesso.',

	'UNDERLINE'						=> 'Sublinhado',
	'UNINSTALLED_IMAGESET'			=> 'Conjunto de Imagens desinstalados',
	'UNINSTALLED_STYLE'				=> 'Estilos desinstalados',
	'UNINSTALLED_TEMPLATE'			=> 'Templates desinstalados',
	'UNINSTALLED_THEME'				=> 'Temas desinstalados',
	'UNSET'							=> 'Indefinido',

));

?>