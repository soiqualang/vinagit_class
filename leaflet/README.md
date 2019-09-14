# vinagit_class
Vinagit class

# Leaflet

https://leafletjs.com/

https://dothanhlong.org/OpenLayers3-Leaflte-Cookbook/leaflet/README.html


```sql
select row_to_json(fc)
from (
    select
        'FeatureCollection' as "type",
        array_to_json(array_agg(f)) as "features"
    from (
        select
            'Feature' as "type",
            ST_AsGeoJSON(ST_Transform(geom, 4326), 6) :: json as "geometry",
            (
                select json_strip_nulls(row_to_json(t))
                from (
                    select
                        id,shbando,shthua
                ) t
            ) as "properties"
        from thuadat2
        where
            id=3880
        limit 10
    ) as f
) as fc;
```


https://www.postgis.net/docs/ST_AsGeoJSON.html