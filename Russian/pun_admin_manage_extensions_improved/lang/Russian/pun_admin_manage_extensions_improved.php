<?php

/**
 * Lang file for pun_admin_manage_extensions_improved
 *
 * @copyright Copyright (C) 2009-2012 PunBB
 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 * @package pun_admin_manage_extensions_improved
 */

if (!defined('FORUM')) die();

$lang_pun_man_ext_improved = array(
	'Reinstall fail'		=>	'Вы не можете переустановить это расширение, так как другие расширения зависят от него&nbsp;',
	'Reinstall ext'			=>	'Переустановка/Обновление расширения "%s"',
	'Reinstall'				=>	'Переустановка',
	'Reinstall with deps'	=>	'<strong>Важно!</strong> Расширение %s может работать неправильно, если вы обновите связи или переустановите расширение %s.',
	'Extension reinstalled' =>	'Расширение <strong>"%s"</strong> успешно переустановлено.',
	'Disable selected'		=>	'Выбранные расширения были отключены.',
	'Enable selected'		=>	'Выбранные расширения были включены.',
	'Uninstall selected'	=>	'Выбранные расширения были удалены.',
	'Input error'			=>	'Неверные данные!',
	'Disable checked'		=>	'Отключить выбранные расширения',
	'Enable checked'		=>	'Включить выбранные расширения',
	'Uninstall checked'		=>	'Удалить выбранные расширения',
	'Dependency error'		=>	'<strong>Важно!</strong> Некоторые расширения могут работать неправильно без одного или нескольких из выбранных расширений.',
	'Update error'			=>	'<strong>Важно!</strong> Доступна новая версия для %s. Нажмите \'продолжить\' для обновления.',
	'Ext update'			=>	'Обновить расширения',
	'Ignore deps'			=>	'Игнорировать зависимости',
	'Choose action'			=>	'Выберите действие',
	'Disable deps extensions'		=>	'Отключить зависимые расширения',
	'Enable main'			=>	'Включить "основные" расширения, если они установлены.',
	'Uninstall all'			=>	'get_loaded_extensions()',
	'No selected'			=>	'<strong>Внимание!</strong> Не выбрано ни одного расширения!',
	'Warnings'				=>	'<strong>Внимание!</strong> Важные сообщения:',
	'Work dependencies'		=>	'%s не будет корректно работать без %s',
	//'Select extension'		=>	'Select extension',
	'Button disable'		=>	'Отключить выбранные',
	'Button enable'			=>	'Включить выбранные',
	'Button uninstall'		=>	'Удалить выбранные',
	'Only hooks'			=>	'Обновить  связи',
	'Extension title'		=>	'Управление расширениями Pun',
	'Ext note'				=>	'В случае наличия зависимостей между расширениями вы будете предупреждены. Используйте обновление связей для удаления их из базы данных и получения заново из файла manifest.xml. Установка/удаление расширений производиться не будет и данные расширений будут сохранены.',
	'Dep error message'		=>	'<strong>Внимание!</strong> Найдены следующие ошибки зависимостей:',
	'Title column'			=> 'Информация',
	'State column'			=>	'Действия',
	'Uninstall column'		=>	'Деинсталляция',
	'Action column'			=>	'Выбор',
	'Install'				=>	'Установить',
	'Upgrade'				=>	'Обновить',

);
