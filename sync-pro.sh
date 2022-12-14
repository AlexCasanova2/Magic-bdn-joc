#!/bin/bash
# importar el proyecto sin svn
# next line creates an autobackup before rsync
# next line rsync with --delete option USE n param to make tests

#CONFIGURACION DEL FICHERO DE SINCRONIZACION
TITLE="RNEAULT TANDEM"
USER="tandemprojects"
DOMAIN="tandemprojects.cat"
ENVIRONMENT="PRO"
REMOTEDIR="/home/tandemprojects/public_html/renault"
LOCALDIR="."

#NO TOCAR DE AQUI PARA ABAJO
#____________________________________________________________
function initial_sync(){
	echo "SINCRONIZACION DE PRUEBA"
	rsync -PavHxcn --delete --exclude="readme.md" --exclude="*.sql" --exclude="sync-*" --exclude=".gitattributes" --exclude=".project" --exclude=".gitignore" --exclude=".git" $LOCALDIR $USER@$DOMAIN:$REMOTEDIR |grep --color -E '^|deleting';

	while true; do
		echo " "
		echo -e " \E[31;47m /!\ATENCIÓN/!\ \033[0m Esta acción clonará el espacio local en PRE y \E[31;47mBORRARA LOS FICHEROS DEL SERVIDOR MOSTRADOS ARRIBA\033[0m."
		read -p ">> Desea continuar? [y|n] " yn
		case $yn in
			[Yy]* ) rsync -PavHxc --delete --exclude="readme.md" --exclude="*.sql" --exclude="sync-*" --exclude=".gitattributes" --exclude=".project" --exclude=".gitignore" --exclude=".git" $LOCALDIR $USER@$DOMAIN:$REMOTEDIR; break;;
			[Nn]* ) return 1; break;;
			* ) echo ">> ¿Puedes repetir?"
		esac
	done
}

function regular_sync(){
	echo "SINCRONIZACION DE PRUEBA"
	rsync -PavHxcn --exclude="storage/framework/*" --exclude="storage/logs/*" --exclude="public/images/*" --exclude="public/uploads/*" --exclude=".htaccess" --exclude="composer.phar" --exclude=".env*" --exclude="readme.md" --exclude="error_log" --exclude="wp-config*" --exclude="*.sql" --exclude="sync-*" --exclude=".gitattributes" --exclude=".project" --exclude=".gitignore" --exclude=".git" $LOCALDIR $USER@$DOMAIN:$REMOTEDIR ;

	while true; do
		echo " "
		echo " Esta accion sincronizará los ficheros mostrados arriba."
		read -p ">> Desea continuar? [y|n] " yn
		case $yn in
			[Yy]* ) rsync -PavHxc --exclude="storage/framework/*" --exclude="storage/logs/*" --exclude="public/uploads/*" --exclude=".htaccess" --exclude="composer.phar" --exclude=".env*" --exclude="readme.md" --exclude="error_log" --exclude="wp-config*" --exclude="*.sql" --exclude="sync-*" --exclude=".gitattributes" --exclude=".project" --exclude=".gitignore" --exclude=".git" $LOCALDIR $USER@$DOMAIN:$REMOTEDIR; break;;
			[Nn]* ) return 1; break;;
			* ) echo ">> ¿Puedes repetir?"
		esac
	done


}

clear
echo ""
echo "=====================================================stk"
echo "       Sincronización de $TITLE ($ENVIRONMENT)."
echo "    esto sincronizará con $DOMAIN"
echo "======================================================="

while true; do
	echo " Presione la tecla [ENTER] para sincronizar normalmente (RECOMENDADO)."
	echo "   [Y] Sincroniza con el servidor BORRANDO EL DESTINO! (NO recomendado)"
	read -p " : " yn
	case $yn in
		[Yy]* ) initial_sync; break;;
		* ) regular_sync; break;;
	esac
done


echo ">> Fin del proceso ====================================="
