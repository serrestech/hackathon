# Serres Hackathon 3.0 - Topic

## Basic information

You are responsible for developing a prototype application that drivers of **waste collector vehicles (dustbin lorries)** will use to suggest the shortest route when picking-up and transporting rubbish to the central waste management location.

You shall assume that all dustbins are located in **8 different villages** and have to be collected. All lorries start from a central depot in Serres, and need to transfer the waste to "Adelfiko". The exact location of the dustbins in each village can be found in the table below.

The available routes to the other villages are depicted in the following graph. All routes are considered for this problem are two way streets.

![Locations in Graph](http://hackathon.serrestech.gr/pages/topic/routes.png)

| **Location**  | **Coordinates (Lat/Lon)** |
| -------------: |:-------------:|
| Serres | 41.092083, 23.541016 |
| Provatas | 41.068238, 23.390686 |
| A. Kamila | 41.058320, 23.424134 |
| K. Kamila | 41.020431, 23.483293 |
| K. Mitrousi | 41.058680, 23.457547 |
| Koumaria | 41.016434, 23.434656 |
| Skoutari | 41.020032, 23.520701 |
| Adelfiko | 41.014645, 23.457354 |
| Ag. Eleni | 41.003545, 23.559196 |
| Peponia | 40.988154, 23.516756 |

_**Table 1**. Exact location (Lat/Lon) of the dustbins in each Location (village) using the WGS 84 Web Mercator system._


## Part A

1. Locate the villages on the map, highlight them and overlay the graph over them.
2. Calculate the distances between all available villages using a "Distance-API" from any available service (Google Maps, Open Street Maps, Bing etc) and show it on the map. Please allow your program to also manually accept a file containing the distances (in km) between nodes. The file will be in text format, where each line will have the following form:

```
"Origin": <X,Y>; "Destination": <X,Y>; "Distance": <X>
```

## Part B

1. Assume that there are dustbins in all of the 8 villages and a lorry will need to pick them up and transfer all of them to "Adelfiko". Deduce the shortest route to follow
2. Do the above but with the requirement that the lorry only goes to "Adelfiko" when it is full.
3. Assume that there are dustbins only in "Koumaria", "Skoutari", "Peponia" and "Provatas". Deduce the shortest route to follow.
4. Assume the same as before, but after you picked up the second dustbin, dustbins also appear in "Provatas" and "K. Mitrousi".
5. Assume that the dustbins are more than what one lorry can transfer and you need two lorries to transfer them. Assume that each dustbin weighs 100kg and each lorry can only carry up to 400kg and that all dustbins are full. Deduce the shortest route for the two lorries.
6. Assume that the dustbins are more than what one lorry can transfer. Assume that you have one lorry that can carry 500kg and one that can carry 300kg. Deduce the shortest route for the two lorries whereas the weight of the bin in each village are as follows:


| **Bin weight (kg)** | **Location** |
| -------------: | ------------ |
| 60 | Provatas |
| 40 | A. Kamila |
| 40 | K. Kamila |
| 160 | K. Mitrousi |
| 50 | Koumaria |
| 200 |Skoutari |
| 100 | Ag. Eleni |
| 150 | Peponia |

_**Table 2**. Weight of the bin (kg) in each Location_


## Part C

The application developed will need to have a **friendly UI** to allow the driver to easily enter new locations (up to 10) and calculate best possible routes based on a graph provided (the driver draws the graph) or even better deducing the graph from the available routes, using an appropriate Maps-based API.

## Part D

The **quality of the Algorithm** you present and the **Presentation** you make will be evaluated.

## Marking - Evaluation

Each project will receive a mark from 0 to 100. 

Part A weighs 10%, Part B weighs 60%, Part C weighs 15% and Part D will weigh 15%. 

If you can deduce a proper graph using  information for the available routes your map API provides (i.e. deduce correctly how the edges connect the vertices in the graph as in the example above) a bonus 10 marks will be given.

The A and C parts will be judged by the SerresTech/TEI Committee and by the Sponsors. Also the same way a mark will be given to your algorithm (described in your presentation).

In Part B. For every part p, and each team n the distance d(n) calculated by team n, will be divided against the max(d(n)) of that part.

Then, for each team n the sum S(n) will be taken from all parts. The grade for each team will be: min(S(n))/S(n) * 60  points.

The **best three teams** (with respect to the total points earned) **will get the 1st, 2nd and 3rd price**.
