<table>
    <tr>
    <th>Score</th>
    <th>Post Test Score</th>
    <th>Pre Test Score</th>
    <th>Average score</th>
    </tr>
 
    <tbody id="data"></tbody>
</table>
 
<script>
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "connection.php", true);
    ajax.send();
 
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
 
            var html = "";
            for(var a = 0; a < data.length; a++) {
                var score = data[a].score;
                var posttestscore = data[a].posttestscore;
                var pretestscore = data[a].pretestscore;
                // var average=score+posttestscore+pretestscore;
                
                var avg_polarity = (+score + +posttestscore + +pretestscore)/3 * 10;
                html += "<tr>";
                    html += "<td>" + score + "</td>";
                    html += "<td>" + posttestscore + "</td>";
                    html += "<td>" + pretestscore + "</td>";
                    html += "<td>" +avg_polarity+ "</td>";
                html += "</tr>";
            }
            document.getElementById("data").innerHTML += html;
        }
    };
</script>