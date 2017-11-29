<?php
//This is where the private information is kept.
include("phpbook-vars.php");
//Set up all the other needed information
$global_dbh = mysql_connect($hostname, $user, $password) or
    die("Could not connect to database");
//Set the name of the database you want to work with
$db = "Team6";
//Select the database to work with
mysql_select_db($db, $global_dbh) or
    die("Could not select database");
//This the function to display the result of the query
function display_db_query($query_string, $connection, $header_bool, $table_params){
    //perform the database query
    $result_id = mysql_query($query_string, $connection) or
        die("display_db_query:". mysql_error());
    //find out the number of columns in result
    $column_count = mysql_num_fields($result_id) or
        die("display_db_query:". mysql_error());
    //Table form include optional HTML arguments pssed into function
    print("<Table $table_params >\n");
    //Optionally print a bold header at top of table
    if($header_bool){
        print("<Tr>");
        for ($column_num = 0; $column_num< $column_count; $column_num++){
            $field_name = mysql_field_name($result_id, $column_num);
            print("<Th style='padding:5px;'>$field_name</Th>");
        }
        print("</Tr>");
    }
    //print out the body of the table, using a cursor
    while($row =  mysql_fetch_row($result_id)){
    print("<Tr Align = left Valign = top>");
    for ($column_num = 0; $column_num< $column_count; $column_num++)
    print("<Td style='padding:5px;' >$row[$column_num]</Td>\n");
    print("</Tr>\n");
    }
    print("</Table>\n");
}
?>