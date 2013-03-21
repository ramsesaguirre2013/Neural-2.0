<?php

	abstract class AyudasRequerimientos {
		
		public static function ValidarVersionPHP() {
			if(version_compare(phpversion(), '5.3.2', '>=')) {
				echo '<div class="alert alert-success"><strong>Versi�n PHP ',phpversion(),':</strong> La versi�n de PHP es Correcta.</div>';
			}
			else {
				echo '<div class="alert alert-error"><strong>Versi�n PHP ',phpversion(),' Incorrecta:</strong> Se requiere que tenga una versi�n o igual a <strong>5.3.2</strong> para su buen funcionamiento.</div>';
			}
		}
		
		public static function ValidarCtypeAlpha() {
			if(function_exists('ctype_alpha')) {
				echo '<div class="alert alert-success"><strong>Extensi�n ctype_alpha Disponible</strong>.</div>';
			}
			else {
				echo '<div class="alert alert-error"><strong>No Se Encuentra Extensi�n:</strong> Es Necesaria la Extensi�n <strong>ctype_alpha</strong> para el funcionamiento del Framework, por favor instale dicha Extensi�n.</div>';
			}
		}
		
		public static function ValidarMCrypt() {
			if(extension_loaded('mcrypt')) {
				echo '<div class="alert alert-success"><strong>Extensi�n Mcrypt Disponible</strong>.</div>';
			}
			else {
				echo '<div class="alert alert-error"><strong>No Se Encuentra Extensi�n:</strong> Es Necesaria la Extensi�n <strong>Mcrypt</strong> para el funcionamiento del Framework, por favor instale dicha Extensi�n.</div>';
			}
		}
		
		public static function EscribirEnCache() {
			if(is_writable(__SysNeuralFileRootCache__)) {
				echo '<div class="alert alert-success"><strong>Directorio Cache</strong>: Disponible.</div>';
			}
			else {
				echo '<div class="alert alert-error"><strong>Directorio Cache Sin Permisos:</strong> Es necesario que de permisos de lectura y escritura a la carpeta de cache correspondiente.</div>';
			}
		}
		
		public static function ValidarPDO() {
			if(extension_loaded('PDO')) {
				$Datos = '<div class="alert alert-success"><strong>Extensi�n PDO Disponible</strong>.<br /><br />Drivers Disponibles:<ol>';
				foreach (PDO::getAvailableDrivers() AS $Driver) {
					$Datos .= '<li>'.mb_strtoupper($Driver).'</li>';
				}
				$Datos .= '</ol></div>';
				echo $Datos;
			}
			else {
				echo '<div class="alert alert-error"><strong>No Se Encuentra Extensi�n:</strong> Es Necesaria la Extensi�n <strong>PDO</strong> para el funcionamiento del Framework, por favor instale dicha Extensi�n.</div>';
			}
		}
	}