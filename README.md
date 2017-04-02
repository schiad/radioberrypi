# radioberrypi
Radio Flux player with web interface. <br>

This project is a radio player controled with an web interface. <br>
I create this project for Raspberry Pi but it's can be used all linux configurations. <br>

## Install instructions

cd /var/www/html <br>
git clone http://www.github.com/schiad/radioberrypi (may user sudo) <br>
vim index.php # Edit $USER = "your username" <br>
sudo visudo # Add at end of file add "www-data ALL=(ALL:ALL) NOPASSWD: ALL" at end of the file and tab 'CTRL + x' to save <br>
open your web navigator goto http://localhost/radioberrypi <br>
Enjoy <br>

## Future features

[x] Working radio.
[ ] Integrate radio stations in SQL database.
[ ] Make a new interface with radio station management.
[ ] Make responsive and cool interface.
Any help is welcome.

Soon more radio stations.
