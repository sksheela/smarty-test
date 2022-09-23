<html>
 <head>
 </head>
 <body>

 {foreach $Contacts as $contact}
  {foreach $contact as $key => $value}
    {$key}: {$value}
  {/foreach}
{/foreach}
  
<h1>{$Name}</h1>

{* Question No.3 *}
<h4>Question No.3 </h4>

{**** Example One ****}
{html_table loop=$data}

<table border="1">
<tbody>
<tr><td>1</td><td>2</td><td>3</td></tr>
<tr><td>4</td><td>5</td><td>6</td></tr>
</tbody>
</table>
<br/>

 {html_options name=foo options=$myOptions selected=$mySelect}
<br/>

<ul>
{foreach $myPeople as $value}
   {foreach $value as $val}
<li>{$val@key} : {$val}</li>
   {/foreach}
{/foreach}
</ul>

<br/>

{* Question No 4 *}
<h5>Question No 4 Counter vs Cycle</h5>
<p>Counter</p>
{* initialize the counter *}
{counter start=0 skip=2}<br />
{counter}<br />
{counter}<br />
{counter}<br />

<br/>
<p>Cycle</p>


{section name=rows loop=$data}
<tr class="{cycle values="odd,even"}">
   <td>{$data[rows]}</td>
</tr>
{/section}


<h4>Question No.9</h4>
{* Question No.9 *}
{* Checkbox *}
{html_checkboxes name='id' values=$cust_ids output=$cust_names
   selected=$customer_id  separator='<br />'}
<br/><br/>
   {* Radio *}
   {html_radios name='id' options=$cust_radios
     selected=$customer_id separator='<br />'}

     <br/><br/>

     

 </body>
</html>