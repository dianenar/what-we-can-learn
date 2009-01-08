<?php
/**
 * BackendPro
 *
 * An open source development control panel written in PHP
 *
 * @package		BackendPro
 * @author		Adam Price
 * @copyright	Copyright (c) 2008, Adam Price
 * @license		http://www.gnu.org/licenses/lgpl.html
 * @link		http://www.kaydoo.co.uk/projects/backendpro
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Log folder is writable
 *
 * Check the log folder is writable
 *
 * @package 	BackendPro
 * @subpackage 	Install
 */
class LogFolderWritable extends Component
{
	var $name = "Log Folder writable";
	var $path = "/system/logs";

	function install()
	{
		if( is_writeable(BASEPATH.$this->path))
		{
			$this->status = TRUE;
		}
		else
		{
			$this->error = $this->path . " folder isn't writable";
		}

		return $this->status;
	}
}

/**
 * Asset folders are writable
 *
 * Check all the asset folders are writable
 *
 * @package 	BackendPro
 * @subpackage 	Install
 */
class AssetFoldersWritable extends Component
{
	var $name = "Asset folders writable";
	var $path_array = array(
			'/assets/admin/css',
			'/assets/admin/js',
			'/assets/public/css',
			'/assets/public/js',
			'/assets/shared/css',
			'/assets/shared/js');

	function install()
	{
		foreach($this->path_array as $path)
		{
			if ( ! is_writable(BASEPATH . $path))
			{
				$this->error = $path . " folder isn't writable";
				return $this->status;
			}
		}
		$this->status = TRUE;
		return $this->status;
	}
}

/**
 * Cache folder is writable
 *
 * Check the CodeIgniter cache folder is writable
 *
 * @package 	BackendPro
 * @subpackage 	Install
 */
class CacheFolderWritable extends Component
{
	var $name = "Cache Folder writable";
	var $path = "/system/cache";

	function install()
	{
		if( is_writeable(BASEPATH . $this->path))
		{
			$this->status = TRUE;
		}
		else
		{
			$this->error = $this->path . " folder isn't writable";
		}
		return $this->status;
	}
}

/**
 * Config files are writable
 *
 * Check all config files we need to write to later
 * are writable
 *
 * @package 	BackendPro
 * @subpackage 	Install
 */
class ConfigFilesWritable extends Component
{
	var $name = "Config files writable";
	var $file_array = array(
			'/system/application/config/config.php',
			'/system/application/config/database.php',
			'/modules/recaptcha/config/recaptcha.php');

	function install()
	{
		foreach($this->file_array as $file)
		{
			if ( !is_writable(BASEPATH.$file))
			{
				$this->error = $file . " file isn't writable";
				return $this->status;
			}
		}
		$this->status = TRUE;
		return $this->status;
	}
}



/* End of file FileSystemCheck.php */
/* Location: ./install/components/FileSystemCheck.php */