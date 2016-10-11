---
layout: home
projects:
    -
        - { name: Geocoder,                 description: Geocoder }
        - { name: BazingaGeocoderBundle,    description: GeocoderBundle (Symfony2) }
        - { name: GeocoderModule,           description: GeocoderModule (ZF2) }
        - { name: GeocodableBehavior,       description: GeocodableBehavior (Propel) }
    -
        - { name: geocoder-js,              description: GeocoderJS }
        - { name: StackGeoIp,               description: StackGeoIp (Stack) }
        - { name: GeocoderServiceProvider,  description: Geocoder for Silex }
        - { name: GeocoderLaravel,          description: Geocoder for Laravel }
---

Geocoder
========

**Geocoder** is a library which helps you build geo-aware applications. It
provides an abstraction layer for geocoding manipulations, as well as a
powerful API.

**Geocoder** supports a lot of third-party services such as:
[ArcGIS Online](http://resources.arcgis.com/en/help/arcgis-online-geocoding-rest-api/).
[Bing Maps](http://msdn.microsoft.com/en-us/library/ff701715.aspx),
[Geonames](http://www.geonames.org/),
[Google Maps](http://code.google.com/apis/maps/documentation/geocoding/),
[Google Maps for Business](https://developers.google.com/maps/documentation/business/webservices),
[MapQuest](http://open.mapquestapi.com/),
[Mapzen](https://mapzen.com/documentation/search/),
[OpenCage](http://geocoder.opencagedata.com/),
[OpenStreetMap Nominatim](http://nominatim.openstreetmap.org/),
[Yandex](http://api.yandex.com.tr/maps/doc/geocoder/desc/concepts/About.xml) and
[TomTom](http://developer.tomtom.com/docs/read/Geocoding), as well as IP-to-geo services such as:
[FreeGeoIp](http://freegeoip.net/static/index.html),
[Geoip](http://php.net/manual/book.geoip.php),
[GeoIPs](http://www.geoips.com/developer/geoips-api),
[GeoIP2](https://www.maxmind.com/en/geoip2-databases),
[GeoPlugin](http://www.geoplugin.com/webservices),
[HostIp](http://www.hostip.info/),
[IpInfoDB](http://www.ipinfodb.com/),
[MaxMind web service](http://dev.maxmind.com/geoip/legacy/web-services) and
[MaxMind binary file](http://dev.maxmind.com/geoip/legacy/downloadable)

The **[Geocoder Extra](https://github.com/geocoder-php/geocoder-extra)** project also provides support for other third-party services including:
[Baidu](http://developer.baidu.com/map/geocoding-api.htm),
[DataScienceToolkit](http://www.datasciencetoolkit.org/),
[Geocoder.ca](http://geocoder.ca/),
[Geocoder.us](http://geocoder.us/),
[Geocodio](http://geocod.io/),
[Here](http://developer.here.com/rest-apis/documentation/geocoder/topics/overview.html),
[IGN OpenLS](http://api.ign.fr/accueil),
[ip2c](http://about.ip2c.org/),
[IpGeoBase](http://ipgeobase.ru/),
[IpInfo](http://ipinfo.io/developers),
[Naver](http://developer.naver.com/wiki/pages/SrchAPI),
[OGD Vienna](https://open.wien.at/site/datensatz/?id=c223b93a-2634-4f06-ac73-8709b9e16888),
[OIORest](http://geo.oiorest.dk/) and
[what3words](https://docs.what3words.com/api/v2/)

Documentation
-------------

Here are the links to the official and complete documentation pages:

* [Geocoder documentation]({{ site.url }}Geocoder)
* [GeocodableBehavior documentation (Propel)]({{ site.url }}GeocodableBehavior)
* [GeocoderBundle documentation (Symfony2)]({{ site.url }}BazingaGeocoderBundle)
* [StackGeoIp documentation (Stack Middleware)]({{ site.url }}StackGeoIp)
* [GeocoderServiceProvider documentation (Silex)]({{ site.url }}GeocoderServiceProvider)
* [GeocoderLaravel documentation (Laravel 4)]({{ site.url }}GeocoderLaravel)


Cookbook
--------

In this cookbook, you will find specific solutions for specific needs.


License
-------

**Geocoder** and its related projects are released under the [MIT
License](http://www.tldrlegal.com/license/mit-license). See the bundled
`LICENSE` file in each project for details.


Geocoder ECG (Build Status)
---------------------------

**Geocoder** is heavily unit tested. We use [Travis-CI](http://travis-ci.org) to
automatically build our projects, and here are the statuses:

{% for projects in page.projects %}
<table width="100%" class="ecg projects-{{ forloop.index }}">
    <thead>
        <tr>
        {% for project in projects %}
            <th><a href="{{ site.github_base_url }}{{ project.name }}">{{ project.description }}</a></th>
        {% endfor %}
        </tr>
    </thead>
    <tbody>
        <tr>
        {% for project in projects %}
            <td>
                <a href="{{ site.travis_base_url }}{{ project.name }}">
                    <img src="{{ site.travis_base_url }}{{ project.name }}.png" class="travis-ci" />
                </a>
            </td>
        {% endfor %}
        </tr>
    </tbody>
</table>
{% endfor %}
