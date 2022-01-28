<?php

    include 'logic.php';

?>

<html>
<head>
 <style>
 .div {
  border: 10px;
  border-size: dotted;
  margin: 100px;
  width: 800px;
  height: 1500px;
  padding-left: 50px;
  background-color: blue;
 }
 .tel {
  color: yellow;
 }
</style>
<script>
  var a=prompt("THIS IS A EXAMINATION PROGRAMME TO TEST YOUR KNOWLEGE. NOTE:your answer will be given in small letters")
  var age = prompt("who is the richeest man in the africa. A.Dangote B.billgate c.monyer"); console.log(age);
   if (age =="a") {
    alert ('YOU ARE CORRECT');
    }
	else {
	alert ('WRONG.... A. IS THE CORRECT ANSWER');
	};
</script>
<script>
	var a = prompt("calculate this x+2=5, solve for x. A.3 B.6 C.6 D. 1"); console.log(a);
	 if (a=="a") {
	  alert('correct');
	 }
	 else {
	  alert('wrong.... the correct answer is A')
	 }
</script>
<script>
 var b=prompt("calculate the HCF of 3,10,15...  A.3,  B.10,  C.15,  D.5,  E.NOone of the above"); console.log(b);
  if (b=="e") {
  alert('correct');
  }
  else{
   alert('WRONG.....THE CORRECT OPTION IS E');
  }
</script>
</head>
<body>
<div class="div">
<form action="C:\Users\lap\Desktop\my paritical/sign.html" method="post">
             <table>
                <tr>
                  <td>
                       Name :
                  </td>
                  <td>
                       <input type="text" width="100px" height="50px"placeholder="name" name="" required>
                  </td>
                </tr>
                  <tr>
                  <td>
                      password :
                  </td>
                  <td>
                      <input type="password" placeholder="password" autocomplete="new-password" name="" required>
                  </td>
                  </tr>
                  <tr>
                    <td>
                        Gender :
                    </td>
                     <td>
                       <input type="radio" name="male" 
					   > male
                       <input type="radio" value="Gender" female
                     </td>
                  </tr>
                   <tr>
                    <td>
                        Age:
                    </td>
					<td>
					 <input type="date">
					</td>
                    <td>
                       <select required>
                           <option></option>
                           <option>18-</option>
                           <option>18</option>
                           <option>19</option>
                           <option>20</option>
                           <option>21</option>
                           <option>22</option>
                           <option>23</option>
                           <option>24</option>
                           <option>25</option>
                           <option>26</option>
                           <option>27</option>
                           <option>28</option>
                           <option>29</option>
                           <option>30</option>
                           <option>31</option>
                           <option>32</option>
                           <option>32</option>
                           <option>34</option>
                           <option>34</option>
                           <option>35</option>
                           <option>36</option>
                           <option>37</option>
                           <option>38</option>
                           <option>39</option>
                           <option>40</option>
                           <option>41</option>
                           <option>42</option>
                           <option>43</option>
                           <option>44</option>
                           <option>45</option>
                           <option>46</option>
                           <option>47</option>
                           <option>48</option>
                           <option>49</option>
                           <option>49+</option>
                       </select>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        Email :
                    </td>
                     <td>
                        <input type="email" placeholder="Email" name="" required>
                     </td>
                  </tr>
                  <tr>
                     <td>
                       phone no :
                     </td>
                     <td>
                       <select required>
                           <option>+1</option>
                           <option>+3</option>
                           <option>+10</option>
                           <option>+30</option>
                           <option>+50</option>
                           <option>+112</option>
                           <option>+145</option>
                           <option>+234</option>
                       </select>
                       <input pattern="\d*" title="Numbers only, please." placeholder="input phone number" required>
                     </td>
                  </tr>
				  <tr>
                    <td>
                      Address:
                    </td>
                    <td>
                       <input type"adress" placeholder="House address 1" name="" required>
                       <input type"adress" placeholder="House address 2" name="" required>
                    </td>
                  </tr>
                  <tr>
                  <td>
                     Postal code:
                  </td>
                  <td>
                     <input pattern="\d*" title="poster codes or zip codes allowed please" placeholder="postal or zip code" name="" required>
                  </td>
                  </tr>
                  <tr>
                    <td>
                       Location:
                    </td>
                    <td>
                       <option>North America</option>
                             <select>
                                 <option></option>
                                 <option>CANADA</option>
                                 <option>USA</option>
                                 <option>OTHERS</option>
                                 <input type"location" placeholder="city" name="" >
                             </select>
                        <option>South America</option>
                             <select>
                                <option></option>
                                 <option>BRASIL</option>
                                 <option>CHILE</option>
                                 <option>COSTA RICA</option>
                                <option>MEXICO</option>
                                <option>PERU</option>
                                <option>OTHERS</option>
                                 <input type"location" placeholder="city" name="" >
                             </select>
                        <option>Asia</option>
                             <select>
                                 <option></option>
                                 <option>AUSRALIA</option>
                                 <option>DUBIA</option>
                                 <option>CHINA</option>
                                <option>INDIA</option>
                                <option>JAPAN</option>
                                <option>MALAYSIA</option>
                                <option>NEW ZEALAND</option>
                                <option>NORTH KOREA</option>
                                <option>PHILIPPINES</option>
                                <option>SINGAPORE</option>
                                <option>SOUTH KOREA</option>
                                <option>TALWAN</option>
                                <option>THAILAND</option>
                                 <option>VIETNAM</option>
                                 <option>OTHERS</option>
                                 <input type"location" placeholder="city" name="" >
                             </select>
                        <option>Europu</option>
                             <select>
                                 <option></option>
                                 <option>BERLIN</option>
                                 <option>BRITAIN</option>
                                <option>CROATIA</option>
                                <option>FINLAND</option>
                                <option>FRANCE</option>
                                <option>GERMANY</option>
                                <option>HOLAND</option>
                                <option>ICELAND</option>
                                <option>IRELAND</option>
                                <option>ITALY</option>
                                <option>NETHERLAND</option>
                                <option>RUSSIA</option>
                                <option>SCOTTLAND</option>
                                <option>SPAIN</option>
                                <option>UKARIAIN</option>
                                <option>OTHERS</option>
                                 <input type"location" placeholder="city" name="" >
                             </select>
                        <option>Africa</option>
                             <select>
                                 <option></option>
                                 <option>ALGERIA</option>
                                 <option>CHAD</option>
                                <option>CONGO</option>
                                <option>EGYPY</option>
                                <option>ETHIOPIA</option>
                                <option>GHANA</option>
                                <option>IVORY COAST</option>
                                <option>KENYA</option>
                                <option>LIBERA</option>
                                <option>MAIL</option>
                                <option>MOROCO</option>
                                <option>MOZAMBIA</option>
                                <option>NIGERIA</option>
                                <option>SOUTH AFRICA</option>
                                <option>TANZANIA</option>
                                <option>TUNISIA</option>
                                <option>ZAMBIA</option>
                                 <option>OTHERS</option>
                                 <input type"location" placeholder="city" name="">
                             </select>
                      </select>
                    </td>
                    <td>
                      <select>
                          <option>LIST SUPPORTED COUNTRIES</option>
                          <option>ALGERIA</option>
                          <option>AUSRTALIA</option>
                          <option>BERLIN</option>
                          <option>BRASIL</option>
                          <option>BRITAIN</option>
                          <option>CANDA</option>
                          <option>CHAD</option>
                          <option>CHILE</option>
                          <option>CHINA</option>
                          <option>CONGO</option>
                          <option>COSTA RICA</option>
                          <option>CROATIA</option>
                          <option>DUBIA</option>
                          <option>EGYPT</option>
                          <option>ETHOPIA</option>
                          <option>FINLAND</option>
                          <option>FRANCE</option>
                          <option>GERMANY</option>
                          <option>GHANA</option>
                          <option>HOLAND</option>
                          <option>ICELAND</option>
                          <option>IRELAND</option>
                          <option>INDIA</option>
                          <option>ITALY</option>
                          <option>IVROY COAST</option>
                          <option>JAPAN</option>
                          <option>KENYA</option>
                          <option>LIBERA</option>
                          <option>MALAYSIA</option>
                          <option>MAIL</option>
                          <option>MEXCIO</option>
                          <option>MOROCO</option>
                          <option>MOZAMBIA</option>
                          <option>NETHERLAND</option>
                          <option>NEWZEALAND</option>
                          <option>NIGERIA</option>
                          <option>NORTH KOREA</option>
                          <option>PERU</option>
                          <option>PHILIPPINES</option>
                          <option>RUSSIA</option>
                          <option>SCOTTLAND</option>
                          <option>SINGAPORE</option>
                          <option>SOUTH AFRICA</option>
                          <option>SOUTH KOREA</option>
                          <option>SPAIN</option>
                          <option>TALWAN</option>
                          <option>TANZANIA</option>
                          <option>THAILAND</option>
                          <option>TUNISIA</option>
                          <option>UKARAIN</option>
                          <option>USA</option>
                          <option>VIETNAM</option>
                          <option></option>
                      </select>
                    </td>
				  <tr>
				   <td>
				     Select your country if it is opened to this network:
				   </td>
				   <td>
				   <select>
				    <option>U.S.A</option>
<option>CANDA</option>
<option>UK</option>
<option>CHINA</option>
<option>FRANCE</option>
<option>RUSSIA</option>
<option>BRAIZE</option>
<option>CHILE</option>
<option>GERMANY</option>
<option>NIGERIA</option>
<option>GHANA</option>
<option>SOUTH AFRICA</option>
<option>KENYA</option>
<option>FINLAND</option>
<option>IRELAND</option>
<option>ICELAND</option>
<option>BERLIN</option>
<option>HOLAND</option>
<option>INDIA</option>
<option>JAPAN</option>
<option>KOREA</option>
<option>MOROCO</option>
<option>MAIL</option>
<option>TANZANIA</option>
<option>ETHOPIA</option>
<option>MOZAMBIA</option>
<option>CONGO</option>
<option>ISERA</option>
<option>SINGAPO</option>
<option>COSTA RICA</option>
<option>COROIA</option>
<option>NETHERLAND</option>
<option>UKARAIN</option>
<option>PERU</option>
<option>SCOTLAND</option>
<option>EGYPY</option>
				   </select>
				   </td>
				  </tr>
                  <tr>
				  <td>
				    <a href="tel:+2348131838828"><div class="tel">Contact us </div></a>
				  </td>
				  <tr>
				  </td>
				  <label for="color">select ur best color:</label>
				   <input type="color" id="color">
				  </label></td></tr>
				  <tr><td>set time that u used in registering</td><td><input type="datetime-local"></td><tr>
                     <td>
                         <input type="submit" value="submit" name=""><input type="reset"><input type="file" >
                     </td>
                  </tr>
                 <tr><td><button type="button"  onclick="alert('please remember to pay to this network.')">click me please!!!</button></td><tr>
		 <form method="post" enctype="multipart/form-data" action="upload.php"><input type="submit" value="upload pics"></form>
             </table>
<form method="post" enctype="multipart/form-data" action="upload.php"><input type="submit" value="upload pics"></form>
          </form>
		  <svg height="400" width="300">
 <rect width="200" height="100" x="20" y="20" fill="yellow">
  <animate attributeName="x" from="0" to="200" dur="10s" fill="freeze" repeatCount="10"/>
 </rect
     </div>
	 <img src="C:\Users\lap\Desktop\my paritical\image.png" alt="image" usemap="#image"width="150" height="150">
<map name="image">
 <area shape="rect" coords="45,10,60,50" alt="audio" href="C:\Users\lap\Desktop\web\audio.html"
</map> 
<img src="C:\Users\lap\Desktop\my paritical\Screenshot_20200819-214838.png" alt="Screenshot_20200819-214838" usemap="#Screenshot_20200819-214838" width="150" height="250">
<map name="Screenshot_20200819-214838">
 <area shape="rect" coords="15,60,100,100" alt="Screenshot_20200819-214838" href="C:\Users\lap\Desktop\web\audio.html"
</map>
<h1 align="center">NOTE:to verify if you are human click on the alphapet "A"</h1>
</body>
</html>