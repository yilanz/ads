<?php

/*
  +---------------------------------------------------------------------------+
  | Revive Adserver                                                           |
  | http://www.revive-adserver.com                                            |
  |                                                                           |
  | Copyright: See the COPYRIGHT.txt file.                                    |
  | License: GPLv2 or later, see the LICENSE.txt file.                        |
  +---------------------------------------------------------------------------+
 */

// Set text direction and characterset
$GLOBALS['phpAds_TextDirection'] = "ltr";
$GLOBALS['phpAds_TextAlignRight'] = "right";
$GLOBALS['phpAds_TextAlignLeft'] = "left";
$GLOBALS['phpAds_CharSet'] = "UTF-8";

$GLOBALS['phpAds_DecimalPoint'] = ",";
$GLOBALS['phpAds_ThousandsSeperator'] = ".";

// Date & time configuration
$GLOBALS['date_format'] = "%d-%m-%Y";
$GLOBALS['time_format'] = "%H:%M:%S";
$GLOBALS['minute_format'] = "%H:%M";
$GLOBALS['month_format'] = "%m-%Y";
$GLOBALS['day_format'] = "%d-%m";
$GLOBALS['week_format'] = "%W-%Y";
$GLOBALS['weekiso_format'] = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting'] = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting'] = "#,##0.000;-#,##0.000;-";

/* ------------------------------------------------------- */
/* Translations                                          */
/* ------------------------------------------------------- */

$GLOBALS['strHome'] = "Principal";
$GLOBALS['strHelp'] = "Ajuda";
$GLOBALS['strStartOver'] = "Re-iniciar";
$GLOBALS['strShortcuts'] = "Atalhos";
$GLOBALS['strActions'] = "Ação";
$GLOBALS['strAndXMore'] = "e mais %s";
$GLOBALS['strAdminstration'] = "Inventário";
$GLOBALS['strMaintenance'] = "Manutenção";
$GLOBALS['strProbability'] = "Probabilidade";
$GLOBALS['strInvocationcode'] = "Código de inserção";
$GLOBALS['strBasicInformation'] = "Informações básicas";
$GLOBALS['strAppendTrackerCode'] = "Anexar código de rastreamento";
$GLOBALS['strOverview'] = "Visão geral";
$GLOBALS['strSearch'] = "Bu<u>s</u>ca";
$GLOBALS['strDetails'] = "Detalhes";
$GLOBALS['strUpdateSettings'] = "Atualizar Configurações";
$GLOBALS['strCheckForUpdates'] = "Procurar atualizações";
$GLOBALS['strWhenCheckingForUpdates'] = "Ao verificar atualizações";
$GLOBALS['strCompact'] = "Compactar";
$GLOBALS['strUser'] = "Usuário";
$GLOBALS['strDuplicate'] = "Duplicar";
$GLOBALS['strCopyOf'] = "Cópia de";
$GLOBALS['strMoveTo'] = "Mover para";
$GLOBALS['strDelete'] = "Remover";
$GLOBALS['strActivate'] = "Ativar";
$GLOBALS['strConvert'] = "Converter";
$GLOBALS['strRefresh'] = "Recarregar";
$GLOBALS['strSaveChanges'] = "Salvar alterações";
$GLOBALS['strUp'] = "Para cima";
$GLOBALS['strDown'] = "Para baixo";
$GLOBALS['strSave'] = "Salvar";
$GLOBALS['strCancel'] = "Cancelar";
$GLOBALS['strBack'] = "Voltar";
$GLOBALS['strPrevious'] = "Anterior";
$GLOBALS['strNext'] = "Próximo";
$GLOBALS['strYes'] = "Sim";
$GLOBALS['strNo'] = "Não";
$GLOBALS['strNone'] = "Nenhum";
$GLOBALS['strCustom'] = "Personalizado";
$GLOBALS['strDefault'] = "Padrão";
$GLOBALS['strUnknown'] = "Desconhecido";
$GLOBALS['strUnlimited'] = "Ilimitado";
$GLOBALS['strUntitled'] = "Sem título";
$GLOBALS['strAll'] = "todos";
$GLOBALS['strAverage'] = "Média";
$GLOBALS['strOverall'] = "Geral";
$GLOBALS['strTotal'] = "Total";
$GLOBALS['strFrom'] = "De";
$GLOBALS['strTo'] = "para";
$GLOBALS['strAdd'] = "Adicionar";
$GLOBALS['strLinkedTo'] = "vinculado com";
$GLOBALS['strDaysLeft'] = "Dias restantes";
$GLOBALS['strCheckAllNone'] = "Selecionar todos/nenhum";
$GLOBALS['strKiloByte'] = "KB";
$GLOBALS['strExpandAll'] = "<u>E</u>xpandir todos";
$GLOBALS['strCollapseAll'] = "Fe<u>c</u>har todos";
$GLOBALS['strShowAll'] = "Mostrar todos";
$GLOBALS['strNoAdminInterface'] = "A tela de administração foi desligada para manutenção. Isso não afeta a entrega de suas campanhas.";
$GLOBALS['strFieldStartDateBeforeEnd'] = "A data 'De' deve ser anterior à data 'Até'";
$GLOBALS['strFieldContainsErrors'] = "Estes campos contêm erros:";
$GLOBALS['strFieldFixBeforeContinue1'] = "Antes de continuar você precisa";
$GLOBALS['strFieldFixBeforeContinue2'] = "para corrigir estes erros.";
$GLOBALS['strMiscellaneous'] = "Miscelânea";
$GLOBALS['strCollectedAllStats'] = "Todas estatísticas";
$GLOBALS['strCollectedToday'] = "Hoje";
$GLOBALS['strCollectedYesterday'] = "Ontem";
$GLOBALS['strCollectedThisWeek'] = "Esta semana";
$GLOBALS['strCollectedLastWeek'] = "Semana passada";
$GLOBALS['strCollectedThisMonth'] = "Este mês";
$GLOBALS['strCollectedLastMonth'] = "Mês passado";
$GLOBALS['strCollectedLast7Days'] = "Últimos 7 dias";
$GLOBALS['strCollectedSpecificDates'] = "Datas específicas";
$GLOBALS['strValue'] = "Valor";
$GLOBALS['strWarning'] = "Alerta";
$GLOBALS['strNotice'] = "Aviso";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "O painel não pode ser exibido";
$GLOBALS['strNoCheckForUpdates'] = "O painel não pode ser exibido a menos que a<br />configuração de verificação de atualizações esteja habilitada.";
$GLOBALS['strEnableCheckForUpdates'] = "Por favor, ative a configuração <a href='account-settings-update.php' target='_top'> verificar se há atualizações</a> na página <br/> <a href='account-settings-update.php' target='_top'> Atualizar configurações de</a>.";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode'] = "código";
$GLOBALS['strDashboardSystemMessage'] = "Mensagem do Sistema";
$GLOBALS['strDashboardErrorHelp'] = "Caso este erro ocorra novamente, po favor descreva em detalhes no <a href='http://forum.openx.org/'>Fórum OpenX</a>.";

// Priority
$GLOBALS['strPriority'] = "Prioridade";
$GLOBALS['strPriorityLevel'] = "Nível de prioridade";
$GLOBALS['strOverrideAds'] = "Substituir peças publicitárias da campanha";
$GLOBALS['strHighAds'] = "Contratar peças publicitárias de campanha";
$GLOBALS['strECPMAds'] = "eCPM de peças publicitárias da campanha";
$GLOBALS['strLowAds'] = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations'] = "Delivery rules";
$GLOBALS['strNoLimitations'] = "No delivery rules";
$GLOBALS['strCapping'] = "Excesso";

// Properties
$GLOBALS['strName'] = "Nome";
$GLOBALS['strSize'] = "Tamanho";
$GLOBALS['strWidth'] = "Largura";
$GLOBALS['strHeight'] = "Altura";
$GLOBALS['strTarget'] = "Alvo (target)";
$GLOBALS['strLanguage'] = "Língua";
$GLOBALS['strDescription'] = "Descrição";
$GLOBALS['strVariables'] = "Variáveis";
$GLOBALS['strID'] = "ID";
$GLOBALS['strComments'] = "Comentários";

// User access
$GLOBALS['strWorkingAs'] = "Trabalhando como";
$GLOBALS['strWorkingAs_Key'] = "<u>W</u>orking as";
$GLOBALS['strWorkingAs'] = "Trabalhando como";
$GLOBALS['strSwitchTo'] = "Alternar para";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor'] = "%s para ....";
$GLOBALS['strNoAccountWithXInNameFound'] = "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed'] = "Recently used";
$GLOBALS['strLinkUser'] = "Adicionar usuário";
$GLOBALS['strLinkUser_Key'] = "Vincular <u>u</u>suário";
$GLOBALS['strUsernameToLink'] = "Nome do usuário do usuário que será adicionado";
$GLOBALS['strNewUserWillBeCreated'] = "Novo usuário será criado";
$GLOBALS['strToLinkProvideEmail'] = "Para adicionar um usuário, informe o e-mail do mesmo";
$GLOBALS['strToLinkProvideUsername'] = "Para adicionar um usuário, informe o nome de usuário";
$GLOBALS['strUserLinkedToAccount'] = "O usuário foi adicionado à conta";
$GLOBALS['strUserAccountUpdated'] = "Conta de usuário atualizada";
$GLOBALS['strUserUnlinkedFromAccount'] = "O usuário foi removido da conta";
$GLOBALS['strUserWasDeleted'] = "O usuário foi removido";
$GLOBALS['strUserNotLinkedWithAccount'] = "Este usuário não esta vinculado a esta conta";
$GLOBALS['strCantDeleteOneAdminUser'] = "Você não pode remover um usuário. Pelo menos um usuário deve estar vinculado à conta de administração";
$GLOBALS['strLinkUserHelp'] = "To add an <b>existing user</b>, type the %1\$s and click %2\$s <br />To add a <b>new user</b>, type the desired %1\$s and click %2\$s";
$GLOBALS['strLinkUserHelpUser'] = "Nome de usuário";
$GLOBALS['strLinkUserHelpEmail'] = "Endereço de e-mail";
$GLOBALS['strLastLoggedIn'] = "Adicionar <u>u</u>suário";
$GLOBALS['strDateLinked'] = "Data de vinculação";

// Login & Permissions
$GLOBALS['strUserAccess'] = "Acesso de usuário";
$GLOBALS['strAdminAccess'] = "Acesso de administrador";
$GLOBALS['strUserProperties'] = "Dados do usuário";
$GLOBALS['strPermissions'] = "Permissões";
$GLOBALS['strAuthentification'] = "Autenticação";
$GLOBALS['strWelcomeTo'] = "Bem vindo a";
$GLOBALS['strEnterUsername'] = "Entre com seu nome de usuário e senha para se logar";
$GLOBALS['strEnterBoth'] = "Por favor digite ambos seu nome de usuário e senha";
$GLOBALS['strEnableCookies'] = "You need to enable cookies before you can use {$PRODUCT_NAME}";
$GLOBALS['strSessionIDNotMatch'] = "Erro no cookie de sessão, por favor faça login novamente";
$GLOBALS['strLogin'] = "Login ";
$GLOBALS['strLogout'] = "Sair";
$GLOBALS['strUsername'] = "Nome de usuário";
$GLOBALS['strPassword'] = "Senha";
$GLOBALS['strPasswordRepeat'] = "Repita a senha";
$GLOBALS['strAccessDenied'] = "Acesso negado";
$GLOBALS['strUsernameOrPasswordWrong'] = "O nome de usuário e/ou senha estão incorretos. Por favor tente novamente.";
$GLOBALS['strPasswordWrong'] = "A senha esta incorreta.";
$GLOBALS['strNotAdmin'] = "Sua conta não possui as permissões necessárias para utilizar esta função, você pode logar em outra conta para utilizá-la. Clique <a href='logout.php'>aqui</a> para logar como um usuário diferente.";
$GLOBALS['strDuplicateClientName'] = "O nome de usuário fornecido já existe, por favor escolha outro.";
$GLOBALS['strInvalidPassword'] = "A nova senha é inválida, use uma senha diferente.";
$GLOBALS['strInvalidEmail'] = "O e-mail não possui a formatação correta, por favor informe um e-mail válido.";
$GLOBALS['strNotSamePasswords'] = "As senhas fornecidas não são iguais";
$GLOBALS['strRepeatPassword'] = "Repetir senha";
$GLOBALS['strDeadLink'] = "Seu link é inválido";
$GLOBALS['strNoPlacement'] = "A campanha selecionada não existe. Tente este <a href='{link}'>link</a>.";
$GLOBALS['strNoAdvertiser'] = "O anunciante escolhido não existe. Tente este <a href='{link}'>link</a>.";

// General advertising
$GLOBALS['strRequests'] = "Requisições";
$GLOBALS['strImpressions'] = "Impressões";
$GLOBALS['strClicks'] = "Cliques";
$GLOBALS['strConversions'] = "Conversões";
$GLOBALS['strCTRShort'] = "CTR";
$GLOBALS['strCNVRShort'] = "SR";
$GLOBALS['strCTR'] = "CTR";
$GLOBALS['strTotalClicks'] = "Total de cliques";
$GLOBALS['strTotalConversions'] = "Total de conversões";
$GLOBALS['strDateTime'] = "Data e Hora";
$GLOBALS['strTrackerID'] = "ID do rastreador";
$GLOBALS['strTrackerName'] = "Nome do rastreador";
$GLOBALS['strTrackerImageTag'] = "Tag de imagem";
$GLOBALS['strTrackerJsTag'] = "Tag de javascript";
$GLOBALS['strTrackerAlwaysAppend'] = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners'] = "Banners";
$GLOBALS['strCampaigns'] = "Campanhas";
$GLOBALS['strCampaignID'] = "ID da campanha";
$GLOBALS['strCampaignName'] = "Nome da campanha";
$GLOBALS['strCountry'] = "País";
$GLOBALS['strStatsAction'] = "Ação";
$GLOBALS['strWindowDelay'] = "Atraso da janela";
$GLOBALS['strStatsVariables'] = "Variáveis";

// Finance
$GLOBALS['strFinanceCPM'] = "CPM ";
$GLOBALS['strFinanceCPC'] = "CPC";
$GLOBALS['strFinanceCPA'] = "CPA";
$GLOBALS['strFinanceMT'] = "Locação mensal";
$GLOBALS['strFinanceCTR'] = "CTR";
$GLOBALS['strFinanceCR'] = "CR";

// Time and date related
$GLOBALS['strDate'] = "Data";
$GLOBALS['strDay'] = "Dia";
$GLOBALS['strDays'] = "Dias";
$GLOBALS['strWeek'] = "Semana";
$GLOBALS['strWeeks'] = "Semanas";
$GLOBALS['strSingleMonth'] = "Mês";
$GLOBALS['strMonths'] = "Meses";
$GLOBALS['strDayOfWeek'] = "Dia da semana";


if (!isset($GLOBALS['strDayFullNames'])) {
    $GLOBALS['strDayFullNames'] = array();
}
$GLOBALS['strDayFullNames'][0] = 'Sunday';
$GLOBALS['strDayFullNames'][1] = 'Monday';
$GLOBALS['strDayFullNames'][2] = 'Tuesday';
$GLOBALS['strDayFullNames'][3] = 'Wednesday';
$GLOBALS['strDayFullNames'][4] = 'Thursday';
$GLOBALS['strDayFullNames'][5] = 'Friday';
$GLOBALS['strDayFullNames'][6] = 'Saturday';

if (!isset($GLOBALS['strDayShortCuts'])) {
    $GLOBALS['strDayShortCuts'] = array();
}
$GLOBALS['strDayShortCuts'][0] = 'Su';
$GLOBALS['strDayShortCuts'][1] = 'Mo';
$GLOBALS['strDayShortCuts'][2] = 'Tu';
$GLOBALS['strDayShortCuts'][3] = 'We';
$GLOBALS['strDayShortCuts'][4] = 'Th';
$GLOBALS['strDayShortCuts'][5] = 'Fr';
$GLOBALS['strDayShortCuts'][6] = 'Sa';

$GLOBALS['strHour'] = "Hora";
$GLOBALS['strSeconds'] = "segundos";
$GLOBALS['strMinutes'] = "minutos";
$GLOBALS['strHours'] = "horas";

// Advertiser
$GLOBALS['strClient'] = "Anunciante";
$GLOBALS['strClients'] = "Anunciantes";
$GLOBALS['strClientsAndCampaigns'] = "Anunciantes e campanhas";
$GLOBALS['strAddClient'] = "Adicionar novo anunciante";
$GLOBALS['strClientProperties'] = "Dados do anunciante";
$GLOBALS['strClientHistory'] = "Advertiser Statistics";
$GLOBALS['strNoClients'] = "Nenhum anunciante definido. Para criar uma campanha, <a href='advertiser-edit.php'>adicione um anunciante</a> primeiro.";
$GLOBALS['strConfirmDeleteClient'] = "Deseja realmente remover este anunciante?";
$GLOBALS['strConfirmDeleteClients'] = "Deseja realmente remover este anunciante?";
$GLOBALS['strHideInactive'] = "Ocultar inativos";
$GLOBALS['strInactiveAdvertisersHidden'] = "anunciante(s) inativo(s) ocultado(s)";
$GLOBALS['strAdvertiserSignup'] = "Inscrição de anunciante";
$GLOBALS['strAdvertiserCampaigns'] = "Anunciantes e campanhas";

// Advertisers properties
$GLOBALS['strContact'] = "Contato";
$GLOBALS['strContactName'] = "Nome de contato";
$GLOBALS['strEMail'] = "E-mail";
$GLOBALS['strSendAdvertisingReport'] = "Relatório de entrega e e-mails de campanha";
$GLOBALS['strNoDaysBetweenReports'] = "Número de dias entre relatórios de entrega de campanha";
$GLOBALS['strSendDeactivationWarning'] = "Enviar e-mail quando a campanha for automaticamente ativada/desativada";
$GLOBALS['strAllowClientModifyBanner'] = "Permitir que este usuário altere seus banners";
$GLOBALS['strAllowClientDisableBanner'] = "Permitir que este usuário desative seus próprios banners";
$GLOBALS['strAllowClientActivateBanner'] = "Permitir que este usuário ative seus próprios banners";
$GLOBALS['strAllowCreateAccounts'] = "Allow this user to manage this account's users";
$GLOBALS['strAdvertiserLimitation'] = "Mostre apenas um anúncio deste anunciante em uma página";
$GLOBALS['strAllowAuditTrailAccess'] = "Permitir que este usuário acesse o rastro de auditoria";

// Campaign
$GLOBALS['strCampaign'] = "Campanha";
$GLOBALS['strCampaigns'] = "Campanhas";
$GLOBALS['strAddCampaign'] = "Adicionar uma nova campanha";
$GLOBALS['strAddCampaign_Key'] = "Adicionar <u>n</u>ova campanha";
$GLOBALS['strCampaignForAdvertiser'] = "for advertiser";
$GLOBALS['strLinkedCampaigns'] = "Campanhas vinculadas";
$GLOBALS['strCampaignProperties'] = "Dados da campanha";
$GLOBALS['strCampaignOverview'] = "Visão geral da campanha";
$GLOBALS['strCampaignHistory'] = "Campaign Statistics";
$GLOBALS['strNoCampaigns'] = "There are currently no campaigns defined for this advertiser.";
$GLOBALS['strNoCampaignsAddAdvertiser'] = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strConfirmDeleteCampaign'] = "Deseja realmente remover esta campanha?";
$GLOBALS['strConfirmDeleteCampaigns'] = "Deseja realmente remover esta campanha?";
$GLOBALS['strShowParentAdvertisers'] = "Mostrar anunciantes superiores";
$GLOBALS['strHideParentAdvertisers'] = "Esconder anunciantes superiores";
$GLOBALS['strHideInactiveCampaigns'] = "Esconder campanhas inativas";
$GLOBALS['strInactiveCampaignsHidden'] = "campanha(s) inativa(s) ocultada(s)";
$GLOBALS['strPriorityInformation'] = "Prioridade em relação a outras campanhas";
$GLOBALS['strECPMInformation'] = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription'] = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strEcpmMinImpsDescription'] = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign'] = "Campanha";
$GLOBALS['strHiddenAd'] = "Anúncio";
$GLOBALS['strHiddenAdvertiser'] = "Anunciante";
$GLOBALS['strHiddenTracker'] = "Rastreador";
$GLOBALS['strHiddenWebsite'] = "Site";
$GLOBALS['strHiddenZone'] = "Zona";
$GLOBALS['strCampaignDelivery'] = "Campaign delivery";
$GLOBALS['strCompanionPositioning'] = "Entrega casada (com outras peças)";
$GLOBALS['strSelectUnselectAll'] = "Selecionar / Deselecionar Todos";
$GLOBALS['strCampaignsOfAdvertiser'] = "of"; //this is added between page name and advertiser name eg. 'Campaigns of Advertiser 1'
$GLOBALS['strShowCappedNoCookie'] = "Show capped ads if cookies are disabled";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns'] = "Calculated for all campaigns";
$GLOBALS['strCalculatedForThisCampaign'] = "Calculated for this campaign";
$GLOBALS['strLinkingZonesProblem'] = "Problem occurred when linking zones";
$GLOBALS['strUnlinkingZonesProblem'] = "Problem occurred when unlinking zones";
$GLOBALS['strZonesLinked'] = "zone(s) linked";
$GLOBALS['strZonesUnlinked'] = "zone(s) unlinked";
$GLOBALS['strZonesSearch'] = "Search";
$GLOBALS['strZonesSearchTitle'] = "Search zones and websites by name";
$GLOBALS['strNoWebsitesAndZones'] = "No websites and zones";
$GLOBALS['strNoWebsitesAndZonesText'] = "with \"%s\" in name";
$GLOBALS['strToLink'] = "to link";
$GLOBALS['strToUnlink'] = "to unlink";
$GLOBALS['strLinked'] = "Linked";
$GLOBALS['strAvailable'] = "Available";
$GLOBALS['strShowing'] = "Showing";
$GLOBALS['strEditZone'] = "Edit zone";
$GLOBALS['strEditWebsite'] = "Edit website";


// Campaign properties
$GLOBALS['strDontExpire'] = "Don't expire";
$GLOBALS['strActivateNow'] = "Start immediately";
$GLOBALS['strSetSpecificDate'] = "Set specific date";
$GLOBALS['strLow'] = "Baixa";
$GLOBALS['strHigh'] = "Alta";
$GLOBALS['strExpirationDate'] = "Data de término";
$GLOBALS['strExpirationDateComment'] = "A campanha terminará ao final deste dia";
$GLOBALS['strActivationDate'] = "Data de início";
$GLOBALS['strActivationDateComment'] = "A Campanha iniciará ao início deste dia";
$GLOBALS['strImpressionsRemaining'] = "Impressões restantes";
$GLOBALS['strClicksRemaining'] = "Cliques restantes";
$GLOBALS['strConversionsRemaining'] = "Conversões restantes";
$GLOBALS['strImpressionsBooked'] = "Impressões contratadas";
$GLOBALS['strClicksBooked'] = "Cliques contratados";
$GLOBALS['strConversionsBooked'] = "Conversões contratadas";
$GLOBALS['strCampaignWeight'] = "Set the campaign weight";
$GLOBALS['strAnonymous'] = "Esconder o anunciante e o site desta campanha";
$GLOBALS['strTargetPerDay'] = "por dia.";
$GLOBALS['strCampaignWarningRemnantNoWeight'] = "The type of this campaign has been set to Remnant,
but the weight is set to zero or it has not been
specified. This will cause the campaign to be
deactivated and its banners won't be delivered
until the weight has been set to a valid number.

Are you sure you want to continue?";
$GLOBALS['strCampaignWarningEcpmNoRevenue'] = "This campaign uses eCPM optimisation
but the 'revenue' is set to zero or it has not been specified.
This will cause the campaign to be deactivated
and its banners won't be delivered until the
revenue has been set to a valid number.

Are you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight'] = "The type of this campaign has been set to Override,
but the weight is set to zero or it has not been
specified. This will cause the campaign to be
deactivated and its banners won't be delivered
until the weight has been set to a valid number.

Are you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget'] = "The type of this campaign has been set to Contract,
but Limit per day is not specified.
This will cause the campaign to be deactivated and
its banners won't be delivered until a valid Limit per day has been set.

Are you sure you want to continue?";
$GLOBALS['strCampaignStatusPending'] = "Pendente";
$GLOBALS['strCampaignStatusInactive'] = "ativo";
$GLOBALS['strCampaignStatusRunning'] = "Executando";
$GLOBALS['strCampaignStatusPaused'] = "Pausado";
$GLOBALS['strCampaignStatusAwaiting'] = "Aguardando";
$GLOBALS['strCampaignStatusExpired'] = "Finalizado";
$GLOBALS['strCampaignStatusApproval'] = "Aguardando aprovação »";
$GLOBALS['strCampaignStatusRejected'] = "Rejeitado";
$GLOBALS['strCampaignStatusAdded'] = "Adicionado";
$GLOBALS['strCampaignStatusStarted'] = "Inicializado";
$GLOBALS['strCampaignStatusRestarted'] = "Re-iniciado";
$GLOBALS['strCampaignStatusDeleted'] = "Remover";
$GLOBALS['strCampaignType'] = "Nome da campanha";
$GLOBALS['strType'] = "Tipo";
$GLOBALS['strContract'] = "Contato";
$GLOBALS['strOverride'] = "Override";
$GLOBALS['strOverrideInfo'] = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract'] = "Contato";
$GLOBALS['strStandardContractInfo'] = "Contract campaigns are for smoothly delivering the impressions
    required to achieve a specified time-critical performance requirement. That is, Contract campaigns are for when
    an advertiser has paid specifically to have a given number of impressions, clicks and/or conversions to be
    achieved either between two dates, or per day.";
$GLOBALS['strRemnant'] = "Remnant";
$GLOBALS['strRemnantInfo'] = "The default campaign type. Remnant campaigns have lots of different
    delivery options, and you should ideally always have at least one Remnant campaign linked to every zone, to ensure
    that there is always something to show. Use Remnant campaigns to display house banners, ad-network banners, or even
    direct advertising that has been sold, but where there is not a time-critical performance requirement for the
    campaign to adhere to.";
$GLOBALS['strECPMInfo'] = "This is a standard campaign which can be constrained with either an end date or a specific limit. Based on current settings it will be prioritised using eCPM.";
$GLOBALS['strPricing'] = "Pricing";
$GLOBALS['strPricingModel'] = "Pricing model";
$GLOBALS['strSelectPricingModel'] = "-- select model --";
$GLOBALS['strRatePrice'] = "Rate / Price";
$GLOBALS['strMinimumImpressions'] = "Minimum daily impressions";
$GLOBALS['strLimit'] = "Limit";
$GLOBALS['strLowExclusiveDisabled'] = "You cannot change this campaign to Remnant or Exclusive, since both an end date and either of impressions/clicks/conversions limit are set. <br>In order to change type, you need to set no expiry date or remove limits.";
$GLOBALS['strCannotSetBothDateAndLimit'] = "You cannot set both an end date and limit for a Remnant or Exclusive campaign.<br>If you need to set both an end date and limit impressions/clicks/conversions please use a non-exclusive Contract campaign.";
$GLOBALS['strWhyDisabled'] = "why is it disabled?";
$GLOBALS['strBackToCampaigns'] = "Back to campaigns";
$GLOBALS['strCampaignBanners'] = "Campaign's banners";
$GLOBALS['strCookies'] = "Cookies";

// Tracker
$GLOBALS['strTracker'] = "Rastreador";
$GLOBALS['strTrackers'] = "Rastreadores";
$GLOBALS['strTrackerPreferences'] = "Preferências do Rastreador";
$GLOBALS['strAddTracker'] = "Adicionar no rastreador";
$GLOBALS['strTrackerForAdvertiser'] = "for advertiser";
$GLOBALS['strNoTrackers'] = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteTrackers'] = "Deseja realmente remover este rastreador?";
$GLOBALS['strConfirmDeleteTracker'] = "Deseja realmente remover este rastreador?";
$GLOBALS['strTrackerProperties'] = "Dados do rastreador";
$GLOBALS['strDefaultStatus'] = "Estado padrão";
$GLOBALS['strStatus'] = "Estado";
$GLOBALS['strLinkedTrackers'] = "Rastreadores vinculados";
$GLOBALS['strTrackerInformation'] = "Tracker Information";
$GLOBALS['strConversionWindow'] = "Janela de conversão";
$GLOBALS['strUniqueWindow'] = "Janela única";
$GLOBALS['strClick'] = "Clique";
$GLOBALS['strView'] = "Visualizar";
$GLOBALS['strArrival'] = "Arrival";
$GLOBALS['strManual'] = "Manual";
$GLOBALS['strImpression'] = "Impression";
$GLOBALS['strConversionType'] = "Tipo de conversão";
$GLOBALS['strLinkCampaignsByDefault'] = "vincular campanhas novas por padrão";
$GLOBALS['strBackToTrackers'] = "Back to trackers";
$GLOBALS['strIPAddress'] = "IP Address";

// Banners (General)
$GLOBALS['strBanner'] = "Banner";
$GLOBALS['strBanners'] = "Banners";
$GLOBALS['strAddBanner'] = "Adicionar novo banner";
$GLOBALS['strAddBanner_Key'] = "Adicionar <u>n</u>ovo banner";
$GLOBALS['strBannerToCampaign'] = "Sua campanha";
$GLOBALS['strShowBanner'] = "Mostrar banners";
$GLOBALS['strBannerProperties'] = "Informações do banner";
$GLOBALS['strBannerHistory'] = "Banner Statistics";
$GLOBALS['strNoBanners'] = "There are currently no banners defined for this campaign.";
$GLOBALS['strNoBannersAddCampaign'] = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser'] = "Atualmente nenhum website esta definido. Para criar uma zona, <a href='affiliate-edit.php'>adicione um website</a> primeiro.";
$GLOBALS['strConfirmDeleteBanner'] = "Deseja realmente remover este banner?";
$GLOBALS['strConfirmDeleteBanners'] = "Deseja realmente remover este banner?";
$GLOBALS['strShowParentCampaigns'] = "Mostrar campanhas superiores";
$GLOBALS['strHideParentCampaigns'] = "Ocultar campanhas superiores";
$GLOBALS['strHideInactiveBanners'] = "Ocultar banners inativos";
$GLOBALS['strInactiveBannersHidden'] = "banner(s) inativo(s) ocultado(s)";
$GLOBALS['strWarningMissing'] = "Atenção, possivelmente falta uma";
$GLOBALS['strWarningMissingClosing'] = "tag de fechamento \">\"";
$GLOBALS['strWarningMissingOpening'] = "tag de abertura \"<\"";
$GLOBALS['strSubmitAnyway'] = "Enviar de qualquer forma";
$GLOBALS['strBannersOfCampaign'] = "em"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'

// Banner Preferences
$GLOBALS['strBannerPreferences'] = "Preferências dos Anúncios";
$GLOBALS['strCampaignPreferences'] = "Campaign Preferences";
$GLOBALS['strDefaultBanners'] = "Banners padrão";
$GLOBALS['strDefaultBannerUrl'] = "URL padrão de imagens";
$GLOBALS['strDefaultBannerDestination'] = "URL padrão de destino";
$GLOBALS['strAllowedBannerTypes'] = "Tipos de banner permitidos";
$GLOBALS['strTypeSqlAllow'] = "Permitir banners locais em SQL";
$GLOBALS['strTypeWebAllow'] = "Permitir banners locais em disco";
$GLOBALS['strTypeUrlAllow'] = "Permitir banners externos";
$GLOBALS['strTypeHtmlAllow'] = "Permitir banners em HTML";
$GLOBALS['strTypeTxtAllow'] = "Permitir Anúncios de texto";

// Banner (Properties)
$GLOBALS['strChooseBanner'] = "Por favor escolha o tipo de banner";
$GLOBALS['strMySQLBanner'] = "Upload a local banner to the database";
$GLOBALS['strWebBanner'] = "Upload a local banner to the webserver";
$GLOBALS['strURLBanner'] = "Link an external banner";
$GLOBALS['strHTMLBanner'] = "Create an HTML banner";
$GLOBALS['strTextBanner'] = "Create a Text banner";
$GLOBALS['strAlterHTML'] = "Alter HTML to enable click tracking for:";
$GLOBALS['strIframeFriendly'] = "This banner can be safely displayed inside an iframe (e.g. is not expandable)";
$GLOBALS['strUploadOrKeep'] = "Deseja manter sua <br />imagem atual ou fazer<br />upload de uma nova?";
$GLOBALS['strNewBannerFile'] = "Selecione a imagem que deseja <br />usar para este banner<br /><br />";
$GLOBALS['strNewBannerFileAlt'] = "Selecione a imagem de backup que deseja <br />usar caso o navegador<br />não aceite rich media<br /><br />";
$GLOBALS['strNewBannerURL'] = "URL da Imagem (incl. http://)";
$GLOBALS['strURL'] = "URL de destino (incl. http://)";
$GLOBALS['strKeyword'] = "Palavras-chave";
$GLOBALS['strTextBelow'] = "Texto abaixo  da imagem";
$GLOBALS['strWeight'] = "Peso";
$GLOBALS['strAlt'] = "Texto alternativo";
$GLOBALS['strStatusText'] = "Texto de status";
$GLOBALS['strCampaignsWeight'] = "Campaign's Weight";
$GLOBALS['strBannerWeight'] = "Peso do banner";
$GLOBALS['strBannersWeight'] = "Banner's Weight";
$GLOBALS['strAdserverTypeGeneric'] = "Banner HTML genérico";
$GLOBALS['strDoNotAlterHtml'] = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Genérico";
$GLOBALS['strSwfTransparency'] = "Permitir fundo transparente";
$GLOBALS['strBackToBanners'] = "Back to banners";
$GLOBALS['strUseWyswygHtmlEditor'] = "Use WYSIWYG HTML Editor";
$GLOBALS['strChangeDefault'] = "Change default";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML'] = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML'] = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF'] = "Verificar por link codificados dentro do arquivo Flash";
$GLOBALS['strConvertSWFLinks'] = "Converter links do Flash";
$GLOBALS['strHardcodedLinks'] = "Links codificados no Flash";
$GLOBALS['strConvertSWF'] = "<br />The Flash file you just uploaded contains hard-coded urls. {$PRODUCT_NAME} won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF'] = "Comprimir arquivo SWF para download mais rápido(Flash Player 6 necessário)";
$GLOBALS['strOverwriteSource'] = "Sobrescrever parâmetro original";

// Display Delviery Rules
$GLOBALS['strModifyBannerAcl'] = "Opções de entrega";
$GLOBALS['strACL'] = "Opções de entrega";
$GLOBALS['strACLAdd'] = "Add delivery rule";
$GLOBALS['strApplyLimitationsTo'] = "Apply delivery rules to";
$GLOBALS['strAllBannersInCampaign'] = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations'] = "Remove all delivery rules";
$GLOBALS['strEqualTo'] = "é igual a";
$GLOBALS['strDifferentFrom'] = "é diferente de";
$GLOBALS['strLaterThan'] = "is later than";
$GLOBALS['strLaterThanOrEqual'] = "is later than or equal to";
$GLOBALS['strEarlierThan'] = "is earlier than";
$GLOBALS['strEarlierThanOrEqual'] = "is earlier than or equal to";
$GLOBALS['strContains'] = "contains";
$GLOBALS['strNotContains'] = "doesn't contain";
$GLOBALS['strGreaterThan'] = "maior que";
$GLOBALS['strLessThan'] = "menor que";
$GLOBALS['strGreaterOrEqualTo'] = "is greater or equal to";
$GLOBALS['strLessOrEqualTo'] = "is less or equal to";
$GLOBALS['strAND'] = "E";                          // logical operator
$GLOBALS['strOR'] = "OU";                         // logical operator
$GLOBALS['strOnlyDisplayWhen'] = "Somente mostrar este banner quando:";
$GLOBALS['strWeekDays'] = "Dias da semana";
$GLOBALS['strTime'] = "Time";
$GLOBALS['strDomain'] = "Domain";
$GLOBALS['strSource'] = "Fonte";
$GLOBALS['strBrowser'] = "Browser";
$GLOBALS['strOS'] = "OS";
$GLOBALS['strDeliveryLimitations'] = "Delivery Rules";

$GLOBALS['strDeliveryCappingReset'] = "Resetar contadores de visualização após:";
$GLOBALS['strDeliveryCappingTotal'] = "no total";
$GLOBALS['strDeliveryCappingSession'] = "por sessão";

if (!isset($GLOBALS['strCappingBanner'])) {
    $GLOBALS['strCappingBanner'] = array();
}
$GLOBALS['strCappingBanner']['title'] = "Delivery capping per visitor";
$GLOBALS['strCappingBanner']['limit'] = "Limitar visualização de banners a:";

if (!isset($GLOBALS['strCappingCampaign'])) {
    $GLOBALS['strCappingCampaign'] = array();
}
$GLOBALS['strCappingCampaign']['title'] = "Delivery capping per visitor";
$GLOBALS['strCappingCampaign']['limit'] = "Limitar visualizações da campanha a:";

if (!isset($GLOBALS['strCappingZone'])) {
    $GLOBALS['strCappingZone'] = array();
}
$GLOBALS['strCappingZone']['title'] = "Delivery capping per visitor";
$GLOBALS['strCappingZone']['limit'] = "Limitar visualizações de zonas a:";

// Website
$GLOBALS['strAffiliate'] = "Site";
$GLOBALS['strAffiliates'] = "Sites";
$GLOBALS['strAffiliatesAndZones'] = "Sites e Zonas";
$GLOBALS['strAddNewAffiliate'] = "Adicionar novo site";
$GLOBALS['strAffiliateProperties'] = "Informações do site";
$GLOBALS['strAffiliateHistory'] = "Website Statistics";
$GLOBALS['strNoAffiliates'] = "Atualmente nenhum website esta definido. Para criar uma zona, <a href='affiliate-edit.php'>adicione um website</a> primeiro.";
$GLOBALS['strConfirmDeleteAffiliate'] = "Deseja realmente remover este site?";
$GLOBALS['strConfirmDeleteAffiliates'] = "Deseja realmente remover este site?";
$GLOBALS['strInactiveAffiliatesHidden'] = "site(s) inativo(s) ocultado(s)";
$GLOBALS['strShowParentAffiliates'] = "Mostrar sites superiores";
$GLOBALS['strHideParentAffiliates'] = "Ocultar sites superiores";

// Website (properties)
$GLOBALS['strWebsite'] = "Site";
$GLOBALS['strWebsiteURL'] = "URL do website";
$GLOBALS['strAllowAffiliateModifyZones'] = "Permitir que este usuário modifique suas zonas";
$GLOBALS['strAllowAffiliateLinkBanners'] = "Permitir que este usuário ligue banners às suas zonas";
$GLOBALS['strAllowAffiliateAddZone'] = "Permitir que este usuário defina novas zonas";
$GLOBALS['strAllowAffiliateDeleteZone'] = "Permitir que este usuário remova zonas existentes";
$GLOBALS['strAllowAffiliateGenerateCode'] = "Permitir que este usuário gere o código de inserção";

// Website (properties - payment information)
$GLOBALS['strPostcode'] = "Código Postal (CEP)";
$GLOBALS['strCountry'] = "País";

// Website (properties - other information)
$GLOBALS['strWebsiteZones'] = "Sites e Zonas";

// Zone
$GLOBALS['strZone'] = "Zona";
$GLOBALS['strZones'] = "Zonas";
$GLOBALS['strAddNewZone'] = "Adicionar nova zona";
$GLOBALS['strAddNewZone_Key'] = "Adicionar <u>n</u>ova zona";
$GLOBALS['strZoneToWebsite'] = "Nenhum site";
$GLOBALS['strLinkedZones'] = "Zonas vinculadas";
$GLOBALS['strAvailableZones'] = "Available Zones";
$GLOBALS['strLinkingNotSuccess'] = "Linking not successful, please try again";
$GLOBALS['strZoneProperties'] = "Informações da Zona";
$GLOBALS['strZoneHistory'] = "Histórico da Zona";
$GLOBALS['strNoZones'] = "There are currently no zones defined for this website.";
$GLOBALS['strNoZonesAddWebsite'] = "Atualmente nenhum website esta definido. Para criar uma zona, <a href='affiliate-edit.php'>adicione um website</a> primeiro.";
$GLOBALS['strConfirmDeleteZone'] = "Deseja realmente remover esta zona?";
$GLOBALS['strConfirmDeleteZones'] = "Deseja realmente remover esta zona?";
$GLOBALS['strConfirmDeleteZoneLinkActive'] = "Ainda existem campanhas ligadas a esta zona, caso você a remova estas campanhas não serão executadas e você não será pago por elas";
$GLOBALS['strZoneType'] = "Tipo de zona";
$GLOBALS['strBannerButtonRectangle'] = "Banner, Botão ou retângulo";
$GLOBALS['strInterstitial'] = "Intersticial ou DHTML Flutuante";
$GLOBALS['strPopup'] = "Popup";
$GLOBALS['strTextAdZone'] = "Anúncio de texto";
$GLOBALS['strEmailAdZone'] = "Zona de E-mail/Newsletter";
$GLOBALS['strZoneVideoInstream'] = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay'] = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners'] = "Mostrar banners compatíveis";
$GLOBALS['strHideMatchingBanners'] = "Ocultar banners compatíveis";
$GLOBALS['strBannerLinkedAds'] = "Banners vinculados a esta zona";
$GLOBALS['strCampaignLinkedAds'] = "Campanhas vinculadas a esta zona";
$GLOBALS['strInactiveZonesHidden'] = "zona(s) inativa(s) oculta(s)";
$GLOBALS['strWarnChangeZoneType'] = "Alterar o tipo de zona para texto ou e-mail irá remover vinculo com todos banners/campanhas devido a restrições destes tipos de zonas
                                                <ul>
                                                    <li>Zonas de texto podem te apenas anúncios de texto</li>
                                                    <li>Zonas de E-mail podem ter apenas um banner ativo por vez</li>
                                                </ul>";
$GLOBALS['strWarnChangeZoneSize'] = 'Alterar o tamanho da zona irá remover vínculos de banners incompatíveis com o novo tamanho, e irá adicionar qualquer banner de campanhas vinculadas que seja compatível';
$GLOBALS['strWarnChangeBannerSize'] = 'Alterar o tamanho do banner irá remover seu vínculo de qualquer zona que não for compatível com o novo tamanho, se a <strong>campanha</strong> deste banner estiver ligada a uma zona do novo tamanho, o banner será automaticamente vinculado.';
$GLOBALS['strWarnBannerReadonly'] = 'This banner is read-only because an extension has been disabled. Contact your system administrator for more information.';
$GLOBALS['strZonesOfWebsite'] = 'em'; //this is added between page name and website name eg. 'Zones in www.example.com'
$GLOBALS['strBackToZones'] = "Back to zones";

$GLOBALS['strIab']['IAB_FullBanner(468x60)'] = "IAB Full Banner (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)'] = "IAB Skyscraper (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)'] = "IAB Leaderboard (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)'] = "IAB Button 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)'] = "IAB Button 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)'] = "IAB Half Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)'] = "IAB Micro Bar (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)'] = "IAB Square Button (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*'] = "IAB Rectangle (180 x 150) *";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)'] = "IAB Square Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)'] = "IAB Vertical Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*'] = "IAB Medium Rectangle (300 x 250) *";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)'] = "IAB Large Rectangle (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Vertical Rectangle (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*'] = "IAB Wide Skyscraper (160 x 600) *";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)'] = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)'] = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced'] = "Avançado";
$GLOBALS['strChainSettings'] = "Configurações de corrente";
$GLOBALS['strZoneNoDelivery'] = "Se nenhum banner desta zona puder ser mostrado, tente...";
$GLOBALS['strZoneStopDelivery'] = "Parar entrega e não mostrar nenhum banner";
$GLOBALS['strZoneOtherZone'] = "Mostrar a seguinte zona";
$GLOBALS['strZoneAppend'] = "Sempre inserir este código HTML após anúncios de texto apresentados por esta zona";
$GLOBALS['strAppendSettings'] = "Configurações de Anexos e prefixos";
$GLOBALS['strZonePrependHTML'] = "Sempre inserir este código HTML antes de anúncios de texto apresentados por esta zona";
$GLOBALS['strZoneAppendNoBanner'] = "Anexar mesmo que nenhum banner seja apresentado";
$GLOBALS['strZoneAppendHTMLCode'] = "Código HTML";
$GLOBALS['strZoneAppendZoneSelection'] = "Popup ou Intersticial";

// Zone probability
$GLOBALS['strZoneProbListChain'] = "Todos banners ligados a esta zona estão inativos <br />Essa é a corrente que será seguida:";
$GLOBALS['strZoneProbNullPri'] = "Nenhum banner ativo vinculado a esta zona.";
$GLOBALS['strZoneProbListChainLoop'] = "Seguir esta corrente causará uma referência circular. Entrega para esta zona foi interrompida.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType'] = "Por favor escolha o que vincular com esta zona";
$GLOBALS['strLinkedBanners'] = "vincular banners individuais";
$GLOBALS['strCampaignDefaults'] = "vincular banners pelas campanhas a que pertencem";
$GLOBALS['strLinkedCategories'] = "Vincular banners por categoria";
$GLOBALS['strWithXBanners'] = "%d banner(s)";
$GLOBALS['strRawQueryString'] = "Palavra-chave";
$GLOBALS['strIncludedBanners'] = "Banners vinculados";
$GLOBALS['strMatchingBanners'] = "{count} banners compatíveis";
$GLOBALS['strNoCampaignsToLink'] = "Nenhuma campanha compatível com esta zona esta disponível";
$GLOBALS['strNoTrackersToLink'] = "Nenhum rastreador compatível com esta campanha esta disponível";
$GLOBALS['strNoZonesToLinkToCampaign'] = "Nenhuma zona compatível com esta campanha esta disponível";
$GLOBALS['strSelectBannerToLink'] = "Selecione o banner que deseja vincular a esta zona:";
$GLOBALS['strSelectCampaignToLink'] = "Selecione a campanha que deseja vincular a esta zona:";
$GLOBALS['strSelectAdvertiser'] = "Selecionar anunciante";
$GLOBALS['strSelectPlacement'] = "Selecionar campanha";
$GLOBALS['strSelectAd'] = "Selecionar banner";
$GLOBALS['strSelectPublisher'] = "Escolher o site";
$GLOBALS['strSelectZone'] = "Escolher zona";
$GLOBALS['strStatusPending'] = "Pendente";
$GLOBALS['strStatusApproved'] = "Approved";
$GLOBALS['strStatusDisapproved'] = "Disapproved";
$GLOBALS['strStatusDuplicate'] = "Duplicar";
$GLOBALS['strStatusOnHold'] = "On Hold";
$GLOBALS['strStatusIgnore'] = "Ignore";
$GLOBALS['strConnectionType'] = "Tipo";
$GLOBALS['strConnTypeSale'] = "Sale";
$GLOBALS['strConnTypeLead'] = "Lead";
$GLOBALS['strConnTypeSignUp'] = "Signup";
$GLOBALS['strShortcutEditStatuses'] = "Editar estados";
$GLOBALS['strShortcutShowStatuses'] = "Mostrar estados";

// Statistics
$GLOBALS['strStats'] = "Estatísticas";
$GLOBALS['strNoStats'] = "Nenhum dado estatístico disponível";
$GLOBALS['strNoStatsForPeriod'] = "Nenhum dado estatístico disponível para o período de %s a %s";
$GLOBALS['strGlobalHistory'] = "Global Statistics";
$GLOBALS['strDailyHistory'] = "Daily Statistics";
$GLOBALS['strDailyStats'] = "Daily Statistics";
$GLOBALS['strWeeklyHistory'] = "Weekly Statistics";
$GLOBALS['strMonthlyHistory'] = "Monthly Statistics";
$GLOBALS['strTotalThisPeriod'] = "Total para este período";
$GLOBALS['strPublisherDistribution'] = "Distribuição por site";
$GLOBALS['strCampaignDistribution'] = "Distribuição por campanha";
$GLOBALS['strViewBreakdown'] = "Visualizar por";
$GLOBALS['strBreakdownByDay'] = "Dia";
$GLOBALS['strBreakdownByWeek'] = "Semana";
$GLOBALS['strBreakdownByMonth'] = "Mês";
$GLOBALS['strBreakdownByDow'] = "Dia da semana";
$GLOBALS['strBreakdownByHour'] = "Hora";
$GLOBALS['strItemsPerPage'] = "Itens por página";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution Statistics (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution Statistics (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution Statistics (Website)";
$GLOBALS['strDistributionHistoryZone'] = "Distribution Statistics (Zone)";
$GLOBALS['strShowGraphOfStatistics'] = "Mostrar <u>G</u>ráfico de estatísticas";
$GLOBALS['strExportStatisticsToExcel'] = "<u>E</u>xportar estatísticas para o Excel";
$GLOBALS['strGDnotEnabled'] = "Você precisa ter a biblioteca GD para PHP habilitada para exibir gráficos. <br />Por favor veja <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> para maiores informações, inclusive como instalar GD em seu servidor.";
$GLOBALS['strStatsArea'] = "Área";

// Expiration
$GLOBALS['strNoExpiration'] = "Sem data de vencimento";
$GLOBALS['strEstimated'] = "Vencimento estimado";
$GLOBALS['strNoExpirationEstimation'] = "Sem prazo estimado de vencimento ainda";
$GLOBALS['strDaysAgo'] = "dias atás";
$GLOBALS['strCampaignStop'] = "Fim da Campanha";

// Reports
$GLOBALS['strAdvancedReports'] = "Advanced Reports";
$GLOBALS['strStartDate'] = "Start Date";
$GLOBALS['strEndDate'] = "End Date";
$GLOBALS['strPeriod'] = "Período";
$GLOBALS['strLimitations'] = "Delivery Rules";
$GLOBALS['strWorksheets'] = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers'] = "Todos anunciantes";
$GLOBALS['strAnonAdvertisers'] = "Anunciantes anônimos";
$GLOBALS['strAllPublishers'] = "Todos sites";
$GLOBALS['strAnonPublishers'] = "Sites anônimos";
$GLOBALS['strAllAvailZones'] = "Todas zonas disponíveis";

// Userlog
$GLOBALS['strUserLog'] = "Log de usuários";
$GLOBALS['strUserLogDetails'] = "Detalhes do log de usuários";
$GLOBALS['strDeleteLog'] = "Remover log";
$GLOBALS['strAction'] = "Ação";
$GLOBALS['strNoActionsLogged'] = "Nenhuma ação registrada";

// Code generation
$GLOBALS['strGenerateBannercode'] = "Seleção direta";
$GLOBALS['strChooseInvocationType'] = "Por favor escolha o tipo de inserção de banner";
$GLOBALS['strGenerate'] = "Gerar";
$GLOBALS['strParameters'] = "Parâmetros das tags";
$GLOBALS['strFrameSize'] = "Tamanho da moldura";
$GLOBALS['strBannercode'] = "Código do banner";
$GLOBALS['strTrackercode'] = "Trackercode";
$GLOBALS['strBackToTheList'] = "Voltar para lista de relatórios";
$GLOBALS['strCharset'] = "Conjunto de caracteres";
$GLOBALS['strAutoDetect'] = "Auto-detectar";
$GLOBALS['strCacheBusterComment'] = "  * Replace all instances of {random} with
  * a generated random number (or timestamp).
  *";
$GLOBALS['strSSLBackupComment'] = "
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";
$GLOBALS['strSSLDeliveryComment'] = "
  * This tag has been generated for use on a non-SSL page. If this tag
  * is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";

$GLOBALS['strThirdPartyComment'] = "
  * Don't forget to replace the '{clickurl}' text with
  * the click tracking URL if this ad is to be delivered through a 3rd
  * party (non-Max) adserver.
  *";

// Errors
$GLOBALS['strErrorDatabaseConnection'] = "Database connection error.";
$GLOBALS['strErrorCantConnectToDatabase'] = "A fatal error occurred %1\$s can't connect to the database. Because
                                                   of this it isn't possible to use the administrator interface. The delivery
                                                   of banners might also be affected. Possible reasons for the problem are:
                                                   <ul>
                                                     <li>The database server isn't functioning at the moment</li>
                                                     <li>The location of the database server has changed</li>
                                                     <li>The username or password used to contact the database server are not correct</li>
                                                     <li>PHP has not loaded the <i>%2\$s</i> extension</li>
                                                   </ul>";
$GLOBALS['strNoMatchesFound'] = "Nenhum resultado encontrado";
$GLOBALS['strErrorOccurred'] = "Um erro ocorreu";
$GLOBALS['strErrorDBPlain'] = "Um erro ocorreu ao acessar a base de dados";
$GLOBALS['strErrorDBSerious'] = "Um grave problema foi detectado com a base de dados";
$GLOBALS['strErrorDBNoDataPlain'] = "Due to a problem with the database {$PRODUCT_NAME} couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious'] = "Due to a serious problem with the database, {$PRODUCT_NAME} couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt'] = "A tabela da base de dados pode estar corrompida e necessita de reparos. Para mais informações sobre tabelas corrompidas leia o capitulo <i>Troubleshooting</i> do <i>Guia do Administrador</i>.";
$GLOBALS['strErrorDBContact'] = "Por favor notifique o administrador deste sistema sobre este problema.";
$GLOBALS['strErrorDBSubmitBug'] = "If this problem is reproducable it might be caused by a bug in {$PRODUCT_NAME}. Please report the following information to the creators of {$PRODUCT_NAME}. Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive'] = "The maintenance script has not been run in the last 24 hours.
In order for the application to function correctly it needs to run
every hour.

Please read the Administrator guide for more information
about configuring the maintenance script.";
$GLOBALS['strErrorLinkingBanner'] = "Não foi possível vincular este banner a esta zona pois:";
$GLOBALS['strUnableToLinkBanner'] = "Impossível vincular este banner:";
$GLOBALS['strErrorEditingCampaignRevenue'] = "formatação incorreta de números no campo de Receita";
$GLOBALS['strErrorEditingCampaignECPM'] = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone'] = "Erro ao atualizar a zona:";
$GLOBALS['strUnableToChangeZone'] = "Impossível aplicar esta alteração pois:";
$GLOBALS['strDatesConflict'] = "datas conflitam com:";
$GLOBALS['strEmailNoDates'] = "Campaigns linked to Email Zones must have a start and end date set. {$PRODUCT_NAME} ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats'] = "Algumas destas estatísticas foram logadas em um fuso horário não-UTC, e podem não ser apresentadas no fuso correto";
$GLOBALS['strWarningInaccurateReadMore'] = "Leia mais sobre isso";
$GLOBALS['strWarningInaccurateReport'] = "Algumas destas estatísticas neste relatório foram logadas em um fuso horário não-UTC, e podem não ser apresentadas no fuso correto";

//Validation
$GLOBALS['strRequiredFieldLegend'] = "denotes required field";
$GLOBALS['strFormContainsErrors'] = "Form contains errors, please correct the marked fields below.";
$GLOBALS['strXRequiredField'] = "%s is required";
$GLOBALS['strEmailField'] = "Please enter a valid email";
$GLOBALS['strNumericField'] = "Please enter a number (only digits allowed)";
$GLOBALS['strGreaterThanZeroField'] = "Must be greater than 0";
$GLOBALS['strXGreaterThanZeroField'] = "%s must be greater than 0";
$GLOBALS['strXPositiveWholeNumberField'] = "%s must be a positive whole number";
$GLOBALS['strInvalidWebsiteURL'] = "Invalid Website URL";

// Email
$GLOBALS['strSirMadam'] = "Sr./Sra.";
$GLOBALS['strMailSubject'] = "Relatório de Anunciante";
$GLOBALS['strMailHeader'] = "Dear {contact},";
$GLOBALS['strMailBannerStats'] = "Abaixo poderá ver as estatísticas de banners para {clientname}:";
$GLOBALS['strMailBannerActivatedSubject'] = "Campanha ativada";
$GLOBALS['strMailBannerDeactivatedSubject'] = "Campanha desativada";
$GLOBALS['strMailBannerActivated'] = "Your campaign shown below has been activated because
the campaign activation date has been reached.";
$GLOBALS['strMailBannerDeactivated'] = "A sua campanha demonstrada abaixo foi desativada porque";
$GLOBALS['strMailFooter'] = "Regards,
   {adminfullname}";
$GLOBALS['strClientDeactivated'] = "Esta campanha não esta ativa porque";
$GLOBALS['strBeforeActivate'] = "a data de ativação ainda não foi alcançada";
$GLOBALS['strAfterExpire'] = "a data de vencimento foi alcançada";
$GLOBALS['strNoMoreImpressions'] = "não há mais Impressões restantes";
$GLOBALS['strNoMoreClicks'] = "não há mais Cliques restantes";
$GLOBALS['strNoMoreConversions'] = "não há mais Vendas restantes";
$GLOBALS['strWeightIsNull'] = "seu peso esta definido para zero";
$GLOBALS['strRevenueIsNull'] = "its revenue is set to zero";
$GLOBALS['strTargetIsNull'] = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strNoViewLoggedInInterval'] = "Nenhum Impressão foi registrada durante o período deste relatório";
$GLOBALS['strNoClickLoggedInInterval'] = "Nenhum Clique foi registrada durante o período deste relatório";
$GLOBALS['strNoConversionLoggedInInterval'] = "Nenhum Conversão foi registrada durante o período deste relatório";
$GLOBALS['strMailReportPeriod'] = "Este relatório inclui estatísticas de {startdate} até {enddate}.";
$GLOBALS['strMailReportPeriodAll'] = "Este relatório possui todas estatísticas até {enddate}.";
$GLOBALS['strNoStatsForCampaign'] = "Nenhum dado estatístico disponível para esta campanha";
$GLOBALS['strImpendingCampaignExpiry'] = "Vencimento de campanha iminente";
$GLOBALS['strYourCampaign'] = "Sua campanha";
$GLOBALS['strTheCampiaignBelongingTo'] = "A campanha pertencente a";
$GLOBALS['strImpendingCampaignExpiryDateBody'] = "{clientname} apresentada abaixo vencerá dia {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody'] = "{clientname} apresenta abaixo tem menos de {limit} impressões restantes.";
$GLOBALS['strImpendingCampaignExpiryBody'] = "As a result, the campaign will soon be automatically disabled, and the
following banners in the campaign will also be disabled:";

// Priority
$GLOBALS['strPriority'] = "Prioridade";
$GLOBALS['strSourceEdit'] = "Editar fontes";

// Preferences
$GLOBALS['strPreferences'] = "Preferências";
$GLOBALS['strUserPreferences'] = "Preferências do Usuário";
$GLOBALS['strChangePassword'] = "Trocar senha";
$GLOBALS['strChangeEmail'] = "Trocar e-mail";
$GLOBALS['strCurrentPassword'] = "Senha Atual";
$GLOBALS['strChooseNewPassword'] = "Escolha uma nova senha";
$GLOBALS['strReenterNewPassword'] = "Re-digite a nova senha";
$GLOBALS['strNameLanguage'] = "Nome e Língua";
$GLOBALS['strAccountPreferences'] = "Preferências da conta";
$GLOBALS['strCampaignEmailReportsPreferences'] = "Preferências de E-mails com relatórios de campanhas";
$GLOBALS['strTimezonePreferences'] = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings'] = "Alertas de e-mail do Administrador";
$GLOBALS['strAgencyEmailWarnings'] = "Alertas de e-mail de Agências";
$GLOBALS['strAdveEmailWarnings'] = "Alertas de e-mail de Anunciantes";
$GLOBALS['strFullName'] = "Nome completo";
$GLOBALS['strEmailAddress'] = "Endereço de e-mail";
$GLOBALS['strUserDetails'] = "Detalhes do usuário";
$GLOBALS['strUserInterfacePreferences'] = "Preferências da Interface de usuários";
$GLOBALS['strPluginPreferences'] = "Preferências gerais";
$GLOBALS['strColumnName'] = "Nome da coluna";
$GLOBALS['strShowColumn'] = "Mostrar Coluna";
$GLOBALS['strCustomColumnName'] = "Nome de coluna personalizado";
$GLOBALS['strColumnRank'] = "Ranking da coluna";

// Long names
$GLOBALS['strRevenue'] = "Receita";
$GLOBALS['strNumberOfItems'] = "Número de itens";
$GLOBALS['strRevenueCPC'] = "Receita de CPC";
$GLOBALS['strERPM'] = "ERPM";
$GLOBALS['strERPC'] = "ERPC";
$GLOBALS['strERPS'] = "ERPS";
$GLOBALS['strEIPM'] = "EIPM";
$GLOBALS['strEIPC'] = "EIPC";
$GLOBALS['strEIPS'] = "EIPS";
$GLOBALS['strECPM'] = "ECPM";
$GLOBALS['strECPC'] = "ECPC";
$GLOBALS['strECPS'] = "ECPS";
$GLOBALS['strPendingConversions'] = "Conversões pendentes";
$GLOBALS['strImpressionSR'] = "Impressão SR";
$GLOBALS['strClickSR'] = "Cliques SR";

// Short names
$GLOBALS['strRevenue_short'] = "Rec.";
$GLOBALS['strBasketValue_short'] = "VM";
$GLOBALS['strNumberOfItems_short'] = "Num. itm.";
$GLOBALS['strRevenueCPC_short'] = "Rec. CPC";
$GLOBALS['strERPM_short'] = "ERPM";
$GLOBALS['strERPC_short'] = "ERPC";
$GLOBALS['strERPS_short'] = "ERPS";
$GLOBALS['strEIPM_short'] = "EIPM";
$GLOBALS['strEIPC_short'] = "EIPC";
$GLOBALS['strEIPS_short'] = "EIPS";
$GLOBALS['strECPM_short'] = "ECPM";
$GLOBALS['strECPC_short'] = "ECPC";
$GLOBALS['strECPS_short'] = "ECPS";
$GLOBALS['strID_short'] = "ID";
$GLOBALS['strRequests_short'] = "Req.";
$GLOBALS['strImpressions_short'] = "Impr.";
$GLOBALS['strClicks_short'] = "Cliques";
$GLOBALS['strCTR_short'] = "CTR";
$GLOBALS['strConversions_short'] = "Conv.";
$GLOBALS['strPendingConversions_short'] = "Conv. pendentes";
$GLOBALS['strImpressionSR_short'] = "Impr. SR";
$GLOBALS['strClickSR_short'] = "Cliques SR";

// Global Settings
$GLOBALS['strConfiguration'] = "Configuration";
$GLOBALS['strGlobalSettings'] = "Configurações global";
$GLOBALS['strGeneralSettings'] = "Configurações gerais";
$GLOBALS['strMainSettings'] = "Principais configurações";
$GLOBALS['strPlugins'] = "Plugins";
$GLOBALS['strChooseSection'] = 'Escolher seção';

// Product Updates
$GLOBALS['strProductUpdates'] = "Atualizações do produto";
$GLOBALS['strViewPastUpdates'] = "Gerenciar Atualizações anteriores e backups";
$GLOBALS['strFromVersion'] = "Da versão";
$GLOBALS['strToVersion'] = "Para versão";
$GLOBALS['strToggleDataBackupDetails'] = "Ligar/Desligar detalhes de backup de dados";
$GLOBALS['strClickViewBackupDetails'] = "clique aqui para mostrar detalhes de backup";
$GLOBALS['strClickHideBackupDetails'] = "clique aqui para esconder detalhes de bakup";
$GLOBALS['strShowBackupDetails'] = "Mostrar detalhes de bakup";
$GLOBALS['strHideBackupDetails'] = "Esconder detalhes de backup";
$GLOBALS['strBackupDeleteConfirm'] = "Deseja realmente remover todos backups criados por este upgrade?";
$GLOBALS['strDeleteArtifacts'] = "Remover artefatos";
$GLOBALS['strArtifacts'] = "Artefatos";
$GLOBALS['strBackupDbTables'] = "Fazer backup das tabelas da Base de dados";
$GLOBALS['strLogFiles'] = "Registrar arquivos";
$GLOBALS['strConfigBackups'] = "Backup de configurações";
$GLOBALS['strUpdatedDbVersionStamp'] = "Marca de versão da base de dados atualizada";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE'] = "ATUALIZAÇÃO CONCLUÍDA";
$GLOBALS['aProductStatus']['UPGRADE_FAILED'] = "FALHA NA ATUALIZAÇÃO";

// Agency
$GLOBALS['strAgencyManagement'] = "Gerenciamento de contas";
$GLOBALS['strAgency'] = "Conta";
$GLOBALS['strAddAgency'] = "Adicionar nova conta";
$GLOBALS['strAddAgency_Key'] = "Adicionar <u>n</u>ova conta";
$GLOBALS['strTotalAgencies'] = "Total de contas";
$GLOBALS['strAgencyProperties'] = "Propriedades da conta";
$GLOBALS['strNoAgencies'] = "Atualmente nenhuma conta esta definida";
$GLOBALS['strConfirmDeleteAgency'] = "Deseja realmente remover esta conta?";
$GLOBALS['strHideInactiveAgencies'] = "Escolher contas inativas";
$GLOBALS['strInactiveAgenciesHidden'] = "conta(s) inativa(s) oculta(s)";
$GLOBALS['strSwitchAccount'] = "Trocar para esta conta";

// Channels
$GLOBALS['strChannel'] = "Delivery Rule Set";
$GLOBALS['strChannels'] = "Delivery Rule Sets";
$GLOBALS['strChannelManagement'] = "Delivery Rule Set Management";
$GLOBALS['strAddNewChannel'] = "Add new Delivery Rule Set";
$GLOBALS['strAddNewChannel_Key'] = "Add <u>n</u>ew Delivery Rule Set";
$GLOBALS['strChannelToWebsite'] = "Nenhum site";
$GLOBALS['strNoChannels'] = "There are currently no delivery rule sets defined";
$GLOBALS['strNoChannelsAddWebsite'] = "There are currently no delivery rule sets defined, because there are no websites. To create a delivery rule set, <a href='affiliate-edit.php'>add a new website</a> first.";
$GLOBALS['strEditChannelLimitations'] = "Edit delivery rules for the delivery rule set";
$GLOBALS['strChannelProperties'] = "Delivery Rule Set Properties";
$GLOBALS['strChannelLimitations'] = "Opções de entrega";
$GLOBALS['strConfirmDeleteChannel'] = "Do you really want to delete this delivery rule set?";
$GLOBALS['strConfirmDeleteChannels'] = "Do you really want to delete the selected delivery rule sets?";
$GLOBALS['strChannelsOfWebsite'] = 'em'; //this is added between page name and website name eg. 'delivery rule sets in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName'] = "Nome da variável";
$GLOBALS['strVariableDescription'] = "Descrição";
$GLOBALS['strVariableDataType'] = "Tipo de dado";
$GLOBALS['strVariablePurpose'] = "Função/Objetivo";
$GLOBALS['strGeneric'] = "Genérico";
$GLOBALS['strBasketValue'] = "Valor da cesta";
$GLOBALS['strNumItems'] = "Número de itens";
$GLOBALS['strVariableIsUnique'] = "Deduzir conversões?";
$GLOBALS['strNumber'] = "Número";
$GLOBALS['strString'] = "Texto";
$GLOBALS['strTrackFollowingVars'] = "Rastrear a seguinte variável";
$GLOBALS['strAddVariable'] = "Adicionar variável";
$GLOBALS['strNoVarsToTrack'] = "Nenhuma variável para rastrear.";
$GLOBALS['strVariableRejectEmpty'] = "Rejeitar se estiver vazio?";
$GLOBALS['strTrackingSettings'] = "Configurações de rastreamento";
$GLOBALS['strTrackerType'] = "Tipo de rastreador";
$GLOBALS['strTrackerTypeJS'] = "Rastrear variáveis de JavaScript";
$GLOBALS['strTrackerTypeDefault'] = "Rastrear variáveis de JavaScript (compatibilidade retroativa, é necessário usar 'escape')";
$GLOBALS['strTrackerTypeDOM'] = "Rastrear elementos HTML usando DOM";
$GLOBALS['strTrackerTypeCustom'] = "Código Javascript personalizado";
$GLOBALS['strVariableCode'] = "Código de rastreamento em Javascript";

// Password recovery
$GLOBALS['strForgotPassword'] = "Esqueceu sua senha?";
$GLOBALS['strPasswordRecovery'] = "Recuperação de senha";
$GLOBALS['strEmailRequired'] = "E-mail é um campo obrigatório";
$GLOBALS['strPwdRecWrongId'] = "ID incorreto";
$GLOBALS['strPwdRecEnterEmail'] = "Digite seu e-mail abaixo";
$GLOBALS['strPwdRecEnterPassword'] = "Digite sua nova senha abaixo";
$GLOBALS['strPwdRecResetLink'] = "Link para resetar a senha";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s recuperação de senha";
$GLOBALS['strProceed'] = "Prosseguir >";
$GLOBALS['strNotifyPageMessage'] = "Um e-mail foi enviado para o endereço informado, nele esta incluso um link que irá permitir a re-configuração de sua senha.<br />Permita alguns minutos para o e-mail chegar.<br />Caso não receba o e-mail, verifique a pasta de spam.<br /><a href='index.php'>Voltar para página de login.</a>";

// Audit
$GLOBALS['strAdditionalItems'] = "e itens adicionais";
$GLOBALS['strFor'] = "para";
$GLOBALS['strHas'] = "tem";
$GLOBALS['strBinaryData'] = "Dados binários";
$GLOBALS['strAuditTrailDisabled'] = "O Rastro de Auditoria foi desabilitado pelo administrador. Nenhum evento será logado e mostrado na lista da auditoria.";

// Widget - Audit
$GLOBALS['strAuditNoData'] = "Nenhuma atividade dos usuários registrada do período escolhido.";
$GLOBALS['strAuditTrail'] = "Rastros de auditoria";
$GLOBALS['strAuditTrailSetup'] = "Configurar o Rastreamento de Auditoria hoje";
$GLOBALS['strAuditTrailGoTo'] = "Ir para log de Auditoria";
$GLOBALS['strAuditTrailNotEnabled'] = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within {$PRODUCT_NAME}</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='{$PRODUCT_DOCSURL}/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo'] = "Ir para página de campanhas";
$GLOBALS['strCampaignSetUp'] = "Configurar uma campanha hoje";
$GLOBALS['strCampaignNoRecords'] = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='{$PRODUCT_DOCSURL}/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>";
$GLOBALS['strCampaignNoRecordsAdmin'] = "<li>Não há atividade de campanha para apresentar.</li>";

$GLOBALS['strCampaignNoDataTimeSpan'] = "Nenhuma campanha começou ou terminou no prazo escolhido";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>In order to view campaigns which have started or finished during the timeframe you have selected, the Audit Trail must be activated</li>
        <li>You are seeing this message because you didn't activate the Audit Trail</li>";
$GLOBALS['strCampaignAuditTrailSetup'] = "Ativar rastro de auditoria para começar a visualizar campanhas";

$GLOBALS['strUnsavedChanges'] = "Você tem alterações não salvas nesta página, não esqueça de apertar \"Salvar Alterações\" quando terminar";
$GLOBALS['strDeliveryLimitationsDisagree'] = "WARNING: The cached delivery rules <strong>DO NOT AGREE</strong> with the delivery rules shown below<br />Please hit save changes to update the cached delivery rules";
$GLOBALS['strDeliveryRulesDbError'] = "WARNING: When saving the delivery rules, a database error occured. Please check the delivery rules below carefully, and update, if required.";
$GLOBALS['strDeliveryRulesTruncation'] = "WARNING: When saving the delivery rules, MySQL truncated the data, so the original values were restored. Please reduce your rule size, and try again.";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Some delivery rules report incorrect values:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "You are now working as <b>%s</b>";
$GLOBALS['strYouDontHaveAccess'] = "You don't have access to that page. You have been re-directed.";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Advertiser <a href='%s'>%s</a> has been added, <a href='%s'>add a campaign</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "Advertiser <a href='%s'>%s</a> has been updated";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Advertiser <b>%s</b> has been deleted";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "All selected advertisers have been deleted";

$GLOBALS['strTrackerHasBeenAdded'] = "Tracker <a href='%s'>%s</a> has been added";
$GLOBALS['strTrackerHasBeenUpdated'] = "Tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "Variables of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "Linked campaigns of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "Append tracker code of tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerHasBeenDeleted'] = "Tracker <b>%s</b> has been deleted";
$GLOBALS['strTrackersHaveBeenDeleted'] = "All selected trackers have been deleted";
$GLOBALS['strTrackerHasBeenDuplicated'] = "Tracker <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strTrackerHasBeenMoved'] = "Tracker <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strCampaignHasBeenAdded'] = "Campaign <a href='%s'>%s</a> has been added, <a href='%s'>add a banner</a>";
$GLOBALS['strCampaignHasBeenUpdated'] = "Campaign <a href='%s'>%s</a> has been updated";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "Linked trackers of campaign <a href='%s'>%s</a> have been updated";
$GLOBALS['strCampaignHasBeenDeleted'] = "Campaign <b>%s</b> has been deleted";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "All selected campaigns have been deleted";
$GLOBALS['strCampaignHasBeenDuplicated'] = "Campaign <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strCampaignHasBeenMoved'] = "Campaign <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strBannerHasBeenAdded'] = "Banner <a href='%s'>%s</a> has been added";
$GLOBALS['strBannerHasBeenUpdated'] = "Banner <a href='%s'>%s</a> has been updated";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "Advanced settings for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenUpdated'] = "Delivery options for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "Delivery options for banner <a href='%s'>%s</a> have been applied to %d banners";
$GLOBALS['strBannerHasBeenDeleted'] = "Banner <b>%s</b> has been deleted";
$GLOBALS['strBannersHaveBeenDeleted'] = "All selected banners have been deleted";
$GLOBALS['strBannerHasBeenDuplicated'] = "Banner <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "Banner <b>%s</b> has been moved to campaign <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "Banner <a href='%s'>%s</a> has been activated";
$GLOBALS['strBannerHasBeenDeactivated'] = "Banner <a href='%s'>%s</a> has been deactivated";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> zone(s) linked";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> zone(s) unlinked";

$GLOBALS['strWebsiteHasBeenAdded'] = "Website <a href='%s'>%s</a> has been added, <a href='%s'>add a zone</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "Website <a href='%s'>%s</a> has been updated";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Website <b>%s</b> has been deleted";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "All selected website have been deleted";
$GLOBALS['strWebsiteHasBeenDuplicated'] = "Website <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";

$GLOBALS['strZoneHasBeenAdded'] = "Zone <a href='%s'>%s</a> has been added";
$GLOBALS['strZoneHasBeenUpdated'] = "Zone <a href='%s'>%s</a> has been updated";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Advanced settings for zone <a href='%s'>%s</a> have been updated";
$GLOBALS['strZoneHasBeenDeleted'] = "Zone <b>%s</b> has been deleted";
$GLOBALS['strZonesHaveBeenDeleted'] = "All selected zone have been deleted";
$GLOBALS['strZoneHasBeenDuplicated'] = "Zone <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "Zone <b>%s</b> has been moved to website <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "Banner has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "Campaign has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "Banner has been unlinked from zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "Campaign has been unlinked from zone <a href='%s'>%s</a>";

$GLOBALS['strChannelHasBeenAdded'] = "Delivery rule set <a href='%s'>%s</a> has been added. <a href='%s'>Set the delivery rules.</a>";
$GLOBALS['strChannelHasBeenUpdated'] = "Delivery rule set <a href='%s'>%s</a> has been updated";
$GLOBALS['strChannelAclHasBeenUpdated'] = "Delivery options for the delivery rule set <a href='%s'>%s</a> have been updated";
$GLOBALS['strChannelHasBeenDeleted'] = "Delivery rule set <b>%s</b> has been deleted";
$GLOBALS['strChannelsHaveBeenDeleted'] = "All selected delivery rule sets have been deleted";
$GLOBALS['strChannelHasBeenDuplicated'] = "Delivery rule set <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";

$GLOBALS['strUserPreferencesUpdated'] = "Your <b>%s</b> preferences has been updated";
$GLOBALS['strEmailChanged'] = "Your E-mail has been changed";
$GLOBALS['strPasswordChanged'] = "Your password has been changed";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> have been updated";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> have been updated";
$GLOBALS['strTZPreferencesWarning'] = "However, campaign activation and expiry were not updated, nor time-based banner delivery rules.<br />You will need to update them manually if you wish them to use the new timezone";

// Report error messages
$GLOBALS['strReportErrorMissingSheets'] = "No worksheet was selected for report";
$GLOBALS['strReportErrorUnknownCode'] = "Unknown error code #";

/* ------------------------------------------------------- */
/* Keyboard shortcut assignments                           */
/* ------------------------------------------------------- */

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyHome'] = "h";
$GLOBALS['keyUp'] = "u";
$GLOBALS['keyNextItem'] = ",";
$GLOBALS['keyPreviousItem'] = ".";
$GLOBALS['keyList'] = "l";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch'] = "s";
$GLOBALS['keyCollapseAll'] = "c";
$GLOBALS['keyExpandAll'] = "e";
$GLOBALS['keyAddNew'] = "n";
$GLOBALS['keyNext'] = "n";
$GLOBALS['keyPrevious'] = "p";
$GLOBALS['keyLinkUser'] = "u";
$GLOBALS['keyWorkingAs'] = "w";
