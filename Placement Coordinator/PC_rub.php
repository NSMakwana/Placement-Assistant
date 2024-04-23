<?php

?>
<html>
    <head>
        <link rel="stylesheet" href="PC_rub_css.css">
    </head>
    <body>
    <div id="title">
           <center>Details of Student</center>
        </div>
    <div id="filter">
    <form id="f">
    <center><div id="q">Qualifications</div></center>
               
        <table id="f">
            <tr>
               
            </tr>
            <tr>
                <td id="op"><label for="percent_10">Min 10th %:</label></td>
                <td id="op"><select id="percent_10" name="percent_10">
                            <option value=">50%">>50%</option>
                            <option value=">60%">>60%</option>
                            <option value=">80%">>80%</option>                                        
                            <option value="NULL">-----</option>                                        
                            </select></td>
            </tr>
            <tr>
                <td id="op"><label for="percent_12">Min 10th %:</label></td>
                <td id="op"><select id="percent_12" name="percent_12">
                            <option value=">50%">>50%</option>
                            <option value=">60%">>60%</option>
                            <option value=">80%">>80%</option>                                        
                            <option value="NULL">-----</option>                                        
                            </select></td>
            </tr>
            <tr>
                <td id="op"><label for="expr">Experience(in year):</label></td>
                <td id="op"><select id="expr" name="expr">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="3">5</option>                                        
                            <option value="NULL">-----</option>                                        
                            </select></td>
            </tr>
            <tr>
                <td id="op"><label for="backlog">Backlog</label></td>
                <td id="op"><select id="backlog" name="backlog">
                            <option value="0">No Backlog</option> 
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="3">5</option>                                                       
                            </select></td>
            </tr>
            <tr>
                <td></td>
                <td id="op"><input type="submit" id="ok" name="ok" value="OK"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>