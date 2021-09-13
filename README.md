## Recomedaciones para carga de contenido


### Destinations
#### resorts 
Para las imagenes las dimisiones depende de la cantidad de resorts que se muestren (https://royalreservations.com/beach-destinations/cancun/things-to-do-in-cancun)

**Tamaño de las imagenes**
- 1 (1100 X 700)
- 2 (690 X 500) (690 X 500)
- 3 (690 X 500) (690 X 500) (690 X 500) (690 X 500)
- 4 (690 X 1000) (690 X 1000) (690 X 500) (690 X 500)


## Ficha de hotel 
- Agregar el archivo "slider" dentro de cada hotel para el slider de la ficha del hotel ("resorts/the-villas-at-simpson-bay-resort/slider")
## Textos
### general
- 'all_destinations' => 'All destinations'
- 'all-resorts' => 'All resorts',
- 'how_to_get' => 'How to get'
- booking.btn.flight => 'Fight'
## Imagenes de famili vacations agregar las dimensiones siguientes
- 'type-of-trips/'.$trip.'.destinations.'.($i).'.resorts.'.($k).'.resort.'thumbnails.1110x531


/vacation-experiences
/deals/hotels
/about-us
/about-us/why-book-with-royalreservations
/about-us/best-deal-guaranteed
/about-us/terms-of-use
/about-us/privacy-policy
/deals/hotels/special-offers
/beach-destinations/cancun/vacation-special-offers-in-cancun
/beach-destinations/cancun/the-best-beach-resorts-in-cancun
/beach-resorts/the-royal-sands/the-royal-sands-resort-policies


Supervisor
install: pip install supervisor
configure:
mkdir -p /etc/supervisord/conf.d
echo_supervisord_conf > /etc/supervisord/supervisord.conf
echo "files = conf.d/*.conf" >> /etc/supervisord/supervisord.conf
setup as service: wget supervisord.service -O /usr/lib/systemd/system/supervisord.service
start service systemctl start supervisord
view service status: systemctl status supervisord
auto start service on system startup: systemctl enable supervisord
/etc/supervisord/conf.d


[program:laravel-worker]
command=/usr/local/bin/ea-php74 /home/royalreservation/royalreservations.com/artisan queue:listen
process_name=%(program_name)s_%(process_num)02d
numprocs=1
priority=999
autostart=true
autorestart=true  
startsecs=1
startretries=3
user=apache
redirect_stderr=true
stdout_logfile=/home/royalreservation/royalreservations.com/storage/logs/queue_listen.log

end process: ps -ef |grep nohup 

last PId [1] 17256