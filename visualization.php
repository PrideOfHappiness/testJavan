<!DOCTYPE html>
<html>
<head>
    <title>Diagram Pohon Silsilah Keluarga</title>
    <script src="https://d3js.org/d3.v7.min.js"></script>
</head>
<body>
    <div id="tree"></div>

    <script>
        fetch('getDataForVisualization.php')
            .then(response => response.json())
            .then(data => {
                // Buat diagram pohon menggunakan data yang diterima
                drawTree(data);
            })
            .catch(error => console.error('Error:', error));

        function drawTree(data) {
            var treeData = {
                "name": "Keluarga",
                "children": convertData(data)
            };

            var margin = {top: 20, right: 90, bottom: 30, left: 90},
                width = 960 - margin.left - margin.right,
                height = 500 - margin.top - margin.bottom;

            var svg = d3.select("#tree").append("svg")
                .attr("width", width + margin.right + margin.left)
                .attr("height", height + margin.top + margin.bottom)
                .append("g")
                .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

            var root = d3.hierarchy(treeData);

            var tree = d3.tree().size([height, width]);

            tree(root);

            var link = svg.selectAll(".link")
                .data(root.links())
                .enter().append("path")
                .attr("class", "link")
                .attr("d", d3.linkHorizontal()
                    .x(function(d) { return d.y; })
                    .y(function(d) { return d.x; }));

            var node = svg.selectAll(".node")
            .data(root.descendants())
            .enter().append("g")
            .attr("class", "node")
            .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });

            node.append("circle")
                .attr("r", 5);

            node.append("text")
            .attr("dy", ".31em")
            .attr("x", function(d) { return d.children ? -13 : 13; })
            .style("text-anchor", function(d) { return d.children ? "end" : "start"; })
            .text(function(d) {
                return d.data.nama + " (" + d.data.jenis_kelamin + ") - " + d.data.status;
            });
        }

        function convertData(data) {
            var result = [];
            var map = {};

            // Iterasi untuk membuat mapping data
            data.forEach(function(entry) {
                map[entry.nama] = entry;
                map[entry.nama].children = [];
            });

            // Iterasi untuk mengisi children dari setiap entry
            data.forEach(function(entry) {
                var parent = map[entry.ortu];
                if (parent) {
                    parent.children.push(map[entry.nama]);
                } else {
                    result.push(map[entry.nama]);
                }
            });

            return result;
        }
    </script>
</body>
</html>
