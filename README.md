ZF2 Buch - Kapitel 06
=====================

Die Projektdateien für das Kapitel 06 vom Buch **Zend Framework 2 - Das
Praxisbuch** (*ISBN 978-3-8362-2610-3*) von Ralf Eggert 
aus dem Galileo-Computing Verlag installieren Sie wie folgt:

* Sie können die Projektdateien von https://github.com/ZF2Buch2/kapitel06 als  
  ZIP herunter laden und in einem geeigneten Verzeichnis entpacken, z.B.
```
  /home/devhost/zf2buch/kapitel06
```
  
* Alternativ wechseln Sie ins Verzeichnis `/home/devhost/zf2buch/` und clonen das
  GitHub Repository entsprechend, z.B.
```
    $ cd /home/devhost/zf2buch/
    $ git clone https://github.com/ZF2Buch2/kapitel06.git
    $ cd kapitel06/
```
  
* Nun aktualisieren Sie den Composer und installieren das Projekt inklusive
  aller Abhängigkeiten
```
    $ php composer.phar selfupdate
    $ php composer.phar install
```

* Als Letztes müssen Sie einen Virtual Host für den Apache2 einrichten oder einen
  bestehenden entsprechend anpassen.
```
    $ sudo touch /etc/apache2/sites-available/luigis-pizza.local
    $ sudo gedit /etc/apache2/sites-available/luigis-pizza.local
```
  Der Virtual Host könnte so aussehen:
```
    <VirtualHost *>
      ServerName luigis-pizza.local
      DocumentRoot /home/devhost/zf2buch/kapitel06/public/
      AccessFileName .htaccess
      <Directory /home/devhost/zf2buch/kapitel06/public/>
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
      </Directory>
    </VirtualHost>
```
  Weitere Details zum Einrichten des Virtual Hosts entnehmen Sie bitte den 
  Kapiteln *3.1.4 Virtual Host einrichten unter Linux* und *3.1.5 Virtual Host 
  einrichten unter Windows*
  
* Nun sollten Sie das Projekt unter http://luigis-pizza.local in Ihrem Browser 
  aufrufen können.
