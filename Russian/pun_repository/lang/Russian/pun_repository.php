<?php

/**
 * PunBB Repository extension language file
 *
 * @copyright Copyright (C) 2008 PunBB, partially based on code copyright (C) 2008 FluxBB.org
 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 * @package pun_repository
 */

if (!defined('FORUM')) die();

$lang_pun_repository = array(
	'Can\'t access repository'		=> '<strong>ОШИБКА!</strong> Хранилище в настоящее время недоступно. Попробуйте проверить его позже.',
	'PunBB Repository'				=> 'PunBB-хранилище',
	'Files mode and owner'			=> '<strong>ВНИМАНИЕ!</strong> Пользователь будет назначен владельцем файлов и каталогов, созданных при загрузке и установке расширения. Права доступа к созданным каталогам назначены как 0777.',
	'Download and install'			=> 'Скачать и установить расширение',
	'Can\'t create directory'		=> '<strong>ОШИБКА!</strong> Невозможно создать каталог \'%s\'. Наверное, каталог \'extensions\' не имеет достаточно прав.',
	'Directory already exists'		=> '<strong>ОШИБКА!</strong> Каталог \'%s\' уже существует.',
	'Extension download failed'		=> '<strong>ОШИБКА!</strong> Загрузка расширения неудачна.',
	'No writting right'				=> '<strong>ОШИБКА!</strong> Каталог \'extensions\' не имеет достаточно прав для создания файла.',
	'Can\'t extract'				=> '<strong>ОШИБКА!</strong> Файлы не могут быть извлечены из загруженного архива.',
	'Download successful'			=> 'Загрузка архива прошла успешно. Расширение готово к установке.',
	'Incorrect manifest.xml'		=> 'Архив загружен успешно, но manifest.xml является неверным.',
	'Extract errors:'				=> 'При извлечении возникли следующие ошибки:',
	'Direct download links:'		=> 'Прямые ссылки на скачивание:',
	'Can\'t write to cache file'	=> '<strong>ОШИБКА!</strong> Не удается записать файл в кэш.',
	'All installed or downloaded'	=> '<strong>ВНИМАНИЕ!</strong> Вы установили или загрузили все доступные расширения. Поздравляем!',
	'Download and update'			=> 'Загрузка и обновление',
	'Unable to rename old dir'		=> '<strong>ОШИБКА!</strong> Невозможно переименовать директорию \'%s\', чтобы обновить расширение.',
	'Dependencies:'					=> 'Зависимости:',
	'Resolve dependencies:'			=> 'Необходимо сначала установить эти зависимые расширения:',
	'Clear cache'					=> 'Очистить кэш',
	'Unable to remove cached file'	=> 'Не удается удалить файл кэширования.',
	'Cache has been successfully cleared' => 'Кэш был успешно очищен',

	'Unsupported compression type'	=>	'Неподдерживаемые типы сжатия',
	'Supported types are'			=>	'Поддерживаемые типы \'gz\' и \'bz2\'',
	'The extension couldn\'t be found'	=>	'Расширение \'%s\' не найдено',
	'Please make sure your version of PHP was built with'	=>	'Пожалуйста, убедитесь, что версия PHP была установлена с поддержкой \'%s\'',
	'Invalid string list'			=>	'Недопустимая строка списка',
	'Unable to open in read mode'	=>	'Не удается открыть в режиме чтения',
	'Unable to open in write mode'	=>	'Не удается открыть в режиме записи',
	'Unknown or missing compression type'	=>	'Неизвестный или отсутствующий тип сжатия',
	'Invalid file descriptor'		=>	'Неправильный файл описания',
	'File does not exist'			=>	'Файл \'%s\' не существует',
	'Directory can not be read'		=>	'Каталог \'%s\' не может быть прочитан',
	'Invalid file name'				=>	'Неверное имя файла',
	'Unable to open file in binary read mode'	=>	'Невозможно открыть файл \'%s \' в бинарном режиме чтения',
	'Invalid block size'			=>	'Неверный размер блока',
	'Invalid checksum for file'		=>	'Неверная контрольная сумма файла',
	'calculated'					=>	'вычисляется',
	'expected'						=>	'ожидается',
	'Malicious .tar detected, file'	=>	'Обнаружен вредоносный архив .tar, файл \' %s \' не может быть установлен в запрошенное дерево каталогов',
	'Invalid extract mode'			=>	'Неправильный режим извлечения',
	'File already exists as a directory'	=>	'Файл \'%s\' уже существует в каталоге',
	'Directory already exists as a file'	=>	'Каталог \'%s\' уже существует в виде файла',
	'File already exists and is write protected'	=>	'Файл \'%s\' уже существует и защищен от записи',
	'Unable to create path for'		=>	'Невозможно создать путь',
	'Unable to create directory'	=>	'Невозможно создать каталог',
	'Unable to extract symbolic link'	=>	'Не удается извлечь символическую ссылку',
	'Error while opening {} in write binary mode'	=>	'Ошибка при открытии (\'%s\') для записи в бинарном режиме',
	'Extracted file does not have the correct file size'	=>	'Извлеченный файл \'%s\' имеет неверный размер',
	'Archive may be corrupted'		=>	'Архив может быть поврежден.',
	'Copy fail'						=>	'Невозможно скопировать новые файлы расширения в старый каталог %s.',
);


