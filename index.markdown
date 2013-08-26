---
layout: home
projects:
    - { name: Geocoder,                 description: Geocoder }
    - { name: BazingaGeocoderBundle,    description: GeocoderBundle (Symfony2) }
    - { name: GeocoderModule,           description: GeocoderModule (ZF2) }
    - { name: GeocodableBehavior,       description: GeocodableBehavior (Propel) }
---

Geocoder
========

**Geocoder** is a library which helps you build geo-aware applications. It
provides an abstraction layer for geocoding manipulations, as well as a
powerful API.

**Geocoder** supports a lot of third-party services such as:
[FreeGeoIp](http://freegeoip.net/static/index.html),
[HostIp](http://www.hostip.info/),
[IpInfoDB](http://www.ipinfodb.com/),
[Google Maps](http://code.google.com/apis/maps/documentation/geocoding/),
[Google Maps for Business](https://developers.google.com/maps/documentation/business/webservices),
[Bing Maps](http://msdn.microsoft.com/en-us/library/ff701715.aspx),
[OpenStreetMaps](http://nominatim.openstreetmap.org/),
[CloudMade](http://developers.cloudmade.com/projects/show/geocoding-http-api),
[Geoip](http://php.net/manual/book.geoip.php),
[MapQuest](http://open.mapquestapi.com/),
[OIORest](http://geo.oiorest.dk/),
[GeoCoder.ca](http://geocoder.ca/),
[GeoCoder.us](http://geocoder.us/),
[IGN OpenLS](http://www.ign.fr/),
[DataScienceToolkit](http://www.datasciencetoolkit.org/),
[Yandex](http://api.yandex.com.tr/maps/doc/geocoder/desc/concepts/About.xml),
[GeoPlugin](http://www.geoplugin.com/webservices),
[GeoIPs](http://www.geoips.com/developer/geoips-api),
[MaxMind web service](http://dev.maxmind.com/geoip/legacy/web-services),
[MaxMind binary file](http://dev.maxmind.com/geoip/legacy/downloadable),
[Geonames](http://www.geonames.org/),
[IpGeoBase](http://ipgeobase.ru/),
[Baidu](http://developer.baidu.com/map/geocoding-api.htm),
[TomTom](http://developer.tomtom.com/docs/read/Geocoding),
and
[ArcGIS Online](http://resources.arcgis.com/en/help/arcgis-online-geocoding-rest-api/).


Documentation
-------------

Here are the links to the official and complete documentation pages:

* [Geocoder documentation]({{ site.url }}Geocoder)
* [GeocodableBehavior documentation (Propel)]({{ site.url }}GeocodableBehavior)
* [GeocoderBundle documentation (Symfony2)]({{ site.github_base_url }}BazingaGeocoderBundle/blob/master/Resources/doc/index.md#bazingageocoderbundle)


License
-------

**Geocoder** and its related projects are released under the [MIT
License](http://www.tldrlegal.com/license/mit-license). See the bundled
`LICENSE` file in each project for details.


Geocoder ECG (Build Status)
---------------------------

**Geocoder** is heavily unit tested. We use [Travis-CI](http://travis-ci.org) to
automatically build our projects, and here are the statuses:

<table width="100%" class="ecg">
    <tr>
    {% for project in page.projects %}
        <th><a href="{{ site.github_base_url }}{{ project.name }}">{{ project.description }}</a></th>
    {% endfor %}
    </tr>
    <tr>
    {% for project in page.projects %}
        <td>
            <a href="{{ site.travis_base_url }}{{ project.name }}">
                <img src="{{ site.travis_base_url }}{{ project.name }}.png" />
            </a>
        </td>
    {% endfor %}
    </tr>
</table>
