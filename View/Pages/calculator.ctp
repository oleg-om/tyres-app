  <script language="JavaScript" type="text/javascript">
  	function warningspan(){
		if(document.all != null){
			document.all.bodyspan.style.display = "none";
			document.all.warningspan.style.display = "inline";
		}
  	}
  </script>

<script language="JavaScript" type="text/javascript">

	//preload buttons (middle sections only)
	
		decor_buttonDesignTitleM=new Image();
		decor_buttonDesignTitleM.src="/img/calculator/bt14m.gif";
	
</script>

<script language="JavaScript" type="text/javascript">
	var actionOnLoad=null;
	$(function(){
		if(actionOnLoad!=null) actionOnLoad();
	});
</script>


<div id="content">
<span id="warningspan" style="display:none">
<br><br><br><br><br>
	<center><font class="title">Загрузка...</font></center>
</span>

<span id="bodyspan" style="text-align: center">

	<script language="JavaScript" type="text/javascript">
		var nextFrameLoaded=0;
		function loadNextFrame(){
			if(nextFrameLoaded==0){
				iframe2.document.location="/render.html?frameName=iframe2&showRim=1&showTire=1&sw=125&ar=85&bd=16&rd=16&rw=3.5&et=25&text=Пример+2:+докатка+Citroen+C4+Picasso";
				nextFrameLoaded=1;
			}
		}
		
		function compareSizes(){
			outStr="<table width=680 class='withlines' border=0 cellspacing=1 cellpadding=2 align='center'>";

					
			outStr+="<tr><td align='center' width='20%'><b>Диски:</b></td><th width='40%'>Диск 1</th><th width='40%'>Диск 2</th></tr>";
			
			outStr+="<tr><th>Размер диска</th><td align='center'>";
			if(iframe1.showRim>0)
				outStr+=Math.round(iframe1.rw*2/25.4)/2+"x"+Math.round(iframe1.rd/25.4)+" ET "+iframe1.et;
			outStr+="</td><td align='center'>";
			if(iframe2.showRim>0)
				outStr+=Math.round(iframe2.rw*2/25.4)/2+"x"+Math.round(iframe2.rd/25.4)+" ET "+iframe2.et;
			outStr+="</td></tr>";

/*
			outStr+="<tr><th>BackSpace</th><td align='center'>";
			if(iframe1.showRim>0)
				outStr+=Math.round(iframe1.backspace_mm+12)+" мм ("+Math.round((iframe1.backspace_mm+12)/2.54)/10+"'')";
			outStr+="</td><td align='center'>";
			if(iframe2.showRim>0)
				outStr+=Math.round(iframe2.backspace_mm+12)+" мм ("+Math.round((iframe2.backspace_mm+12)/2.54)/10+"'')";
				if(iframe1.showRim>0 && iframe2.showRim>0)
				if(iframe2.backspace_mm != iframe1.backspace_mm){
					d=Math.round(iframe1.backspace_mm - iframe2.backspace_mm);
					outStr+="<br>"+Math.abs(d)+" мм ("+Math.round(Math.abs(d)/2.54)/10+"'') ";
					if(iframe2.backspace_mm > iframe1.backspace_mm)
						outStr+="deeper.";
					else
						outStr+="shorter.";
				}
			outStr+="</td></tr>";
			d=Math.round((iframe1.rimWidth_mm-iframe1.backspace_mm)-(iframe2.rimWidth_mm-iframe2.backspace_mm));
			d=Math.round((iframe1.rimWidth_mm-iframe1.backspace_mm)-(iframe2.rimWidth_mm-iframe2.backspace_mm));
			if(iframe1.showRim>0 && iframe2.showRim>0 && d!=0){
				outStr+="<tr><th>Rim Lip</th><td align='center'>";
				if(d>0)
					outStr+=d+" мм ("+Math.round(Math.abs(d)/2.54)/10+"'') wider</td><td> </td>";
				else{
					d=-d;
					outStr+="</td><td align='center'>"+d+" мм ("+Math.round(Math.abs(d)/2.54)/10+"'') wider</td>";
				}
				outStr+="</td></tr>";
			}
*/
			outStr+="<tr><td align='center' width='20%'><b>Шины:</b></td><th width='40%'>Шина 1</th><th width='40%'>Шина 2</th></tr>";
			
			outStr+="<tr><th>Размер шины</th><td align='center'>";
			if(iframe1.showTire>0)
				outStr+=""+iframe1.sw+"/"+iframe1.ar+"R"+Math.round(iframe1.bd/25.4);
			outStr+="</td><td align='center'>";
			if(iframe2.showTire>0)
				outStr+=""+iframe2.sw+"/"+iframe2.ar+"R"+Math.round(iframe2.bd/25.4);
			outStr+="</td></tr>";

			outStr+="<tr><th>Ширина покрышки</th><td align='center'>";
			if(iframe1.showTire>0)
				outStr+=iframe1.sw+" мм ("+Math.round(iframe1.sw/2.54)/10+"'')";
			outStr+="</td><td align='center'>";
			if(iframe2.showTire>0)
				outStr+=iframe2.sw+" мм ("+Math.round(iframe2.sw/2.54)/10+"'')";
			outStr+="</td></tr>";

			outStr+="<tr><th>Высота профиля</th><td align='center'>";
			if(iframe1.showTire>0)
				outStr+=iframe1.tireWall_mm+" мм ("+Math.round(iframe1.tireWall_mm/2.54)/10+"'')";
			outStr+="</td><td align='center'>";
			if(iframe2.showTire>0)
				outStr+=iframe2.tireWall_mm+" мм ("+Math.round(iframe2.tireWall_mm/2.54)/10+"'')";
			outStr+="</td></tr>";

			d=iframe2.tireHeight_mm - iframe1.tireHeight_mm;
			outStr+="<tr><th>Внешний диаметр колеса</th><td align='center'>";
			if(iframe1.showTire>0)
				outStr+=iframe1.tireHeight_mm+" мм ("+Math.round(iframe1.tireHeight_mm/2.54)/10+"'')";
			outStr+="</td><td align='center'>";
			if(iframe2.showTire>0)
				outStr+=iframe2.tireHeight_mm+" мм ("+Math.round(iframe2.tireHeight_mm/2.54)/10+"'')";
				if(iframe1.showTire>0 && iframe2.showTire>0)
				if(iframe2.tireHeight_mm != iframe1.tireHeight_mm){
					outStr+="<br>на "+Math.abs(d)+" мм ("+Math.round(Math.abs(d)*1000/iframe1.tireHeight_mm)/10+"%) ";
					if(iframe2.tireHeight_mm > iframe1.tireHeight_mm){
						outStr+="выше.";
						if(Math.abs(d)>50)
							outStr+="<br><font color='#ff2200'>СЛИШКОМ высокое!</font>";
					}
					else{
						outStr+="ниже.";
						if(Math.abs(d)>50)
							outStr+="<br><font color='#ff2200'>СЛИШКОМ низкое!</font>";
					}
				}
			outStr+="</td></tr>";

			outStr+="<tr><th>Ширина обода</th><td align='center'>";
			if(iframe1.showTire>0)
				outStr+="от "+Math.round(iframe1.bd/25.4)+"x"+iframe1.rimWidthMin(iframe1.sw,iframe1.ar)+" до "+Math.round(iframe1.bd/25.4)+"x"+iframe1.rimWidthMax(iframe1.sw,iframe1.ar);
			outStr+="</td><td align='center'>";
			if(iframe2.showTire>0)
				outStr+="от "+Math.round(iframe2.bd/25.4)+"x"+iframe2.rimWidthMin(iframe2.sw,iframe2.ar)+" до "+Math.round(iframe2.bd/25.4)+"x"+iframe2.rimWidthMax(iframe2.sw,iframe2.ar);
			outStr+="</td></tr>";

			outStr+="<tr><th>Длина окружности</th><td align='center'>";
			if(iframe1.showTire>0){
				d=Math.round(3.14*iframe1.tireHeight_mm);
				outStr+=d+" мм ("+Math.round(d/2.54)/10+"'')";
			}
			outStr+="</td><td align='center'>";
			if(iframe2.showTire>0){
				d=Math.round(3.14*iframe2.tireHeight_mm);
				outStr+=d+" мм ("+Math.round(d/2.54)/10+"'')";
			}
			outStr+="</td></tr>";

			//outStr+="<tr><th>Оборотов за милю</th><td align='center'>";
			outStr+="<tr><th>Оборотов за км</th><td align='center'>";
			if(iframe1.showTire>0){
				//d=Math.round(16093400/(3.14*iframe1.tireHeight_mm))/10;
				d=Math.round(10000000/(3.14*iframe1.tireHeight_mm))/10;
				outStr+=d;
			}
			outStr+="</td><td align='center'>";
			if(iframe2.showTire>0){
				//d=Math.round(16093400/(3.14*iframe2.tireHeight_mm))/10;
				d=Math.round(10000000/(3.14*iframe2.tireHeight_mm))/10;
				outStr+=d;
			}
			outStr+="</td></tr>";

			if(iframe1.showTire>0 && iframe2.showTire>0)
			if(iframe2.tireHeight_mm != iframe1.tireHeight_mm){
				outStr+="<tr><th>Спидометр</th><td valign='top'>";
//					d=Math.round(3.14*iframe1.tireHeight_mm);
					outStr+="Положим, что это штатные размеры и, следовательно, показания спидометра верны <img src='/img/calculator/arrowright2.gif' width=4 height=7 border=0>";
				outStr+="</td><td >";

				//d=Math.round(600*iframe2.tireHeight_mm/iframe1.tireHeight_mm)/10;
				d=Math.round(1000*iframe2.tireHeight_mm/iframe1.tireHeight_mm)/10;
				//outStr+="Когда спидометр показывает 60mph (96.6км/ч), реальная скорость составляет "+d+"mph ("+Math.round(96.6*d/6)/10+"км/ч): ";
				outStr+="Когда спидометр показывает <nobr>100 км/ч</nobr>, реальная скорость составляет <nobr>"+d+" км/ч</nobr> (";
				//d=Math.round(1000*(60-d)/60)/10;
				d=Math.round(1000*(100-d)/100)/10;
				if(d)
					outStr+="на ";
				outStr+=Math.abs(d)+"% ";
				if(d<0)
					outStr+="больше";
				else
					outStr+="меньше";

				//outStr+="</td></tr>";
				outStr+=")</td></tr>";
			}


			if(iframe1.showTire>0 && iframe2.showTire>0 && iframe1.showRim>0 && iframe2.showRim>0){
				outStr+="<tr><td align='center' width='20%'><b>Зазор до...</b></td><th width='40%'>Колесо 1</th><th width='40%'>Колесо 2</th></tr>";
				//suspension clearance
				sc=Math.round(0.5*iframe2.sw+iframe2.et-0.5*iframe1.sw-iframe1.et);
				//fenders clearance
				fc=Math.round(0.5*iframe2.sw-iframe2.et-0.5*iframe1.sw+iframe1.et);
				//wheelwell clearance
				ww=Math.round(0.5*iframe2.tireHeight_mm-0.5*iframe1.tireHeight_mm);

				outStr+="<tr><th>...подвески</th><td rowspan=3 valign='top'>";
				outStr+="Положим, что это штатные колеса и, следовательно, нет проблем с зазорами <img src='/img/calculator/arrowright2.gif' width=4 height=7 border=0>";
				outStr+="</td><td >";
				if(Math.abs(sc)<2)
					outStr+="Такой же";
				else
				if(sc<0)
					outStr+="100% достаточный (больше, чем штатный) ";
				/*
				else
				if(sc<5)
					outStr+="100% достаточный (точно как штатный) ";
				else
				if(sc<10)
					outStr+="100% достаточный (почти как штатный) ";
				*/
				else{
					outStr+="Колесо на "+sc+" мм ("+Math.round(sc/2.54)/10+"'') ближе к деталям подвески и тормозной системы. ";
					if(sc<=15)
						outStr+="Для большинства автомобилей приемлемо.";
					else
						outStr+="Убедитесь, что на вашем автомобиле достаточно свободного места до деталей подвески. Если нет, выберите меньшие вылеты, более узкие шины или используйте проставки. ";
				}
				outStr+="</td></tr>";

				outStr+="<tr><th>...крыльев</th><td>";
				if(Math.abs(fc)<2)
					outStr+="Такой же.";
				else
				if(fc<0)
					outStr+="100% достаточный (больше, чем штатный) ";
				/*
				else
				if(fc<5)
					outStr+="100% достаточный (точно как штатный) ";
				else
				if(fc<10)
					outStr+="100% достаточный (почти как штатный) ";
				*/
				else{
					outStr+="Колесо будет выпирать наружу на "+fc+" мм ("+Math.round(fc/2.54)/10+"'') относительно штатного. ";
					if(fc<=15)
						outStr+="Для большинства автомобилей приемлемо. ";
					else
						outStr+="Убедитесь, что на вашем автомобиле достаточно места до крыльев. Если нет, используйте более узкие шины или больший вылет диска. ";
				}
				outStr+="</td></tr>";



				outStr+="<tr><th>...колесных арок</th><td>";
				if(Math.abs(ww)<2)
					outStr+="Такой же";
				else
				if(ww<0)
					outStr+="100% достаточный (даже больше, чем штатный)";
				else{
					outStr+="Ближе к колесной арке на "+ww+" мм. ";
					if(ww<5)
						outStr+="Почти как штатный ";
					else
					if(ww<13)
						outStr+="Для большинства автомобилей приемлемо. ";
					else
						outStr+="Убедитесь, что на вашем автомобиле достаточно места под крыльями. Если нет, используйте шины более низкого профиля или менее широкие диски. ";
				}
				outStr+="</td></tr>";
			}

			outStr+="</table>";
			
			if(iframe1.showTire>0){
				td0=iframe1.tireHeight_mm;
				outStr+="<br><center><font color='#ff2200'>*</font> Вместо шины <b>"+iframe1.sw+"/"+iframe1.ar+"R"+Math.round(iframe1.bd/25.4)+"</b> можно использовать следующие размерности (не все из них существуют на самом деле):</center>";
				outStr+="<table width=640 class='withlines' border=0 cellspacing=1 cellpadding=3 align='center'>";
				outStr+="<tr><th rowspan=2>Размер диска</th><th colspan=7>Ширина шины:</th></tr>"
				outStr+="<tr>"
				for(sw=iframe1.sw; sw<=Math.min(365,iframe1.sw+50); sw+=10){
					outStr+="<th>"
					swd=sw-iframe1.sw;
					if(swd!=0){
						if(swd>0)
							outStr+="+";
						outStr+=swd+": ";
					}
					outStr+=sw;
					outStr+="</th>"
				}
				outStr+="</tr>"
				for(rd=Math.max(13,Math.round(iframe1.bd/25.4)); rd<=Math.min(28,Math.round(iframe1.tireHeight_mm/25.4)-6); rd++)
				if(rd!=25 && rd!=27){
					outStr+="<tr>"
					outStr+="<th valign='top'>"
					rdd=rd-Math.round(iframe1.bd/25.4);
					if(rdd!=0){
						if(rdd>0)
							outStr+="+";
						outStr+=rdd+": ";
					}
					outStr+=rd+"''";
					outStr+="</th>"
					for(sw=iframe1.sw; sw<=Math.min(365,iframe1.sw+50); sw+=10){
						outStr+="<td valign='top' nowrap>"
						for(ar=20; ar<=85; ar+=5){
							wall=Math.round(sw*ar/100);
							td=Math.round(rd*25.4)+wall*2;
							tdd=td-td0;
							if(tdd>=-25)
							if(tdd<=50){
								outStr += sw+"/"+ar+"R"+rd;
								if(Math.abs(tdd)>=10){
									outStr+=" <small>"+Math.abs(tdd)+"мм";
									if(tdd < 0 )
										outStr+=" -";
									else
										outStr+="+";
									outStr+="</small>";
								}
								outStr+="<br>";
							}
						}
						outStr+="</td>"
					}
					outStr+="</tr>";
				}
				outStr+="</table>";
			}
			document.getElementById("compareSpecs").innerHTML = outStr;
		}
	</script>
	<table border="0" cellpadding="0" cellspacing="0" align="center" style="padding-top:20px;">
		<tbody><tr>
			<td>
				<iframe name="iframe1" src="/loading_002.htm" frameborder="0" height="520" scrolling="no" width="340"></iframe>
			</td>
			<td width="5">&nbsp;
			</td>
			<td>
				<iframe name="iframe2" src="/loading_002.htm" frameborder="0" height="520" scrolling="no" width="340"></iframe>
			</td>
		</tr>
	</tbody></table>

	<br>

	<span id="compareSpecs"><table class="withlines" border="0" cellpadding="2" cellspacing="1" width="680" align="center"><tbody><tr><td width="20%" align="center"><b>Диски:</b></td><th width="40%">Диск 1</th><th width="40%">Диск 2</th></tr><tr><th>Размер диска</th><td align="center">7x16 ET 25</td><td align="center">3.5x16 ET 25</td></tr><tr><td width="20%" align="center"><b>Шины:</b></td><th width="40%">Шина 1</th><th width="40%">Шина 2</th></tr><tr><th>Размер шины</th><td align="center">215/55R16</td><td align="center">125/85R16</td></tr><tr><th>Ширина покрышки</th><td align="center">215 мм (8.5'')</td><td align="center">125 мм (4.9'')</td></tr><tr><th>Высота профиля</th><td align="center">118 мм (4.6'')</td><td align="center">106 мм (4.2'')</td></tr><tr><th>Внешний диаметр колеса</th><td align="center">642 мм (25.3'')</td><td align="center">618 мм (24.3'')<br>на 24 мм (3.7%) ниже.</td></tr><tr><th>Ширина обода</th><td align="center">от 16x6 до 16x8</td><td align="center">от 16x2.5 до 16x4.5</td></tr><tr><th>Длина окружности</th><td align="center">2016 мм (79.4'')</td><td align="center">1941 мм (76.4'')</td></tr><tr><th>Оборотов за км</th><td align="center">496.1</td><td align="center">515.3</td></tr><tr><th>Спидометр</th><td valign="top">Положим, что это штатные размеры и, следовательно, показания спидометра верны <img src="/img/calculator/arrowright2.gif" height="7" border="0" width="4"></td><td>Когда спидометр показывает <nobr>100 км/ч</nobr>, реальная скорость составляет <nobr>96.3 км/ч</nobr> (на 3.7% меньше)</td></tr><tr><td width="20%" align="center"><b>Зазор до...</b></td><th width="40%">Колесо 1</th><th width="40%">Колесо 2</th></tr><tr><th>...подвески</th><td rowspan="3" valign="top">Положим, что это штатные колеса и, следовательно, нет проблем с зазорами <img src="/img/calculator/arrowright2.gif" height="7" border="0" width="4"></td><td>100% достаточный (больше, чем штатный) </td></tr><tr><th>...крыльев</th><td>100% достаточный (больше, чем штатный) </td></tr><tr><th>...колесных арок</th><td>100% достаточный (даже больше, чем штатный)</td></tr></tbody></table><br><center><font color="#ff2200">*</font> Вместо шины <b>215/55R16</b> можно использовать следующие размерности (не все из них существуют на самом деле):</center><table class="withlines" border="0" cellpadding="3" cellspacing="1" width="640" align="center"><tbody><tr><th rowspan="2">Размер диска</th><th colspan="7">Ширина шины:</th></tr><tr><th>215</th><th>+10: 225</th><th>+20: 235</th><th>+30: 245</th><th>+40: 255</th><th>+50: 265</th></tr><tr><th valign="top">16''</th><td nowrap="nowrap" valign="top">215/50R16 <small>20мм -</small><br>215/55R16<br>215/60R16 <small>22мм+</small><br>215/65R16 <small>44мм+</small><br></td><td nowrap="nowrap" valign="top">225/50R16 <small>10мм -</small><br>225/55R16 <small>12мм+</small><br>225/60R16 <small>34мм+</small><br></td><td nowrap="nowrap" valign="top">235/45R16 <small>24мм -</small><br>235/50R16<br>235/55R16 <small>22мм+</small><br>235/60R16 <small>46мм+</small><br></td><td nowrap="nowrap" valign="top">245/45R16 <small>16мм -</small><br>245/50R16 <small>10мм+</small><br>245/55R16 <small>34мм+</small><br></td><td nowrap="nowrap" valign="top">255/45R16<br>255/50R16 <small>20мм+</small><br>255/55R16 <small>44мм+</small><br></td><td nowrap="nowrap" valign="top">265/40R16 <small>24мм -</small><br>265/45R16<br>265/50R16 <small>30мм+</small><br></td></tr><tr><th valign="top">+1: 17''</th><td nowrap="nowrap" valign="top">215/45R17 <small>16мм -</small><br>215/50R17<br>215/55R17 <small>26мм+</small><br>215/60R17 <small>48мм+</small><br></td><td nowrap="nowrap" valign="top">225/45R17<br>225/50R17 <small>16мм+</small><br>225/55R17 <small>38мм+</small><br></td><td nowrap="nowrap" valign="top">235/40R17 <small>22мм -</small><br>235/45R17<br>235/50R17 <small>26мм+</small><br>235/55R17 <small>48мм+</small><br></td><td nowrap="nowrap" valign="top">245/40R17 <small>14мм -</small><br>245/45R17 <small>10мм+</small><br>245/50R17 <small>36мм+</small><br></td><td nowrap="nowrap" valign="top">255/40R17<br>255/45R17 <small>20мм+</small><br>255/50R17 <small>46мм+</small><br></td><td nowrap="nowrap" valign="top">265/35R17 <small>24мм -</small><br>265/40R17<br>265/45R17 <small>28мм+</small><br></td></tr><tr><th valign="top">+2: 18''</th><td nowrap="nowrap" valign="top">215/40R18 <small>13мм -</small><br>215/45R18<br>215/50R18 <small>31мм+</small><br></td><td nowrap="nowrap" valign="top">225/40R18<br>225/45R18 <small>17мм+</small><br>225/50R18 <small>41мм+</small><br></td><td nowrap="nowrap" valign="top">235/35R18 <small>21мм -</small><br>235/40R18<br>235/45R18 <small>27мм+</small><br></td><td nowrap="nowrap" valign="top">245/35R18 <small>13мм -</small><br>245/40R18 <small>11мм+</small><br>245/45R18 <small>35мм+</small><br></td><td nowrap="nowrap" valign="top">255/35R18<br>255/40R18 <small>19мм+</small><br>255/45R18 <small>45мм+</small><br></td><td nowrap="nowrap" valign="top">265/30R18 <small>25мм -</small><br>265/35R18<br>265/40R18 <small>27мм+</small><br></td></tr><tr><th valign="top">+3: 19''</th><td nowrap="nowrap" valign="top">215/35R19<br>215/40R19 <small>13мм+</small><br>215/45R19 <small>35мм+</small><br></td><td nowrap="nowrap" valign="top">225/30R19 <small>23мм -</small><br>225/35R19<br>225/40R19 <small>21мм+</small><br>225/45R19 <small>43мм+</small><br></td><td nowrap="nowrap" valign="top">235/30R19 <small>17мм -</small><br>235/35R19<br>235/40R19 <small>29мм+</small><br></td><td nowrap="nowrap" valign="top">245/30R19 <small>11мм -</small><br>245/35R19 <small>13мм+</small><br>245/40R19 <small>37мм+</small><br></td><td nowrap="nowrap" valign="top">255/30R19<br>255/35R19 <small>19мм+</small><br>255/40R19 <small>45мм+</small><br></td><td nowrap="nowrap" valign="top">265/30R19<br>265/35R19 <small>27мм+</small><br></td></tr></tbody></table></span>
	<script language="JavaScript" type="text/javascript">
	actionOnLoad=function (){
		iframe1.document.location="/render.html?frameName=iframe1&showRim=1&showTire=1&sw=215&ar=55&bd=16&rd=16&rw=7.0&et=25&text=Пример+1:+колесо+Citroen+C4+Picasso";
	}
	</script>
</div>
		<?php
			if (isset($page)) { 
				echo '<h1>' . h($page['Page']['title']) . '</h1>';
				echo $page['Page']['content'];
			}
		?>
