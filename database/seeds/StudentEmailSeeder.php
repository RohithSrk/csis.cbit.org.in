<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$elective_data=<<<EOL
{
  "00313ce2729650a1de52913d0558272007e4fdef13421ef52aab9f826e5f6a00" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "saitej.210999@gmail.com",
    "name" : "SAITEJA R",
    "rollnum" : 160116733105,
    "sent" : true,
    "year" : 2
  },
  "006b590362ea0c3ba7e2d755b574dd8b0e829c65eaaad87aa550d0c3415483b0" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "vamshikrishnakunti@gmail.com",
    "name" : "KUNTI VAMSHIKRISHNA",
    "rollnum" : 160114733059,
    "sent" : true,
    "year" : 4
  },
  "00d8cd286679f726e1603395c4d11178dbba30a343014a7100a6e80f5b284551" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "vamshikrishnajoopaka@gmail.com",
    "name" : "JOOPAKA VAMSHI KRISHNA",
    "rollnum" : 160114733117,
    "sent" : true,
    "year" : 4
  },
  "02e0c95f04a2c76127234d4bb8f67817b9c09a57006bb33ae986c350654b5329" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "gajjalaanirudh@gmail.com",
    "name" : "ANIRUDH REDDY G",
    "rollnum" : 160116733023,
    "sent" : true,
    "year" : 2
  },
  "02ef03b098d45e94c97207dc645939d7efbe0c1402ec1d0d127cec759c3b8754" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS484",
        "group" : "5",
        "title" : "Business Intelligence",
        "year" : "4"
      }
    },
    "email" : "bussa.anurag@gmail.com",
    "name" : "",
    "rollnum" : 160114733184,
    "sent" : true,
    "year" : 4
  },
  "032cde9909ca61ef3975e270d8cdb1d7d7676a1edc79fa9cc02ab58fd529d487" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "subhasri47@gmail.com",
    "name" : "SUBHASRI R",
    "rollnum" : 160116733147,
    "sent" : true,
    "year" : 2
  },
  "0332aa7617d59d425e13819d61505e138ad958313b26d6a63429e834510aac26" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "sindhuja.chirumamilla@gmail.com",
    "name" : "SINDHUJA CHIRUMAMILLA",
    "rollnum" : 160114733080,
    "sent" : true,
    "year" : 4
  },
  "0480b455fb886d84dd8dabbaed4fb48677565cb8fd666b9a62a34da743e7c08b" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "alekya1209@gmail.com",
    "name" : "GUJJALA ALEKYA",
    "rollnum" : 160115733121,
    "sent" : true,
    "year" : 3
  },
  "04c4b022343bf600f029ec547d79d90e488bb2cf0f6ab4af4181ed217700e767" : {
    "email" : "",
    "name" : "DUBBA KARAN KUMAR REDDY",
    "rollnum" : 160115733033,
    "sent" : false,
    "year" : 3
  },
  "0537dda5255128257602b6b70863fe1cae2995e12ec0175096c367e0ae817625" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sidduriprashanth@gmail.com",
    "name" : "PRASHANTH S",
    "rollnum" : 160116733044,
    "sent" : true,
    "year" : 2
  },
  "053e15bb2839befebb3768909b0b55326e21588432bcf091a4d26d94162b03b9" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "komuravelly.neha@gmail.com ",
    "name" : "NEHA KOMURAVELLY",
    "rollnum" : 160115733007,
    "sent" : true,
    "year" : 3
  },
  "055e169837df6a4aaad20fcf82c238e8e7d8d406328a4ae1bf752b6088c5dc5c" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "prathyusha.kallepu@gmail.com",
    "name" : "PRATHYUSHA K",
    "rollnum" : 160116733135,
    "sent" : true,
    "year" : 2
  },
  "06129259c611ca0586e9c7d389de6f4bddc72a3560ad17c954b6ee39e9da3d60" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "mdaqib1999@gmail.com",
    "name" : "MOHAMMED AQIB MUQTADAR",
    "rollnum" : 160116733160,
    "sent" : true,
    "year" : 2
  },
  "06d4e72ac28833004de5d216463478d4ea2995e1d01caf0503b6b0bd2d618b4a" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "anirudhkaluri@gmail.com",
    "name" : "KALURI ANIRUDH",
    "rollnum" : 160115733022,
    "sent" : true,
    "year" : 3
  },
  "06df9cedfcaca3398e7c51cfec6342824ea81b997f47794b891009ddecf70a9c" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "adiagarwal96@ymail.com",
    "name" : "ADARSH AGARWAL",
    "rollnum" : 160114733027,
    "sent" : true,
    "year" : 3
  },
  "06fae9812428efcb46b8456f88c5b78f5d95364c0c0d5fb3552f24eb2f66be92" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "ramum9933@gmail.com",
    "name" : "MANDALOJU RAMU",
    "rollnum" : 160114733108,
    "sent" : true,
    "year" : 4
  },
  "07d41edf833de4c5ef9f26f78560a87802048a8325951eb872f2811abc4fc807" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "karinglakavyasree090@gmail.com",
    "name" : "KARINGLA KAVYA SREE",
    "rollnum" : 160115733335,
    "sent" : true,
    "year" : 3
  },
  "0b1b70e075320f87c82aa820ff21ae47051d7649505c36e5312691dfc6372544" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "alekhyalingutla1996@gmail.com",
    "name" : "ALEKHYA LINGUTLA",
    "rollnum" : 160114733121,
    "sent" : true,
    "year" : 4
  },
  "0baf26a967d122c7964f0ce6071d16560b7103560980c50444d77f56376d54b8" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "svsm.sura@gmail.com",
    "name" : "VENKATA SAIMEGHANA S",
    "rollnum" : 160116733076,
    "sent" : true,
    "year" : 2
  },
  "0c35effdd50699ac4f0500d80f7ef17fd2256999065083ebedb42c5fc43bf4f0" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "kpcchandu@gmail.com",
    "name" : "K PRANAV CHANDRA",
    "rollnum" : 160115733098,
    "sent" : true,
    "year" : 3
  },
  "0c4cfffc9853890e6bd914c47ed24f7b2b57d747f5e3417feb8a9d37780bfbf0" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nallabothulaswetha@gmail.com",
    "name" : "NALLABOTHULA SWETHA",
    "rollnum" : 160116733306,
    "sent" : true,
    "year" : 2
  },
  "0c9aa9e8e2c1e934988a8c0e4a97e489c86de189c0c23b3f798066591d50a3ea" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "ammarshareef28@gmail.com",
    "name" : "AMMAR MOHAMMED SHAREEF",
    "rollnum" : 160116733082,
    "sent" : true,
    "year" : 2
  },
  "0caa6be5e1128a054968f6619bc9350a331e917b5832d693a890ca4aeceb6098" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "suryachandu5981@gmail.com",
    "name" : "SURYA S",
    "rollnum" : 160116733111,
    "sent" : true,
    "year" : 2
  },
  "0cf346b73dc2179788651653df109fe382608a6b0588797aa894b939b0dd83da" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "lehyareddykandhimalla@gmail.com",
    "name" : "KANDHIMALLA LEHYA REDDY",
    "rollnum" : 160115733129,
    "sent" : true,
    "year" : 3
  },
  "0d910d40c2c0f54f626d0d7323c7b5b3cab0408f1037b2f76b23d0f7ea5174f1" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "yogesh.luckshetty@gmail.com",
    "name" : "YOGESH L",
    "rollnum" : 160116733060,
    "sent" : true,
    "year" : 2
  },
  "0dcad05ea5197ebf6dfd5d1220a35081acf65054f193276337f92af999f19191" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "chandrakanthreddy208@gmail.com",
    "name" : "C JAYA CHANDRA KANTH REDDY",
    "rollnum" : 160116733315,
    "sent" : true,
    "year" : 2
  },
  "0dfda9955cdc98cca2af6e79d6f824088e586c197937103134d0149a93992afb" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "rohit.srikar@gmail.com",
    "name" : "RAYUDU ROHIT SRIKAR",
    "rollnum" : 160116733187,
    "sent" : true,
    "year" : 2
  },
  "0ed5d0046aa0997b22e5c6e3c80848f417603b97dc1a4f389e2c3c1a39508b7b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "harsha.anirudh@gmail.com",
    "name" : "HARSHA ANIRUDH G S",
    "rollnum" : 160114733095,
    "sent" : true,
    "year" : 4
  },
  "0f6d294f937621839236a82ed4ca45290ee1a9ff874b7773c9e8cd4c34005144" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "neha.farheen2@gmail.com",
    "name" : "SHAIK NEHA FARHEEN",
    "rollnum" : 160115733132,
    "sent" : true,
    "year" : 3
  },
  "0fa76f786eee7239aacba796033b6dca73bf0685611ae5cc4f3f84144f341d59" : {
    "email" : "",
    "name" : "CHILUKURI AKHIL CHOWDRY",
    "rollnum" : 160115733083,
    "sent" : false,
    "year" : 3
  },
  "106f247e1356d22d2786bf0695ef9a1766656df55d71491438254a0db9625ca9" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "akhilvaska1@gmail.com",
    "name" : "VASKA AKHIL",
    "rollnum" : 160115733021,
    "sent" : true,
    "year" : 3
  },
  "1070760b44c0bdd4404e04f57c21f75bce068920c165f3dc9a9939114551dc94" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "gautam.aditya2@gmail.com",
    "name" : "VELDANDA GAUTAM ADITYA",
    "rollnum" : 160114733034,
    "sent" : true,
    "year" : 4
  },
  "1112e0ffac9c7b2ffcb185500bdf6306876450b663539434d38f95189af595f0" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "rahulnagu78@gmail.com",
    "name" : "NAGU RAHUL CHANDRA",
    "rollnum" : 160115733043,
    "sent" : true,
    "year" : 3
  },
  "11a7b1c21dace389bd511e73d9f7860051119a996a86609811b59727ba2efc25" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "udaypolkampally@gmail.com",
    "name" : "P UDAY KUMAR",
    "rollnum" : 160116733313,
    "sent" : true,
    "year" : 2
  },
  "11ea841761ecedac279cf53197c9a1f337b4bbb0842502143dedbcbf14c2fe7f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "balusakarthik731@gmail.com",
    "name" : "KARTHIK GOUD B",
    "rollnum" : 160116733032,
    "sent" : true,
    "year" : 2
  },
  "142b9ef9d82fc009b53e21a22c97c5e6eec751745af4254fc655ebb46fe0ab76" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "patlollaalekhyareddy9@gmail.com",
    "name" : "PATLOLLA ALEKYA",
    "rollnum" : 160114733063,
    "sent" : true,
    "year" : 4
  },
  "14c42a4c649109809de4d14cf413e7d76c4daf8f3548b14b964f91ca121d076a" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "suramsaihithreddy@gmail.com",
    "name" : "SURAM SAIHITH REDDY",
    "rollnum" : 160116733185,
    "sent" : true,
    "year" : 2
  },
  "15153ce89c476a32cf590fbd40aa57da9edbce5a13c872025a06dbd1f77360a4" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sambur.sanjana.1998@gmail.com",
    "name" : "S SANJANA",
    "rollnum" : 160115733143,
    "sent" : true,
    "year" : 3
  },
  "15530d4ee086f256bb939b4f61f544656aa2937ea01a3a05902bdc2113b40970" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "pavansai57@gmail.com",
    "name" : "GANJI PAVAN SAI",
    "rollnum" : 160115733040,
    "sent" : true,
    "year" : 3
  },
  "15a8540f13d99f949a51ba95edcb9be610e9afae1f70ff8a43596e4a1bab0a32" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "divyabijili@gmail.com",
    "name" : "B DIVYA",
    "rollnum" : 160115733068,
    "sent" : true,
    "year" : 3
  },
  "15a85ed66c9fa885980e4ac6b436f529767ccf2dd60c23b3aa863c0445e5cdc8" : {
    "email" : "shambhavi.7925@gmail.com",
    "name" : "MKDV SHAMBHAVI",
    "rollnum" : 160115733014,
    "sent" : true,
    "year" : 3
  },
  "17b494cca52aa3ee3dcd11f1ca85b925b5bba2bfc7e118de0e6313bec548e8fe" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "mad.shivam111@gmail.com",
    "name" : "SHIVAM GUPTA",
    "rollnum" : 160116733109,
    "sent" : true,
    "year" : 2
  },
  "183013615fbb6bdbe0de60013729785753de7515c54a086715098a1de53e15ee" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "anil771999@gmail.com",
    "name" : "MEDAM ANIL KUMAR",
    "rollnum" : 160116733320,
    "sent" : true,
    "year" : 2
  },
  "18cfd57ae29550fbbea9e27346453065acc967ed4c3734550f1ab9161c29c27d" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "csravya333@gmail.com",
    "name" : "C SRAVYA",
    "rollnum" : 160115733146,
    "sent" : true,
    "year" : 3
  },
  "18f507828a496c1f9098800be2ee627e8b0a33d7c389778fdad614b7d10c241d" : {
    "email" : "azammd443@gmail.com",
    "name" : "MD AZAM",
    "rollnum" : 160114733326,
    "sent" : true,
    "year" : 4
  },
  "191373e1c843557be101a2335191cc6d4750496a34ec3b94781f0a5ae630134a" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "manojkumartmk303@gmail.com",
    "name" : "THUMMALA MANOJ KUMAR",
    "rollnum" : 160115733035,
    "sent" : true,
    "year" : 3
  },
  "19d75c9afad85a21c550ed08859257c2a091cfec35ae637b5f1cb37f4be0ed50" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "golla.manish91@gmail.com",
    "name" : "G MANISH",
    "rollnum" : 160114733099,
    "sent" : true,
    "year" : 4
  },
  "1a02e3e8647911ad3b26c017b82fecd384b6c2f1d3b643c270d6355e69be75a3" : {
    "email" : "talluri.sriathulya@gmail.com",
    "name" : "TALLURI SRI ATHULYA",
    "rollnum" : 160114733145,
    "sent" : true,
    "year" : 4
  },
  "1a279ac755ca2d82eddd87b35ee45562c8fee201b5fca83822d4174fcd19ced2" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "mdasarada.ramreddy@gmail.com",
    "name" : "MUDIAM DASARADA RAMI REDDY",
    "rollnum" : 160114733092,
    "sent" : true,
    "year" : 4
  },
  "1a5792bcc212e61213a0cc8d461146cd4c40b4f0b73a07e7150db1f8c1347e65" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "gorupallysaichandana@gmail.com",
    "name" : "SAI CHANDANA G",
    "rollnum" : 160116733079,
    "sent" : true,
    "year" : 2
  },
  "1a5fc88fda2b83015b28abb4b6a11cd4888a68182c699d85e6e5a9d6a2bb8b2a" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "saibharat2997@gmail.com",
    "name" : "KONAKALLA SAI BHARATH KUMAR",
    "rollnum" : 160114733109,
    "sent" : true,
    "year" : 4
  },
  "1b238c775722aebfc0b851b7f7555e07b7c75fb9b40b67b2fd3c972c9d5aca8e" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "akankshamudedla@gmail.com",
    "name" : "MUDEDLA AKANKSHA",
    "rollnum" : 160114733309,
    "sent" : true,
    "year" : 4
  },
  "1b78f11452efbc0de7cd929899e19be270ddaa79d72a6777b17510dd7b097f5d" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "saikiran14ch@gmail.com",
    "name" : "SAI KIRAN CH",
    "rollnum" : 160116733166,
    "sent" : true,
    "year" : 2
  },
  "1bbec317572ade045cceb0e511f4e00c364094815560380f39f2ac85cd2c251a" : {
    "elective" : {
      "4" : {
        "code" : "CS475",
        "group" : "4",
        "title" : "Human Machine Interaction",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "koteshsharmarock@gmail.com",
    "name" : "BANOTH KOTESH NAYAK",
    "rollnum" : 160114733041,
    "sent" : true,
    "year" : 4
  },
  "1c58bcf4b341889b976c075c576c39787efa82928d675e9786503e2b4b4a102b" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "ranateja@gmail.com",
    "name" : "VUJJINI RANA TEJA",
    "rollnum" : 160114733048,
    "sent" : true,
    "year" : 3
  },
  "1c6ea8200a47f7e797bf50bcf47983c771a006bf34823f3dc0ee0c09f49d367b" : {
    "email" : "chenoorharsha826@gmail.com",
    "name" : "HARSHAVARDHAN CH",
    "rollnum" : 160116733030,
    "sent" : true,
    "year" : 2
  },
  "1cbec6af87424ece3ddac402d5ae3cb6fb1b15f50dba4568006977a81c821f70" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "amulya3097@gmail.com",
    "name" : "K AMULYA",
    "rollnum" : 160115733063,
    "sent" : true,
    "year" : 3
  },
  "1cd39dcdb3e265ad9d0fc33328f96c080411e1ef7e40ec5348a6c10f14ef2dd3" : {
    "email" : "sireeshajella981@gmail.com",
    "name" : "SIREESHA J",
    "rollnum" : 160116733016,
    "sent" : true,
    "year" : 2
  },
  "1dc06c6a4c206447b8cb228c5a69e9904d0fb94ea527cb02faec852f0270c6d2" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "patakulanagendrababu@gmail.com",
    "name" : "PATAKULA NAGENDRABABU",
    "rollnum" : 160115733097,
    "sent" : true,
    "year" : 3
  },
  "1df9c08b5b86767a4493021a8a6fbeb6d7c7b35d9ccaf9b4f185977c5e9bb5ec" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "santhoshreddy8297@gmail.com",
    "name" : "KANCHARAKUNTLA SANTHOSH REDDY",
    "rollnum" : 160114733303,
    "sent" : true,
    "year" : 4
  },
  "1e4adcce9c961941c536ea10594c693628657735592f032c6b2389883c3c4ca7" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "faraazahmed000@gmail.com",
    "name" : "FARAAZ AHMED",
    "rollnum" : 160115733155,
    "sent" : true,
    "year" : 3
  },
  "1eb085ef4b5789714dad23414d10d3ed186b074dd9a32df098c7072709ae00b2" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sonub396@gmail.com",
    "name" : "B SONU",
    "rollnum" : 160115733055,
    "sent" : true,
    "year" : 3
  },
  "1f1fc96e309417bcaf4ad5e8e8dd93b40e35886334f32e70a9c296c0c4a5103d" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "srinivasbojja333@gmail.com",
    "name" : "BOJJA SRINIVAS",
    "rollnum" : 160115733304,
    "sent" : true,
    "year" : 3
  },
  "1f48333e5f763e5bbb99ff92c765b2cc6445996bf18139a9a79349f06a719c0d" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "mamidalasrikanth22@gmail.com",
    "name" : "MAMIDALA SRIKANTH",
    "rollnum" : 160116733312,
    "sent" : true,
    "year" : 2
  },
  "2038868e4c89448e35c6ba9746e990811ddaf31f969723e3f4c6da931fb970df" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "krishnasri.somepalli@gmail.com",
    "name" : "SOMEPALLI KRISHNA SRI",
    "rollnum" : 160115733128,
    "sent" : true,
    "year" : 3
  },
  "20f5ee4077279d44f65785dbc8d69011ba92d73c26f04813fe5e0ebe11e1bd1e" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "swimitha@gmail.com",
    "name" : "BUCHANNOLLA SWIMITHA REDDY",
    "rollnum" : 160115733019,
    "sent" : true,
    "year" : 3
  },
  "2189fde3a7f15304cea0661f593280af8c3c9e8b130eac233600840cf374b71f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "saikumar22111998@gmail.com",
    "name" : "SAIDAPURAM SAI KUMAR",
    "rollnum" : 160116733309,
    "sent" : true,
    "year" : 2
  },
  "221d459564b6fe11c867d6ef3a2b942007c4bc84ecf49e0bbabd1f5f26da144f" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS484",
        "group" : "5",
        "title" : "Business Intelligence",
        "year" : "4"
      }
    },
    "email" : "paruchuri.sumanth.1@gmail.com",
    "name" : "PARUCHURI SUMANTH",
    "rollnum" : 160114733115,
    "sent" : true,
    "year" : 4
  },
  "2225ec511255b90188d4fbb286e977111c5e2912b0ef3346e56b340219d2be52" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "rehana.shaik140@gmail.com",
    "name" : "SHAIK REHANA",
    "rollnum" : 160114733140,
    "sent" : true,
    "year" : 4
  },
  "23098de01303add1a47a63cf72f208086e87ca382f36c3de619ed660ca37d00e" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "skrallala752@gmail.com",
    "name" : "ALLALA SAI KRISHNA REDDY",
    "rollnum" : 160115733049,
    "sent" : true,
    "year" : 3
  },
  "238b4e1d3695fc79a98de5355b3985eb25db51aedc5ab0b021711a551818138a" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "anugugulothu3@gmail.com",
    "name" : "GUGULOTHU ANITHA",
    "rollnum" : 160113733064,
    "sent" : true,
    "year" : 3
  },
  "23f34f0c91982fe661df5946d0ed1ef4ad4badb9cc9e1d683ed895d5b1697f30" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "akhilathallapally20@gmail.com",
    "name" : "AKHILA THALLAPALLY",
    "rollnum" : 160114733001,
    "sent" : true,
    "year" : 4
  },
  "2404e3a9b817d9a8cab538d31e1bbbed601bbeb1f8c7c354f19c332d936399e3" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "activeboy369@gmail.com",
    "name" : "AYYAPPA REDDY K",
    "rollnum" : 160116733084,
    "sent" : true,
    "year" : 2
  },
  "242069ae4ffdd5b62279576ab67869220500f60ab1db79c98812d395b27d101a" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "anuragsingh864@gmail.com",
    "name" : "ANURAG SINGH TULJARAM",
    "rollnum" : 160114733149,
    "sent" : true,
    "year" : 4
  },
  "243cefd667ee70a681598bfc3d2db4a462427bdae2e72485415b979ee2f5a3b2" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS481",
        "group" : "5",
        "title" : "Pattern Recognition",
        "year" : "4"
      }
    },
    "email" : "hameed11cp201@gmail.com",
    "name" : "MOHAMMED ABDUL HAMEED",
    "rollnum" : 160114733334,
    "sent" : true,
    "year" : 4
  },
  "25107e0f4ac71ad98a095b74f73261537a66886fd52ac43a87bab5ceb661ae10" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "naveenv.vanamala@gmail.com",
    "name" : "VANAMALA NAVEEN KUMAR",
    "rollnum" : 160115733301,
    "sent" : true,
    "year" : 3
  },
  "2588c0d7b7571feab93e4dc6defa6bde0bd36da48cfd86b60d6cef25e2d81843" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "sravani.kallu97@gmail.com",
    "name" : "KALLU SRAVANI",
    "rollnum" : 160114733142,
    "sent" : true,
    "year" : 4
  },
  "26c0cfa9601e25a0648400a1cf3536b46bffdae5b3ec2f5b904a8faaa066156a" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "Vamshikrishnagvk5@gmail.com",
    "name" : "GUNDU VAMSHI KRISHNA",
    "rollnum" : 160114733116,
    "sent" : true,
    "year" : 4
  },
  "275c0edd67e89df36f99c164eb10fc96707bc30f64f681547cde1da63fe78d10" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "mounikareddy.bakaram@gmail.com",
    "name" : "MOUNIKA B",
    "rollnum" : 160115733181,
    "sent" : true,
    "year" : 3
  },
  "27c741532f830a006bf73abaf5cb6b095bdc9c0f8182be98f44d0713a32c00aa" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "adbul.wahed11314@gmail.com",
    "name" : "ABDUL WAHED",
    "rollnum" : 160115733079,
    "sent" : true,
    "year" : 3
  },
  "289f50cfb6d72bb4e9c5c1e6c2f3a19eac975605843a58f215e5178e687cd5d2" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "kdivyarsha4@gmail.com",
    "name" : "K DIVYARSHA",
    "rollnum" : 160115733069,
    "sent" : true,
    "year" : 3
  },
  "297567af0ae68a365f035e6ac3a4eff525f1f0421959488489ec4c5240608c5b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "sekhar.karedla@gmail.com",
    "name" : "KAREDLA ANANTHA SASHI SEKHAR",
    "rollnum" : 160114733091,
    "sent" : true,
    "year" : 4
  },
  "297ae99d28cb9b3f2fbd6789b8cbba7b21c76dc2139c6348469bb442dab3cfad" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "k.ramakrishna93@gmail.com",
    "name" : "KUNDA RAMA KRISHNA",
    "rollnum" : 160115733162,
    "sent" : true,
    "year" : 3
  },
  "29993ed6f2cd26c6d2de8f82bd54037b6ffb97f92895ea4235a1eef6cf9bc583" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "kamigodsama0@gmail.com",
    "name" : "HARSHA N",
    "rollnum" : 160116733092,
    "sent" : true,
    "year" : 2
  },
  "29a5e88258a9cb9d872519832540f1a635dafbf7a709ccebc31cddf77256893b" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "mosesdevara@gmail.com",
    "name" : "DEVARA MOSES",
    "rollnum" : 160115733323,
    "sent" : true,
    "year" : 3
  },
  "2a01e85e2bb1fa405624da383cd96313f47c2199582a64610b54c14c3e086711" : {
    "email" : "",
    "name" : "KASULA SHRAVAN KUMAR GOUD",
    "rollnum" : 160115733054,
    "sent" : false,
    "year" : 3
  },
  "2a4bfa048fe456e83623826344f9860eb08227b719f052ff277899595ea0d7c0" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "gurrala.maneesha@gmail.com",
    "name" : "MANEESHA REDDY G",
    "rollnum" : 160116733007,
    "sent" : true,
    "year" : 2
  },
  "2ae91a910ff7754059cc0ddf7db96b1491fdbfdf6e405f005f72436d67ec8ac3" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "rushikarejvi@gmail.com",
    "name" : "GODAVARTHI REJVI RUSHIKA",
    "rollnum" : 160114733073,
    "sent" : true,
    "year" : 4
  },
  "2bdbf51c4a6c4268fe75ecd67905a94d83f00cfdee4c900ee49643b0c78d28a5" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "dutasuryaprakash@gmail.com",
    "name" : "DUTA SURYAPRAKASH",
    "rollnum" : 160115733332,
    "sent" : true,
    "year" : 3
  },
  "2c3c9b754c2a8bc6f539654c2dbac13122b8e82f09d23ae11770e908d86a4059" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "matamvinitha.nn@gmail.com",
    "name" : "MATAM VINITHA",
    "rollnum" : 160116733324,
    "sent" : true,
    "year" : 2
  },
  "2cba349663741369838a493c2e9e1b26f5d6d327383a4c12c4b628c56d9c1be3" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "siddharthguptasg97@gmail.com",
    "name" : "K SIDDHARTH GUPTA",
    "rollnum" : 160115733173,
    "sent" : true,
    "year" : 3
  },
  "2ccc5db715383c665c845dc9532925249062427a3a406fb89b6f15ef4e6f5b70" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "manishakatravath@gmail.com",
    "name" : "KATRAVATH MANISHA",
    "rollnum" : 160115733005,
    "sent" : true,
    "year" : 3
  },
  "2d3bd47ce2a61c8cff7dd5d23827d1092b1a82779e84a94294353a1c4a738ff3" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "harshinioreddy@gmail.com",
    "name" : "HARSHINI",
    "rollnum" : 160114733067,
    "sent" : true,
    "year" : 4
  },
  "2d9817db9ef2ac9fd4b9dd87a7a12beeffcfa778ca92da4bd399799f0178f14b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "shammi.1234akhil@gmail.com",
    "name" : "SHAMMI AKHIL L",
    "rollnum" : 160114733112,
    "sent" : true,
    "year" : 4
  },
  "2e92fa60a4785a42bc2bdaa5bbbee45f97d6f7e1ade70e1c89f48a19c39ad4c2" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "mkrmissile999@gmail.com",
    "name" : "MANIKANTH REDDY M",
    "rollnum" : 160116733095,
    "sent" : true,
    "year" : 2
  },
  "2ebd72af33e32d649100bd2e75e59557f4762e76b241f9ac313f79520eb1e9aa" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "saimanideep00@gmail.com",
    "name" : "SAI MANIDEEP S",
    "rollnum" : 160116733104,
    "sent" : true,
    "year" : 2
  },
  "2ee9e1a0303649045f7b9d0259c9490410391ae1598d4d6e63c758e925851bfe" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "vishnu.sanketh1996@gmail.com",
    "name" : "KONDURU VISHNU SANKETH REDDY",
    "rollnum" : 160114733060,
    "sent" : true,
    "year" : 4
  },
  "2f41ce24649f7bc0f8e245b79d634a204d6a208135a670de18613a10e822d36d" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "swathikruthika99@gmail.com",
    "name" : "SWATHI M",
    "rollnum" : 160116733075,
    "sent" : true,
    "year" : 2
  },
  "2fabf6c55f154767c265dbe37d5071d433f7471a8a90b06eca50806fd0909142" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "rohinireddy166@gmail.com",
    "name" : "",
    "rollnum" : 160114733183,
    "sent" : true,
    "year" : 4
  },
  "2fe303f504470e2d86776961ae3191ef9bb21cee69626e62c88c95946e406ea7" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "neelavani03@gmail.com",
    "name" : "NEELA VANI",
    "rollnum" : 160114733025,
    "sent" : true,
    "year" : 4
  },
  "2ff390b68468bf9a86087f362d5b52ef2acac34bccc9cdeb05d5bc8c61723be9" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "nikhilgayam98@gmail.com",
    "name" : "GAYAM NIKHIL CHANDRA REDDY",
    "rollnum" : 160115733038,
    "sent" : true,
    "year" : 3
  },
  "3003d157297172f0ae8a974a9d8fc9ae1d804084adfd984703ddae2c50bbbc87" : {
    "email" : "devarajdeva312@gmai.com",
    "name" : "DEVARAJ N",
    "rollnum" : 160116733026,
    "sent" : true,
    "year" : 2
  },
  "306ac98c9cc4acdf28b954683b78928b4ff1059c20f6d327ad6a7b38bd398a82" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "chikula.saikumar.1078@gmail.com",
    "name" : "CHIKULA SAI KUMAR",
    "rollnum" : 160115733107,
    "sent" : true,
    "year" : 3
  },
  "31068862a3a9ede9c37d8faae5a6315a5eddd445ad96cd1a964b5f21b81bfbd0" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "akshayh380@gmail.com",
    "name" : "AKSHAY",
    "rollnum" : 160114733089,
    "sent" : true,
    "year" : 4
  },
  "312c16cc74c5760f1043dcafa4606c5ce36c64548db5ed851bdc45b59a50baf3" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "pranaytht455@gmail.com",
    "name" : "THATIKONDA PRANAY",
    "rollnum" : 160114733162,
    "sent" : true,
    "year" : 4
  },
  "3154c9dc1070d11f676b8cff4d195ae4861963a93f24e756bc62b9dd52093264" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "maldanna432@gmail.com",
    "name" : "MALDANNA K",
    "rollnum" : 160116733034,
    "sent" : true,
    "year" : 2
  },
  "316337f45f1d9b827fc4595cc464cbb2b284b10df7278344243ffe692b5cfa53" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "manojravuri1997@gmail.com",
    "name" : "RAVURI MANOJ KUMAR",
    "rollnum" : 160114733157,
    "sent" : true,
    "year" : 4
  },
  "324e4a45299c99376c9d350bb1c03ef3a8e1388daf40336e4a77f336213a0b7b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "rachanachiluka3@gmail.com",
    "name" : "CHILUKA RACHANA",
    "rollnum" : 160114733323,
    "sent" : true,
    "year" : 4
  },
  "327c0421db1ea6a022143c08c4cd85913ab612c88abcae753284a6eb70996ac8" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "lavanyakonjeti@gmail.com",
    "name" : "LAVANYA K",
    "rollnum" : 160116733005,
    "sent" : true,
    "year" : 2
  },
  "32ec7dc6c6b4f65d7cde89acf74306fc59316dfa1614254062fd5dc539408f86" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "pradeeppaltiya1997@gmail.com",
    "name" : "PRADEEP P",
    "rollnum" : 160116733041,
    "sent" : true,
    "year" : 2
  },
  "332c768eb8390198cb972afeb90b85672d09a1245ac422cb99128c97b59556f5" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "saikiran.davuluri@gmail.com",
    "name" : "DAVULURI SAI KIRAN",
    "rollnum" : 160114733110,
    "sent" : true,
    "year" : 4
  },
  "337e1f8ce3aa74fb4a9459342685117d8ba667a65eee664a0a0164a001498c3f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "dharanishpalreddy@gmail.com",
    "name" : "PALREDDY DHARANISH REDDY",
    "rollnum" : 160116733182,
    "sent" : true,
    "year" : 2
  },
  "33d0ba9742e306cd443243775bf79f65e904e238de604ca533c1e5ad677cf0b2" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "teja9897@gmail.com",
    "name" : "SAI TEJASWI MUTTAVARAPU",
    "rollnum" : 160115733142,
    "sent" : true,
    "year" : 3
  },
  "3411bef682440cda4d344873c9a1f01a1c882879498780e3d319b2ce8c4a056c" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "jeevan.gandla17@gmail.com",
    "name" : "GANDLA JEEVAN",
    "rollnum" : 160114733313,
    "sent" : true,
    "year" : 4
  },
  "346592e118bd2d1688f3a0c41b839614a4c6eb01bc971d237a322f0a48cb1b48" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "keerthanagoli97@gmail.com",
    "name" : "GOLI SAI KEERTHANA",
    "rollnum" : 160114733138,
    "sent" : true,
    "year" : 4
  },
  "35567cff338fc5fbcb7f5d7951983e922de9c7313892978252fc21032bb6f5a3" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "nvdpranaya@gmail.com",
    "name" : "GUNDALA PRANAYA",
    "rollnum" : 160114733320,
    "sent" : true,
    "year" : 4
  },
  "3597281bd2f1c0b2c7b2acab4ad840cc62c0bf24c1d50b6b92d2ff412c999696" : {
    "email" : "shaily.shaik@gmail.com",
    "name" : "SHAIK SHAILY",
    "rollnum" : 160114733015,
    "sent" : true,
    "year" : 4
  },
  "35d0a395cb75cc97c7f09977e40a26921859d6566be9a553020f7b2361d871b1" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sahithireddy29797@gmail.com",
    "name" : "MADDIKUNTLA SAHITHI",
    "rollnum" : 160115733010,
    "sent" : true,
    "year" : 3
  },
  "3709ec3aa9d95db452d11629c32483418d9b60abbb9a85299580057dc39facdc" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "lavanya.kothapalli13@gmail.com",
    "name" : "LAVANYA K",
    "rollnum" : 160116733131,
    "sent" : true,
    "year" : 2
  },
  "379541af0cea6b86055ba29e7444df64530103b34b0c22831eaa8c6eb1fbc0b4" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "akhil.reddy050@gmail.com",
    "name" : "YAKKALURI AKHIL REDDY",
    "rollnum" : 160114733148,
    "sent" : true,
    "year" : 4
  },
  "39ad7a287d2674fb9782d177f12066c7e706ffb14b8e620917db5d14ab36bd68" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "yathinreddy53@gmail.com ",
    "name" : "SAI YATHIN REDDY S",
    "rollnum" : 160116733169,
    "sent" : true,
    "year" : 2
  },
  "3a60bae195c810717730fd37700c1a11bbdd06c04afb9dde4011535c86073abc" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "shruthibarpute@gmail.com",
    "name" : "SHRUTHI BARPUTE",
    "rollnum" : 160114733079,
    "sent" : true,
    "year" : 4
  },
  "3aaa344ca11b598cd350afba0ade4ac9c275a8d9abc9e5adeb01cf6195c1cb55" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "batuakhil@gmail.com",
    "name" : "BATTU AKHIL",
    "rollnum" : 160114733147,
    "sent" : true,
    "year" : 4
  },
  "3abb46112c091fe7c1928c789d50e2f81407958e951412b1373f00cabdd991b9" : {
    "email" : "swethasriesampelly@gmail.com",
    "name" : "ESAMPALLY SWETHA",
    "rollnum" : 160116733323,
    "sent" : true,
    "year" : 2
  },
  "3b1b5a29eb4279d3ebb4b1c56da08de4e9d5749bc67f4ef8abb2ebf3e37ba9ae" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "raheepraneeth69@gmail.com",
    "name" : "GAINI PRANEETH RAHEE",
    "rollnum" : 160114733046,
    "sent" : true,
    "year" : 4
  },
  "3cd5490f974a0ae23e63a25cd41f7e0b9be68baaaef897babfb5c0c1975b7322" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "harinirao1998@gmail.com",
    "name" : "HARINI RAO A",
    "rollnum" : 160116733127,
    "sent" : true,
    "year" : 2
  },
  "3cffbfddb0e718ff63726746209fd80dc45b9b506ecbf012d56c03ca9a85c361" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "madhurima.yella@gmail.com",
    "name" : "MADHURIMA YELLA",
    "rollnum" : 160115733131,
    "sent" : true,
    "year" : 3
  },
  "3d2914a366e8df056dc584e45c70eb0cfdc66d6c18d23eaec9ec6de54d69b3ba" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "gauravpotula@gmail.com",
    "name" : "GAURAV CHOWDARY P",
    "rollnum" : 160116733027,
    "sent" : true,
    "year" : 2
  },
  "3d4ef52e0b1400ce64d4c6bacc0773e944a360e0c9987ca1ece077004ac4a02a" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "manish.panjiray@gmail.com",
    "name" : "MANISH BHUSHAN P",
    "rollnum" : 160116733158,
    "sent" : true,
    "year" : 2
  },
  "3d752323997580a2f3c4ae6b523500b618a693f17017e8a5834ee77fdf9948eb" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "azmeerapriyanka134@gmail.com",
    "name" : "AZMEERA PRIYANKA",
    "rollnum" : 160114733136,
    "sent" : true,
    "year" : 4
  },
  "3e1abda838970eab2bd28dc60431b521328ba16e0ff07e8c4ea73264174c001b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS484",
        "group" : "5",
        "title" : "Business Intelligence",
        "year" : "4"
      }
    },
    "email" : "ukiran562@gmail.com",
    "name" : "MADARI UDAY KIRAN",
    "rollnum" : 160114733315,
    "sent" : true,
    "year" : 4
  },
  "3e78555361365da88154c1dee39f5fe153162315a86bc0b110eff3c46744b694" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "dileep.matha98@gmail.com",
    "name" : "MATHA DILEEP",
    "rollnum" : 160115733153,
    "sent" : true,
    "year" : 3
  },
  "3e91e19ea17553637c77d4fd821015efe2414e487fcde16e82cea6b8fe4eec20" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "tshantan24@gmail.com ",
    "name" : "SHANTAN T",
    "rollnum" : 160116733171,
    "sent" : true,
    "year" : 2
  },
  "3efc3cb71bbeaae7f1e06a5b6d431e4528790e411c2bcc9411d41024ca0b7b03" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "arthummala1234@gmail.com",
    "name" : "ANISH REDDY THUMMALA",
    "rollnum" : 160115733085,
    "sent" : true,
    "year" : 3
  },
  "3f35c381e0cf3c44feaa8544598eefe8f39b72212cfbd549a3fe6916ae3ebfaf" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "atyam.anudeep@gmail.com",
    "name" : "SAI KRISHNA ANUDEEP A",
    "rollnum" : 160116733050,
    "sent" : true,
    "year" : 2
  },
  "3f427793f4700c3fcdc3b1ba48ecd468ce80eaa7de1f278db96ed8630e6731a5" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "revathirao.patwari@gmail.com",
    "name" : "PATWARI REVATHI RAO",
    "rollnum" : 160115733009,
    "sent" : true,
    "year" : 3
  },
  "3f5a042f22329275e1d1e968c324940ddbb161aaa076c836b30c407e257316e8" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "rahulmora007@gmail.com",
    "name" : "RAHUL M",
    "rollnum" : 160116733045,
    "sent" : true,
    "year" : 2
  },
  "3fa189998536e6b38b12a2877140388da10c4067a5a7b7b6dc79dcbb775279e5" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "vasantha.nagilla@gmail.com",
    "name" : "KORRA VASANTHA",
    "rollnum" : 160114733321,
    "sent" : true,
    "year" : 4
  },
  "406d3baf974211ce6310942c4ad413e7d43aa52f849bce0ce15013d27a04eb6a" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "mayankreddy31796@gmail.com",
    "name" : "",
    "rollnum" : 160114733185,
    "sent" : true,
    "year" : 4
  },
  "40819c7c85f045491ab4498175d6fcf839004556b32aaa5fbe4d3c2a957f2e60" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "saitharun1921189@gmail.com",
    "name" : "P SAI THARUN REDDY",
    "rollnum" : 160115733112,
    "sent" : true,
    "year" : 3
  },
  "41bd1ec3e6543355a58a26dd3da0fae076ebfc3816d0cb44c9b01421c5276e12" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "brijeshrao1096@gmail.com",
    "name" : "PAMARA BRIJESH RAO",
    "rollnum" : 160114733032,
    "sent" : true,
    "year" : 4
  },
  "41c5a5ac573bab145f5cd822beefc981e38cf24ee7cf5b4b5ea0cd636e86265e" : {
    "email" : "chopparipranisha@gmail.com",
    "name" : "CHOPPARI PRANISHA",
    "rollnum" : 160114733329,
    "sent" : true,
    "year" : 4
  },
  "41f47e47ea0f2d3dab8194f9fd6be84677c19ae9fece901ca5a0d0981e1221e7" : {
    "email" : "",
    "name" : "GARUDADRI LAKSHMI SAI NITYA",
    "rollnum" : 160115733012,
    "sent" : false,
    "year" : 3
  },
  "41f6c1233b6ee2ba28c273cba85e00194331e3f6f4927848c870bb2d62025f97" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "anumolu.goutham@gmail.com",
    "name" : "GOUTHAM A",
    "rollnum" : 160116733028,
    "sent" : true,
    "year" : 2
  },
  "4319a8d23f83ff985836749c5ad591ee39ae3d9de3d6c1d1674c8b49b3283093" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "naveen47pss@gmail.com",
    "name" : "ANTHARVEDI NAVEENKUMAR",
    "rollnum" : 160116733308,
    "sent" : true,
    "year" : 2
  },
  "43c523c643ff9856ace011cb330d21cc817757e18abb8e26266a66b17df9b2b5" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sambaraju.gsr014@gmail.com",
    "name" : "G SAMBA RAJU",
    "rollnum" : 160115733315,
    "sent" : true,
    "year" : 3
  },
  "43dbbe7021e999bcf797fe6c25c8e099607fa14174a8eb6262c93062ac5390cf" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "anjaniv.14@gmail.com",
    "name" : "ANJANI VADEPALLY",
    "rollnum" : 160115733064,
    "sent" : true,
    "year" : 3
  },
  "43ea8ac2c544d004d0c7bfc6d6a362ab60d476a722217bd500248bc28150e2fa" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "ravikumaragurla@gmail.com",
    "name" : "AGURLA RAVI KUMAR",
    "rollnum" : 160114733049,
    "sent" : true,
    "year" : 4
  },
  "441e2f49dfb13c2c94fd9b44fd1fa0eca6147b310c0b0f2887536e620df15245" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "rohithreddy019@gmail.com",
    "name" : "BANDARU ROHITH REDDY",
    "rollnum" : 160115733103,
    "sent" : true,
    "year" : 3
  },
  "44449298aa9f61aaea2f7dc4f47416ef0d824e95be242507235bf2a1ea3d9822" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "hemanthsamidi123@gmail.com  ",
    "name" : "HEMANTH REDDY S",
    "rollnum" : 160116733157,
    "sent" : true,
    "year" : 2
  },
  "445c059766bafcaf515d226cf533064bd5340bf136888a66b0d6da23492c012b" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "challahari520@gmail.com",
    "name" : "C HARI SAMANTH",
    "rollnum" : 160115733029,
    "sent" : true,
    "year" : 3
  },
  "448388b726b1f8aed72fecea9ce064a6896acfcc73b2f72b0ea99aba5fe1f321" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "nikhilsunny005@gmail.com",
    "name" : "BOKKALA NIKHIL REDDY",
    "rollnum" : 160114733104,
    "sent" : true,
    "year" : 4
  },
  "44d17a6953f427c0971e362e46fc66ffcbdc0e4e1c82188a0a6f90161ad4d589" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "somarapuaravind@gmail.com",
    "name" : "SOMARAPU ARAVIND BABU",
    "rollnum" : 160115733023,
    "sent" : true,
    "year" : 3
  },
  "4503f5675d08035212bbe3a8d598b1931378c1be7a4721add80f21c749f309c6" : {
    "email" : "hariharangangula99@gmail.com",
    "name" : "HARIHARAN SAI G",
    "rollnum" : 160116733091,
    "sent" : true,
    "year" : 2
  },
  "45e4e1bd6cf030861953c88ea05f20ee6bf52f0f3676dfeb336a5b55a68df976" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "ksrikanth910@gmail.com",
    "name" : "KARRE SRIKANTH",
    "rollnum" : 160115733314,
    "sent" : true,
    "year" : 3
  },
  "46416ede719cc0b99b39395f62e49ddbc1ddd245e17583989f7778ea6dd317aa" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CS484",
        "group" : "5",
        "title" : "Business Intelligence",
        "year" : "4"
      }
    },
    "email" : "saisruthi12343@gmail.com",
    "name" : "MALLINENI SAI SRUTHI",
    "rollnum" : 160114733139,
    "sent" : true,
    "year" : 4
  },
  "464a1f25fe900c519bbdf755c632e5438b3322ee9336f780a4743940ee0c6e34" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "spandanasweety78@gmail.com",
    "name" : "ENJALA SPANDANA",
    "rollnum" : 160115733017,
    "sent" : true,
    "year" : 3
  },
  "4696a107534ade8ad9c28a3b95fffce5ca325a9dc260d61d8061cfd32b2448f9" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "jyothireddynukala@gmail.com",
    "name" : "NUKALA JYOTHI",
    "rollnum" : 160115733126,
    "sent" : true,
    "year" : 3
  },
  "46a47609b9dc0606e71a06700ad81fb14f5d2af2315c4cd9afb84136c9622420" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "padalasoumya123@gmail.com",
    "name" : "PADALA SOUMYA",
    "rollnum" : 160115733145,
    "sent" : true,
    "year" : 3
  },
  "46dbe453ed9f4aed05a166a4be3b9d47dcf9843e9ec6eb227c602a456bf0cd44" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "shivani6198@gmail.com",
    "name" : "SHIVANI V",
    "rollnum" : 160116733141,
    "sent" : true,
    "year" : 2
  },
  "4701e56384d0f654c493d023cddb04e4db9a9f9d8319bfbee40d763a3fea652d" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "suchendranath2@gmail.com",
    "name" : "SUCHANDRANATH B",
    "rollnum" : 160116733058,
    "sent" : true,
    "year" : 2
  },
  "472e542e0ba3ea413ddf396a6a26e2a9a034ad72e24f027cf1c2d7e5ac263417" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "mujtaba.1996.mf@gmail.com",
    "name" : "MD MUJTABAUDDIN FURQAN",
    "rollnum" : 160114733158,
    "sent" : true,
    "year" : 4
  },
  "4744837b84a8ff9d3a0a84a79871b8b7f11b087cf7e8854086454eb0f676a777" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "loyapallymanisha@gmail.com",
    "name" : "MANISHA RAO LOYAPALLY",
    "rollnum" : 160114733129,
    "sent" : true,
    "year" : 4
  },
  "47afabe3e0fd5e6be40dcde0f61f4d040b7c98024b291af27b5866a46acb4468" : {
    "email" : "",
    "name" : "LINGAM RAAGAMAYEE",
    "rollnum" : 160115733135,
    "sent" : false,
    "year" : 2
  },
  "47c9e57cd502841a521b732229cfef848a116e99b817e6a3fe5a6535eab4e305" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "mohanthvanaparthi6@gmail.com",
    "name" : "VANAPARTHI MOHANTH",
    "rollnum" : 160114733316,
    "sent" : true,
    "year" : 4
  },
  "4818752cf1c6ea55019402c2aaf4d1ef1069b5223fb2f2f07cf3cfd8c0c123b1" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "Thadurusnigdhapriya@gmail.com",
    "name" : "SNIGDHA PRIYA T",
    "rollnum" : 160116733143,
    "sent" : true,
    "year" : 2
  },
  "48240682845bdc435792ff21d93e3997b0e485795fe66785ca8cafa8fd5fbe6c" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "harshithaadluri@gmail.com",
    "name" : "ADLURI HARSHITHA",
    "rollnum" : 160115733003,
    "sent" : true,
    "year" : 3
  },
  "49e2c35d3bd0f84212a719aa9a3d9cfdae62258b6d0288748076120bfaf8a095" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "abhijna49582@gmail.com",
    "name" : "ABHIJNA D",
    "rollnum" : 160116733121,
    "sent" : true,
    "year" : 2
  },
  "49f75fb8dabcb8af6ed4c7e612404f9ed3dac935835749a67adf2d14a02ab510" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "akhilarao.billakanti@gmail.com",
    "name" : "BILLAKANTI AKHILA",
    "rollnum" : 160115733062,
    "sent" : true,
    "year" : 3
  },
  "4a085c501165c1fe8a66d1254d999b60d3434504efda19f3c009753c41ae71bd" : {
    "email" : "manasa.susirla@gmail.com",
    "name" : "MANASA SUSIRLA MANONMAYI",
    "rollnum" : 160114733130,
    "sent" : true,
    "year" : 4
  },
  "4ab28dc7352245c5533ac1b804a703f115e8bea57fd3ad3eb6ecc0113e77832d" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "shirisha1357@gmail.com",
    "name" : "BANDARU SHIRISHA",
    "rollnum" : 160115733015,
    "sent" : true,
    "year" : 3
  },
  "4abbbc363ee808ca20312c1b350cd83b9b47e18afd7f6e1c54178a2ca6f4aa17" : {
    "email" : "ashrithnadipally@gmail.com",
    "name" : "NADIPALLY SAI ASHRITH",
    "rollnum" : 160115733106,
    "sent" : true,
    "year" : 3
  },
  "4b6caf4882b5e2c37ca2496d916571a467827c9d1ec57a12c7a531cbb847dc78" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sripriya.simahadri@gmail.com",
    "name" : "SRIPRIYA S",
    "rollnum" : 160116733018,
    "sent" : true,
    "year" : 2
  },
  "4b7ef3d62d349205ee83eb53d8abe5af31c5e58a44521d4110f91f88177a17b1" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "tameema.farheen@gmail.com",
    "name" : "TAMEEMA FARHEEN",
    "rollnum" : 160116733148,
    "sent" : true,
    "year" : 2
  },
  "4b8a61287071c835e454667a7e85f1ee3e641140ed0d768fbd81c8ae017324f1" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "chanakyagondi@gmail.com",
    "name" : "CHANAKYA PHANINDRA G",
    "rollnum" : 160116733085,
    "sent" : true,
    "year" : 2
  },
  "4c976f508b2a55fca4961fc3d231bce4b18a8099d742bdcdcfac59570b967770" : {
    "email" : "niharikanisangi@gmail.com",
    "name" : "NIHARIKA NISANGI",
    "rollnum" : 160114733133,
    "sent" : true,
    "year" : 4
  },
  "4cc65036ed526629dc2c2821a0f46d25b4a48bd8c9082897ff3ed6edf5d69d43" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "mpothireddy@gmail.com",
    "name" : "MONIKA POTHIREDDY",
    "rollnum" : 160115733072,
    "sent" : true,
    "year" : 3
  },
  "4ce0147f99c223da2dd240b7f75ef26c529fac122880710adf68c6ece5c84717" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "rithik.kurnool@gmail.com",
    "name" : "SHIVA RITHIK REDDY Y",
    "rollnum" : 160116733108,
    "sent" : true,
    "year" : 2
  },
  "4d305b253de0c9266ad8e4f3a289944e1389d92f3bd4ec19ae601764c11a3966" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "rohithsingireddy98@gmail.com",
    "name" : "SINGIREDDY ROHITH REDDY",
    "rollnum" : 160115733104,
    "sent" : true,
    "year" : 3
  },
  "4d41db614b91f40fec933bb0646d4cc61ba7fa7a77dc8811bd5c25c62314abc6" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "ramavathmoona@gmail.com",
    "name" : "RAMAVATH MOONA",
    "rollnum" : 160115733336,
    "sent" : true,
    "year" : 3
  },
  "4d69a38dab37e5e901f8e7f20a1b39d1e23f7eb8df7ad82ed796f939e6affbea" : {
    "email" : "pradeeptekmal@gmail.com",
    "name" : "PRADEEP KUMAR T",
    "rollnum" : 160116733040,
    "sent" : true,
    "year" : 2
  },
  "4d7d473dc265d9ed87e3431232e0e3ed8d161679a7578fd5ea56e4a1711ce330" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "bablusa7@gmail.com",
    "name" : "KRISHNA SAI VAMSI CHINTALA",
    "rollnum" : 160115733091,
    "sent" : true,
    "year" : 3
  },
  "4e181a5efd17005816ed8262fc2b7982dfcd060699a1927dfd39181a3095e055" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "aaqilshaik.as@gmail.com",
    "name" : "SHAIK AAQIL",
    "rollnum" : 160115733170,
    "sent" : true,
    "year" : 3
  },
  "4e756a78cafa970da7034c93fc1b75b08d96d5de25048d3cd5b0b3757f9e9c72" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "reddymanishayadam@gmail.com",
    "name" : "Y MANISHA",
    "rollnum" : 160114733010,
    "sent" : true,
    "year" : 4
  },
  "4eb069c1c28191b753e612756f3eadfc1722a448b473dc9a3a3fe2766fb57ec5" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "cravoori514@gmail.com",
    "name" : "",
    "rollnum" : 160114733186,
    "sent" : true,
    "year" : 4
  },
  "4f62297eb1176afa2b6e7d9eb1261fe8b95bdbd1372f2706e5d77ae46bd162cf" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "yashwanthreddy962@gmail.com",
    "name" : "YASHWANTH REDDY K",
    "rollnum" : 160116733120,
    "sent" : true,
    "year" : 2
  },
  "507007389d0e0c3255e0639ff2b381dc3d7f2f66ba31d76ebc5beb3c175dbc3a" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "darshana1296@gmail.com",
    "name" : "DARSHANA BOMMIREDDY REDDY",
    "rollnum" : 160114733065,
    "sent" : true,
    "year" : 4
  },
  "509f5a3240f428d96985acdc654f97806e4d736daa13223518e8528c3cbafaf9" : {
    "email" : "datharajgdr@gmail.com",
    "name" : "DATTARAJ G",
    "rollnum" : 160114733150,
    "sent" : true,
    "year" : 4
  },
  "5112c5ab1c81d5764dcb8e5f3f463aa2938655bbd32e6ea9f65696004d658e20" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "karthik.mukka@gmail.com",
    "name" : "MUKKA KARTHIK",
    "rollnum" : 160114733097,
    "sent" : true,
    "year" : 4
  },
  "51226fa685fbf589a963f20ca20fe3337890d5852d8c128dc78b5e31edd447b9" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "harshaj.harry@gmail.com",
    "name" : "ESHWAR HARSHA VARDHAN JALLEDA",
    "rollnum" : 160114733093,
    "sent" : true,
    "year" : 4
  },
  "51250d8193d7f135778886d8a25a7e61796d3e710e8e88922c703fd4695e2e5b" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "shyamalakanukuntla24@gmail.com",
    "name" : "KANUKUNTLA SHYAMALA",
    "rollnum" : 160115733330,
    "sent" : true,
    "year" : 3
  },
  "516308d40ec0a0ec8ee5ea4ab225821af388ba65bb10ddd3d72d5d22e2c57bef" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "maheshkoorakula@gmail.com",
    "name" : "KOORAKULA MAHESH",
    "rollnum" : 160114733155,
    "sent" : true,
    "year" : 4
  },
  "51c37823e0133fca1c07f6c06d043b0f5c97038b3f981d28df15ff4131a220ed" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "bhavyaguduru56@gmail.com",
    "name" : "GUDURU BHAVYA",
    "rollnum" : 160115733066,
    "sent" : true,
    "year" : 3
  },
  "51f4647d97f6994358a3be85887ac308d65dac6d8fb6b363226a980166fbdc47" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "Lingampallipravalika567@gmail.com",
    "name" : "LINGAMPALLI PRAVALIKA",
    "rollnum" : 160115733306,
    "sent" : true,
    "year" : 3
  },
  "52006174d368050ca1237bea6d23a771685df6178e05b1778e02f27c9e5e2067" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sadulaanurag@gmail.com",
    "name" : "SADULA SAI ANURAG",
    "rollnum" : 160115733164,
    "sent" : true,
    "year" : 3
  },
  "5270c27cb1ae827e30e83e46887f4b030a669481d41089177c02d9469f383c60" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sairajay39@gmail.com",
    "name" : "YADUGIRI SAI RAJA",
    "rollnum" : 160115733109,
    "sent" : true,
    "year" : 3
  },
  "53d46dce704da3c721d35d072a82d5881e53a5c6f586e9b180595114c74ffbc7" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "orckstar@gmail.com",
    "name" : "OMAR AHMED",
    "rollnum" : 160116733162,
    "sent" : true,
    "year" : 2
  },
  "53dbaed286bb006f3d63dfb20edcd7cd307e366729ee1a288b84a5ff1a24cf7f" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "raghamounika.rm@gmail.com",
    "name" : "GONTHINA SAI RAGHA MOUNIKA",
    "rollnum" : 160114733074,
    "sent" : true,
    "year" : 4
  },
  "53f75f61efbd7e2188db28f5ed229c57db9fcc2b7b230bd7f7eb53f55c9c7fcf" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "ruchi.961228@gmail.com",
    "name" : "RUCHITHA CHINTHALA",
    "rollnum" : 160114733014,
    "sent" : true,
    "year" : 4
  },
  "54a4d7a284c01f0812b65d7e502804b9afddc28c981ab38e5889b82fde6d7706" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "bhongiritejaswi24@gmail.com",
    "name" : "BHONGIRI TEJASWI",
    "rollnum" : 160115733312,
    "sent" : true,
    "year" : 3
  },
  "5505808d8d98331f19c7e39e532e2b02c03ef830d40edac9566ae086c86edaae" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "shivakrishna.govindu@gmail.com",
    "name" : "GOVINDU VENKATA SHIVA KRISHNA",
    "rollnum" : 160114733307,
    "sent" : true,
    "year" : 4
  },
  "555ecd1019828a94656938821bb8f15eb40e9e1aebc8c61c5bec317e0a9ed1f1" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "vedapriya.priya@gmail.com",
    "name" : "UPPALA VEDA PRIYA",
    "rollnum" : 160116733184,
    "sent" : true,
    "year" : 2
  },
  "556deb402f29d572fc6b48d94494cd1dbde7115140b35e86498db0cac0fa0cc7" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "anurag4102@gmail.com",
    "name" : "ANURAG D",
    "rollnum" : 160116733151,
    "sent" : true,
    "year" : 2
  },
  "557298037ec6e268823573419729656bee1d8423eff8a3349a1a7c38355b700f" : {
    "elective" : {
      "4" : {
        "code" : "CS473",
        "group" : "4",
        "title" : "Semantic Web & Social Networks",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "srihita23@gmail.com",
    "name" : "VAKULA NAGA SARITHA KARRI",
    "rollnum" : 160114733084,
    "sent" : true,
    "year" : 4
  },
  "55a5add94cea79cf12ae2b98dddd6c6166b5e5bb1cc7519d64f567f7d9da5ed5" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "bhavyakosa@gmail.com",
    "name" : "BHAVYA K",
    "rollnum" : 160116733123,
    "sent" : true,
    "year" : 2
  },
  "55ef7a37ce0bccdf2520e11361b5a2875aa672e1fd0e1d49ce78e68780a02ddd" : {
    "email" : "",
    "name" : "CHINTALA RAGHAVENDRA",
    "rollnum" : 160115733100,
    "sent" : false,
    "year" : 3
  },
  "5697414c490dd4c515fd692194a78a1b1e584ccb0eefb02470be448ab71d40e1" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "chetanareddy64@gmail.com",
    "name" : "CHETANA REDDY Y",
    "rollnum" : 160116733064,
    "sent" : true,
    "year" : 2
  },
  "56ebd025db18464497d83715e45aa799037839a55f6dfe20142bdd023456a178" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "Kunal.teeda@gmail.com",
    "name" : "KUNAL T",
    "rollnum" : 160114733042,
    "sent" : true,
    "year" : 4
  },
  "57043a14eed01476d8c40e11201d5b65e93d6e066455443e68f241615f9b5c37" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "sirisreeshma123@gmail.com",
    "name" : "THUPAKULA SAI SREESHMA",
    "rollnum" : 160115733140,
    "sent" : true,
    "year" : 3
  },
  "571a8f3f3e9a476641e48055e0e87828f3d8e848412cc8dc64897bd1e3c05b5b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "asfansd@gmail.com",
    "name" : "ASFAN SAJID",
    "rollnum" : 160114733030,
    "sent" : true,
    "year" : 4
  },
  "576b9e5ffc3118efb7af14a51a8306916ec66ab76d06ff1fc4bbca7c20bd5c0f" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "itheshmuppaneni@gmail.com",
    "name" : "MUPPANENI ITHESH",
    "rollnum" : 160115733032,
    "sent" : true,
    "year" : 3
  },
  "581c7f1e03f01e50568ceeca2cddad1d82926967ccc4372adbb4922a9613cef4" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "rachanakavukuntla@gmail.com",
    "name" : "KAVUKUNTLA RACHANA",
    "rollnum" : 160115733134,
    "sent" : true,
    "year" : 3
  },
  "584f1e6f12f80d1d834fdac33c758d1d35371a84c58b8f7a2cd3de2f08e99e3f" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "saimouna999@gmail.com",
    "name" : "BOGIREDDY SAI MOUNA",
    "rollnum" : 160115733139,
    "sent" : true,
    "year" : 3
  },
  "58516a0f5ad6b1bd157ec6fdb9d3ef4105e871996797d984ab5a850f5c73bddd" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "shivanichennoju@gmail.com",
    "name" : "SHIVANI C",
    "rollnum" : 160116733014,
    "sent" : true,
    "year" : 2
  },
  "5854e98d067b7649f19a4f874455c4746ce903c5a3b6b6fbefaa35626f9c53d5" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nehaafrose11@gmail.com",
    "name" : "NEHA AFROSE",
    "rollnum" : 160116733134,
    "sent" : true,
    "year" : 2
  },
  "591a2b891fc5810be3341f3a1b3de4ab26a9facdb9d96d205df07adda06f9a0d" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "chandana.katnapalli45@gmail.com",
    "name" : "KATNAPALLI SRICHANDANA",
    "rollnum" : 160115733018,
    "sent" : true,
    "year" : 3
  },
  "59adb2af82131d07ee3a1455ee49654920ecd18e84f95c8b4f52fc27b9214dc6" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "Kethavathchenna123@gmail.com ",
    "name" : "SANDHYA K",
    "rollnum" : 160116733138,
    "sent" : true,
    "year" : 2
  },
  "5a44c0739f1b0e7e1e2dc8e208eac94017df15ed6241f0fe0f99d708f5684221" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "Shashikumargundala@gmail.com",
    "name" : "SHASHI KUMAR GUNDALA",
    "rollnum" : 160116733333,
    "sent" : true,
    "year" : 2
  },
  "5a807f0779a42f1b82e66b257d350dbde83ada7b60e303302a4a5a702716d97c" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "addankibrunda@gmail.com",
    "name" : "BRUNDA DEVI A",
    "rollnum" : 160114733123,
    "sent" : true,
    "year" : 4
  },
  "5a9a4488b0d2b4611d26486303362b6df9f94b4fe7bc477e42ffcca15074a5be" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "hajirahtabassum@gmail.com",
    "name" : "SHAIK HAJIRAH TABASSUM",
    "rollnum" : 160115733144,
    "sent" : true,
    "year" : 3
  },
  "5b07a6786f10a490cf70395a17091006bd1b34489ff62504ef4fd6de22c97067" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "gshashi.58@gmail.com",
    "name" : "G SHASHI KUMAR",
    "rollnum" : 160114733054,
    "sent" : true,
    "year" : 4
  },
  "5b383b3bcc39ab218d621afcc5ef88d3588adae53a7d44d3acc8e6be82d4a0f7" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "pkodi333@gmail.com",
    "name" : "PRASHANTI K",
    "rollnum" : 160116733010,
    "sent" : true,
    "year" : 2
  },
  "5c17fa69be38cea331a1f2149fbb6d1254804eb669f38396345b81bf1a694b10" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "bnikhil.1998@gmail.com",
    "name" : "B NIKHIL KUMAR",
    "rollnum" : 160115733039,
    "sent" : true,
    "year" : 3
  },
  "5cfa78097ce469e9e6ce50f3c5ac8313bf4dc7225afe7020dcef59a8cbf022c4" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "sheruvinod@gmail.com",
    "name" : "SHERU VINOD KUMAR",
    "rollnum" : 160116733305,
    "sent" : true,
    "year" : 2
  },
  "5d6ef1499956f7576a6199bc44f6175b97dd2531585255e1179af3d9a8eefda7" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "thummababblu@gmail.com",
    "name" : "THUMMA PRUDHVI",
    "rollnum" : 160114733163,
    "sent" : true,
    "year" : 4
  },
  "5dc176843630f53454558195b363402f6eece132a28f754cedb10f3d96c0b5f6" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "meghana25293@gmail.com",
    "name" : "MEGHANA REDDY CH",
    "rollnum" : 160116733008,
    "sent" : true,
    "year" : 2
  },
  "5e5220044d9a020bfae30c45bc85ca3167ee51ea668a0e40bd057a2b1b492512" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nidhisv10@gmail.com",
    "name" : "NIDHI VRAJ SADHUVALA",
    "rollnum" : 160116733070,
    "sent" : true,
    "year" : 2
  },
  "5ee61d89a7165f256847f8c4c930e7ac396c33995375aac8b9ed50bd6badda32" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "jeevanadesai@gmail.com",
    "name" : "JEEVANA D",
    "rollnum" : 160116733003,
    "sent" : true,
    "year" : 2
  },
  "5f50d6ba7ee1cfd650e3deb54699a89bd01e32cb8018d5b15bb4bc90b0649f85" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "appalilasya@gmail.com",
    "name" : "A.SAI SREE LASYA",
    "rollnum" : 160116733319,
    "sent" : true,
    "year" : 2
  },
  "5f57c977410b24f377bac3a083672877d592876297afd88064bc402738baa16e" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "abhishekdoodgaon25@gmail.com",
    "name" : "DOODGAON ABHISHEK",
    "rollnum" : 160114733085,
    "sent" : true,
    "year" : 4
  },
  "5f5f8ce4fcb60d5eb46a5e03310e43c401e21973d139dbafdeee9d0f581f0096" : {
    "elective" : {
      "3" : {
        "code" : "CS354",
        "group" : "3",
        "title" : "Simulation and Modeling",
        "year" : "3"
      }
    },
    "email" : "srivatsa28@gmail.com",
    "name" : "VENKATA SRIVATSA GRANDHI",
    "rollnum" : 160115733059,
    "sent" : true,
    "year" : 3
  },
  "5fb8d43a64c34779418b72a7185bec57e5f1881e9f47193b62e42d5fdf6b7d96" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "amireddylakshman@gmail.com",
    "name" : "AMIREDDY LAKSHMAN",
    "rollnum" : 160115733158,
    "sent" : true,
    "year" : 3
  },
  "607d4f0b17481151e0218cb9a27f158e776d809633dec5c5c53e564f1b7bad6b" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "pokuri.niranjan@gmail.com",
    "name" : "POKURI NIRANJAN",
    "rollnum" : 160114733043,
    "sent" : true,
    "year" : 4
  },
  "608bd97393bd3728c7bdca947a03748833bd1b84526527fd30d14542d24a5e5b" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "kavyasri049@gmail.com",
    "name" : "SREERAM KAVYA SRI",
    "rollnum" : 160115733325,
    "sent" : true,
    "year" : 3
  },
  "609e89a8fee1cf9e558abba006ae1c958262cdd5d4fdd5d3aea49a57c0e3ca60" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "srujanveshg@gmail.com",
    "name" : "KOTHA SRUJANVESH GOUD",
    "rollnum" : 160115733057,
    "sent" : true,
    "year" : 3
  },
  "60fd81a670097cf019539e191acc3d37e52991e1165e95de3713a3d1c72e5ebb" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "anuragmuppala99@gmail.com  ",
    "name" : "ANURAG M",
    "rollnum" : 160116733152,
    "sent" : true,
    "year" : 2
  },
  "6117f52480a6f31eaa571b6458fc7319ebe0d5efaaf7e90612a92879a230b7f7" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "prabhamaddi259@gmail.com",
    "name" : "",
    "rollnum" : 160113733081,
    "sent" : true,
    "year" : 4
  },
  "61d6bcf56c4331c2ecb2b63ff99ffb89f16c867383cbd33938be4375f4c3b69f" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "shivateja.tadaka@gmail.com",
    "name" : "TADAKA SHIVATEJA",
    "rollnum" : 160114733314,
    "sent" : true,
    "year" : 4
  },
  "626038e6e13bc687556ebf31d19ae0b81c6012db984e79c9d1428ccabd6e0858" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS484",
        "group" : "5",
        "title" : "Business Intelligence",
        "year" : "4"
      }
    },
    "email" : "hrudhaypasupuleti@gmail.com",
    "name" : "HRUDHAY PASUPULETI",
    "rollnum" : 160114733038,
    "sent" : true,
    "year" : 4
  },
  "62720794ab8296e975d56a335dee934bf6f893de8fe241c891e432abaccf7e35" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "rohithsingirikonda@gmail.com ",
    "name" : "SINGIRIKONDA ROHITH KUMAR",
    "rollnum" : 160116733326,
    "sent" : true,
    "year" : 2
  },
  "628b321e9c0c3ac4ddbfe1a91f83a8fc00e969487cd0532c48b7e2e826edac64" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "ME472",
        "group" : "5",
        "title" : "Intellectual Property Rights",
        "year" : "4"
      }
    },
    "email" : "nitinkumar23717@gmail.com",
    "name" : "BIRAM NITHIN KUMAR",
    "rollnum" : 160114733105,
    "sent" : true,
    "year" : 4
  },
  "628fd6d30211ac3a0798874b109a06744cdd6342446efd2eaf0e2411b215461e" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "hemanth26rulz@gmail.com",
    "name" : "MUSUKU HEMANTH REDDY",
    "rollnum" : 160115733031,
    "sent" : true,
    "year" : 3
  },
  "62f1ee51d93cbcaf70b1b7bdd96b66424999f685b099d2f4a57df05b3477cd33" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "teddy.saakshi@gmail.com",
    "name" : "SAAKSHI GUPTA",
    "rollnum" : 160116733072,
    "sent" : true,
    "year" : 2
  },
  "63c54ac8f574d77ac93e24580e1837410e2546659393f0fb34e24adaff2a81a9" : {
    "email" : "saiteja.kondapalli@gmail.com",
    "name" : "KONDAPALLI SAI TEJA",
    "rollnum" : 160114733167,
    "sent" : true,
    "year" : 4
  },
  "63c921e801273a2db4b8bf7549c3fc4312c62ef348f2bdbf1cb9094c28b85dea" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "praneeth970@gmail.com",
    "name" : "R PRANITH KUMAR",
    "rollnum" : 160114733106,
    "sent" : true,
    "year" : 4
  },
  "640ad399d89e1dea08151eebc387f679961a68a32d7ae135d2357106bb0db231" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "vinayd.1407@gmail.com",
    "name" : "D.VINAY SAGAR",
    "rollnum" : 160115733321,
    "sent" : true,
    "year" : 3
  },
  "65203faf92130e21ee0a99b5209607750287647aa7711bd5a3b2c33ada9017e9" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sahitiblss@gmail.com",
    "name" : "RAMARAJU BALA LAKSHMI SAI SWETA SAHITHI",
    "rollnum" : 160115733123,
    "sent" : true,
    "year" : 3
  },
  "6574de7c443e9550ecb216ca89c05dbc0ebaf73719eeb79a78ec2142a8630705" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "sravani.thota1998@gmail.com",
    "name" : "THOTA SRAVANI",
    "rollnum" : 160115733322,
    "sent" : true,
    "year" : 3
  },
  "65e7946faa759907e372e97ea550fc5d403bb6479cc02915b5745009b00c21f1" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "monika27071999@gmail.com",
    "name" : "MONIKA P",
    "rollnum" : 160116733069,
    "sent" : true,
    "year" : 2
  },
  "66426c86bf14cc2fc94c96f3d71d6af438013150dec42d6f803b9ed0f03ace72" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sreerupa168@gmail.com",
    "name" : "KATAMONI SREERUPA GOUD",
    "rollnum" : 160115733310,
    "sent" : true,
    "year" : 3
  },
  "666a01ce2281cacc0ba3ae8c8ce9fbce1f9e775617eabcbc76646e4d5ad08068" : {
    "email" : "mohdabdulsamad44@gmail.com",
    "name" : "MOHD ABDUL SAMAD",
    "rollnum" : 160115733309,
    "sent" : true,
    "year" : 3
  },
  "667242cc1ac2a3719fc96e751d0af2edd617acdfcf520b8a6617353e9308568f" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "revannth1997@gmail.com",
    "name" : "VEDALA SAI REVANNTH",
    "rollnum" : 160115733050,
    "sent" : true,
    "year" : 3
  },
  "6691a49b501f4a30fee2998eb945aedd90a1b828ca45d982e09bb2eef234b98f" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sreeharipriyab@gmail.com",
    "name" : "B SREE HARI PRIYA",
    "rollnum" : 160115733147,
    "sent" : true,
    "year" : 3
  },
  "6708c4b817319cdf140c5397ff85dc48b34c0667f7b529e1111e3ccc60e750a3" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "haris.omer5@gmail.com",
    "name" : "HARIS OMER HABEEB",
    "rollnum" : 160114733322,
    "sent" : true,
    "year" : 4
  },
  "6744f140af48318339656519a2896b55294888d5f4f8d2c73ed905da61f993ad" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "satyaparimala999@gmail.com",
    "name" : "SATYA PARIMALA R",
    "rollnum" : 160116733012,
    "sent" : true,
    "year" : 2
  },
  "6757373fc26f5c234604314fd14a2ce0c5942a4d85096ad67fb93c8b77ef6ed1" : {
    "email" : "",
    "name" : "DEEPAK S",
    "rollnum" : 160116733088,
    "sent" : false,
    "year" : "2"
  },
  "6784d22be5f2d94cc42ffeb98338e7892d7da65af27b56ff86fdc095fda6e276" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "spraneethkumar97@gmail.com",
    "name" : "S PRANEETH KUMAR",
    "rollnum" : 160115733099,
    "sent" : true,
    "year" : 3
  },
  "67e0d72265e7c5c32abc1ed29698e48eb5a32fe7726a70a0fb4bcfdb457c6106" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "nagnagarjun01@gmail.com",
    "name" : "GURRAM NAGARJUN REDDY",
    "rollnum" : 160115733037,
    "sent" : true,
    "year" : 3
  },
  "68154beaef6c591c3ab719846e574cdc96d02c11003fd6f451985be9c52fb28c" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "rohith.kadari143@gmail.com",
    "name" : "KADARI ROHITH",
    "rollnum" : 160116733307,
    "sent" : true,
    "year" : 2
  },
  "685ad53b74201d0a7463849a57b6ae0b294e5ef7e3500d00367a7aeb0ee6e7af" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "ullanguntamrudula999@gmail.com",
    "name" : "MRUDULA U",
    "rollnum" : 160116733133,
    "sent" : true,
    "year" : 2
  },
  "6874139badb6960590b39453945cf9271928845298504aa189908be7d37ce95c" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "valekhyarao@gmail.com",
    "name" : "ALEKHYA RAO V",
    "rollnum" : 160116733122,
    "sent" : true,
    "year" : 2
  },
  "69135fd675fded2eb9f2011481b8c1a98e33b263b5e9e581a2f70f4059aa3701" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "mmaashraf798@gmail.com",
    "name" : "MOHAMMAD MAHABOOB ALI ASHRAF",
    "rollnum" : 160116733036,
    "sent" : true,
    "year" : 2
  },
  "6943c168e3b08bcce41ae0c50f1b24e8b09124f57aed677d241fe92d9f32cbe3" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "hk.kapashi@gmail.com",
    "name" : "HIMANSHU KETAN KAPASHI",
    "rollnum" : 160115733157,
    "sent" : true,
    "year" : 3
  },
  "69a597886de239c2481dcf4b9d5c19cd13b65baf5c2ba951ec5c5f30278664d7" : {
    "email" : "nihanth876@gmail.com",
    "name" : "SRI NARASIMHA NIHANTH V",
    "rollnum" : 160116733055,
    "sent" : true,
    "year" : 2
  },
  "69c7dd5a17a3b55f25118a082e7ab249be29c7287df2be17cf0c9afa2435728f" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "mnrkumarmalladi@gmail.com",
    "name" : "NAGA RAMA BHADRA KUMAR MALLADI",
    "rollnum" : 160115733036,
    "sent" : true,
    "year" : 3
  },
  "69e2373c1f4977e1906b783a9784e018237cd6c26e4f836ed0d8f7591bcf06fc" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "bjagathdeepthi99@gmail.com",
    "name" : "JAGATH DEEPTHI B",
    "rollnum" : 160116733067,
    "sent" : true,
    "year" : 2
  },
  "69f219945626fde5edeb6a741a88cc8bf76365544eb01406028c962dea9a7373" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "therushreyat@gmail.com",
    "name" : "THERUPALLY SHREYA",
    "rollnum" : 160115733016,
    "sent" : true,
    "year" : 3
  },
  "6a951e32af1be3178c8783dad5b0cefe9edba1bdd4070fb093c00d026c42b4a9" : {
    "email" : "kapilreddy18@gmail.com",
    "name" : "KAPIL REDDY",
    "rollnum" : 160114733154,
    "sent" : true,
    "year" : 4
  },
  "6ac35b59ae73edf37bfcd02e90e9fe0e2fe23c5510a47e2ee7077916f023ba44" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "naveenkandraj@gmail.com",
    "name" : "KANDRAJU NAVEEN KUMAR",
    "rollnum" : 160115733329,
    "sent" : true,
    "year" : 3
  },
  "6b0bf353ddc9083fb87f076115da0c77316e73d6ffcf9fe46b3ad6375b8b9e2c" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "mudavathrupesh@gmail.com",
    "name" : "MUDAVATH RUPESH",
    "rollnum" : 160115733105,
    "sent" : true,
    "year" : 3
  },
  "6b0c5808d8adac10cabd2fdb3aca9f98e70eafce9a25b8a4505b61a2e0bb8c24" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "supriya9197@gmail.com",
    "name" : "MUNGELKAR SUPRIYA",
    "rollnum" : 160114733324,
    "sent" : true,
    "year" : 4
  },
  "6b787aeed62b38a419d2a2f83f75bfffd9c447c907957c236a93b4bf3459028a" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sandyms1996@gmail.com",
    "name" : "NALLALA SANDEEP KUMAR",
    "rollnum" : 160115733169,
    "sent" : true,
    "year" : 3
  },
  "6baded8d3b2da99f0c2c36fb89ee52216c7a00568b7fab4739421f94beb0d8af" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "mitta.deepika09@gmail.com",
    "name" : "DEEPIKA M",
    "rollnum" : 160116733065,
    "sent" : true,
    "year" : 2
  },
  "6bc9ca7c7ea5758fc81e8290fe2eeb0d66c82e45338c2f041ce61592706360aa" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "harshitha.velpula22@gmail.com",
    "name" : "HARSHITHA PATEL V",
    "rollnum" : 160116733129,
    "sent" : true,
    "year" : 2
  },
  "6d250599f408025e73bebabbcc6ada00f43408606448d20dd0e844c70898c633" : {
    "email" : "navneethrathod00@gmail.com",
    "name" : "NAVNEETH NAIK R",
    "rollnum" : 160116733098,
    "sent" : true,
    "year" : 2
  },
  "6dd4e35810d27183c9d8e248cfd87d10d457a3d7a18891659249042ea5737ceb" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "ME472",
        "group" : "5",
        "title" : "Intellectual Property Rights",
        "year" : "4"
      }
    },
    "email" : "nandinivallabhaneni120996@gmail.com",
    "name" : "VALLABHANENI NANDINI",
    "rollnum" : 160114733012,
    "sent" : true,
    "year" : 4
  },
  "6e085345e821378221efedeee86dba03cb1e8885088444886692d2bc54911b59" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "meghanabilla7112@gmail.com",
    "name" : "MEGHANA REDDY BILLA",
    "rollnum" : 160114733071,
    "sent" : true,
    "year" : 4
  },
  "6ecc4406eb39ec3ad47696179bbba399e16b131aeb052485618e428af9ffa94b" : {
    "email" : "Prashanthkaru4444@gmail.com ",
    "name" : "PRASHANTH KUMAR K",
    "rollnum" : 160116733165,
    "sent" : true,
    "year" : 2
  },
  "6edb32f346fa293efce074f4bec8288963db7b48b8d7e5e62b981a18adfad07a" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "varun9729@gmail.com",
    "name" : "KASHYAP VARUN",
    "rollnum" : 160115733090,
    "sent" : true,
    "year" : 3
  },
  "6f2bdb2e2206e2ad3fc2370c814da61bb397a3b5aed9f74d53645c3d99ed1d1b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "raju123rathod9@gmail.com",
    "name" : "RATHOD RAJU",
    "rollnum" : 160114733165,
    "sent" : true,
    "year" : 4
  },
  "6f47cdf5215004754fab99063c119ece401cc18d2cf7d21566df08b2af56ffae" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "bukkaspandana@gmail.com",
    "name" : "BUKKA SPANDANA",
    "rollnum" : 160114733081,
    "sent" : true,
    "year" : 4
  },
  "6f4db4f7bd30f41f742ef1ad03bd8c6d8c2328c5e242af186e8aec71eb31976e" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "roshini.mandala@gmail.com",
    "name" : "ROSHINI REDDY M",
    "rollnum" : 160116733071,
    "sent" : true,
    "year" : 2
  },
  "6f6d96eeed6519f40daa0ffc1e9ea7cb82c4397359039f905db2644a1a165d43" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "abhishekvenkata.199715@gmail.com",
    "name" : "T V ABHISHEK",
    "rollnum" : 160115733081,
    "sent" : true,
    "year" : 3
  },
  "6fb553886b7cbb0b827c4f58594bdc794410afbfdd785d969c8cceadbca61044" : {
    "email" : "dasari.sheetal@gmail.com",
    "name" : "DASARI SHEETAL",
    "rollnum" : 160114733330,
    "sent" : true,
    "year" : 4
  },
  "6fee37a82fade805d354465cef4710919ad5814fb49d7e996f1b8223739547ff" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "laxman.sheela251@gmail.com",
    "name" : "SHEELA LAXMAN",
    "rollnum" : 160116733327,
    "sent" : true,
    "year" : 2
  },
  "702d85aa4074c076946a7e0c5eb8d234d8c260f66912992611a26d9a544b13a0" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "vishesh0310@gmail.com",
    "name" : "VISHESH REDDY SRIPATI",
    "rollnum" : 160114733120,
    "sent" : true,
    "year" : 4
  },
  "703ea6da5ae394a79cde5e87cee0d7d802df7e93405d536bf887f8839795382a" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "chinthasaisowmith@gmail.com",
    "name" : "CHINTHA SAI SOWMITH REDDY",
    "rollnum" : 160115733111,
    "sent" : true,
    "year" : 3
  },
  "70e5d608061bc2fc2729b5a8b2cb7d892c04e20fc2f8244447128819b3a4028d" : {
    "elective" : {
      "3" : {
        "code" : "CS354",
        "group" : "3",
        "title" : "Simulation and Modeling",
        "year" : "3"
      }
    },
    "email" : "chandrarohith967@gmail.com",
    "name" : "ROHITH CHANDRA CHEEPURI",
    "rollnum" : 160115733046,
    "sent" : true,
    "year" : 3
  },
  "71871121c5420ca08356fc384162e5c11f4ca1fc881367800df86c02ab26a2b6" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "amith.tumu@gmail.com",
    "name" : "AMITH KUMAR TUMU",
    "rollnum" : 160114733029,
    "sent" : true,
    "year" : 4
  },
  "71ec549bfd532ac8124ba0d79f4c58e3df4a36424808e82c6f579176918e5396" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "kasireddymeghana98@gmail.com",
    "name" : "KASIREDDY MEGHANA",
    "rollnum" : 160115733327,
    "sent" : true,
    "year" : 3
  },
  "71f1636b92c7487b60cc34c6631a54fe20667e322305150125866d4dc557dd54" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "stejaditya97@gmail.com",
    "name" : "SANKRANTHI TEJADITYA",
    "rollnum" : 160114733058,
    "sent" : true,
    "year" : 4
  },
  "723cc6cb3b7ffee384e561aca3e337181f174d113aac136b81f2eaff352293a6" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "saipallipat@gmail.com",
    "name" : "PALLIPAT SAI TEJA",
    "rollnum" : 160115733051,
    "sent" : true,
    "year" : 3
  },
  "72a55c0e7a810bc53fcc173cff7e469fc7777e099ac543914827439b9418ae10" : {
    "email" : "farahuzma03@gmail.com",
    "name" : "FARAH UZMA",
    "rollnum" : 160114733127,
    "sent" : true,
    "year" : 4
  },
  "72fbf54b1c8aabddb2acebd30a4bb0012a150b726a949dc4072ce605b0f571e7" : {
    "email" : "",
    "name" : "MOHAMMED ANAS ASHFAQ",
    "rollnum" : 160115733095,
    "sent" : false,
    "year" : 3
  },
  "7342e0d6e60ae6f946ad735fbe26b14349332c3efe35c320e50e147e7ba7b5a7" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "saivikhyath98@gmail.com",
    "name" : "CHELAMELA SAI VIKHYATH",
    "rollnum" : 160115733052,
    "sent" : true,
    "year" : 3
  },
  "73913c7204eec8815e53b0df0303fa1c3949d8a0a6b800f5352d717644d65ecd" : {
    "email" : "akash260199@gmail.com",
    "name" : "AKASH S",
    "rollnum" : 160116733022,
    "sent" : true,
    "year" : 2
  },
  "73cbd1b76323c99b487e66ce4d7c3fd5574039bd1630fad27a3edf8cf0c9586a" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "bsoundarya16@gmail.com",
    "name" : "BANOTHU SOUNDARYA",
    "rollnum" : 160114733318,
    "sent" : true,
    "year" : 4
  },
  "744d7b5c1ffd3b8f03d66d89c366c7a27ede4f15deb8c8eab16988c51b319ad3" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "fastmail060@gmail.com",
    "name" : "DATTA SAI TANUJ V",
    "rollnum" : 160116733086,
    "sent" : true,
    "year" : 2
  },
  "74e4fd9dcb7f817153e69b55aa47bff97634f286b966c6eddb0d66731af35f2f" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "vslkreddy@gmail.com ",
    "name" : "VOGIREDDY SAI LAKSHMI KEERTHANA",
    "rollnum" : 160115733011,
    "sent" : true,
    "year" : 3
  },
  "7552796ecc1d9106dd495808bc64adb59886fb6258d81727894d62269c735768" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "reddyshettyrekha24@gmail.com",
    "name" : "REDDY SHETTY REKHA",
    "rollnum" : 160114733013,
    "sent" : true,
    "year" : 4
  },
  "7557bdc84128bc5afd70caa1c0ae4a1aa224a42aea4ffd7965a1caa0973da293" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "banothusharani123@gmail.com",
    "name" : "USHA RANI B",
    "rollnum" : 160116733020,
    "sent" : true,
    "year" : 2
  },
  "75aeedcaa3437483a961e69906edddc749242c25336942e9979b26ab183f1b50" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "devarakondapranav@gmail.com",
    "name" : "PRANAV D",
    "rollnum" : 160116733042,
    "sent" : true,
    "year" : 2
  },
  "76890f38a558160de91f7d4ff351a57f3fda9a72cea83e77c9de0ff8544e3eff" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "akhilkrishna164@gmail.com",
    "name" : "AKHIL KRISHNA CH",
    "rollnum" : 160116733081,
    "sent" : true,
    "year" : 2
  },
  "7719cb1ba0b398185d3a71b5183aee1b4807609d9b866240a018fdf822a095b3" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "saicharanreddy.0707@gmail.com",
    "name" : "KUMBHAM SAI CHARAN",
    "rollnum" : 160115733165,
    "sent" : true,
    "year" : 3
  },
  "771c12e250a67c0fc74abeffdd4bc90e43bdf297e1b8357954ad655bcd8b5836" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "abhiram2323@gmail.com",
    "name" : "SAI VEERA VENKATA ABHIRAM S",
    "rollnum" : 160116733168,
    "sent" : true,
    "year" : 2
  },
  "776bb657d713aa84036086f5f12b6bef3776ef98e9b588d380a05427047afbc4" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nehithyadav02@gmail.com",
    "name" : "NEHITH YADAV B",
    "rollnum" : 160116733099,
    "sent" : true,
    "year" : 2
  },
  "77c6506fe971fa024cd25a93c80c3852f4f58e0e68aa34197e22bbf57647b1cc" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "bharathdasoju327@gmail.com",
    "name" : "DASOJU BHARATH",
    "rollnum" : 160114733327,
    "sent" : true,
    "year" : 4
  },
  "782275f9705f036f674f675091cfb5884af27330d57938ebfc73a020a4490d0d" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "prabhandha1998 @gmail.com ",
    "name" : "MANKALI PRABHANDHA",
    "rollnum" : 160116733334,
    "sent" : true,
    "year" : 2
  },
  "7848d4628f445f0c4bf1778d564341d7749955b71a0cc0e150809ea78f5088ff" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "satvikkalyan@gmail.com",
    "name" : "SATVIK KALYAN G",
    "rollnum" : 160116733106,
    "sent" : true,
    "year" : 2
  },
  "791ec90712cbea2ba1b08a87ee2fc793c6514c106a0cf859c435d933839f749a" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "amit.sarma995@gmail.com",
    "name" : "AMIT SARMA",
    "rollnum" : 160114733090,
    "sent" : true,
    "year" : 4
  },
  "7932606e25b55a00adb7159f6f35a2574a61bb99fa383b4b9e5ccd92fa1c344a" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "shaik.tajtanveer@hotmail.com",
    "name" : "TAJ TANVEER RAZA",
    "rollnum" : 160114733171,
    "sent" : true,
    "year" : 4
  },
  "79be9779024117e32d53f09e9bf2f89e24b3aa3a449b5a2ece73523498f8eed7" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sankekeerthi4@gmail.com",
    "name" : "SANKE KEERTHI",
    "rollnum" : 160115733004,
    "sent" : true,
    "year" : 3
  },
  "79df103183a560393c630c989f46137fb19211a66f6cdebd943003f602f1a11f" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "chandanaachanta@gmail.com",
    "name" : "ACHANTA CHANDANA",
    "rollnum" : 160114733064,
    "sent" : true,
    "year" : 4
  },
  "7a7faba4b418cb55cf5c82417e82be8edf04120f082bfd0637e04c74c5a92fb3" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "deepakpalavarapu@gmail.com",
    "name" : "PALAVARAPU DEEPAK",
    "rollnum" : 160115733152,
    "sent" : true,
    "year" : 3
  },
  "7b235933ef7882392f82d7e8533ad6ece3fdd3b7cb9d6a6e4c40c9a55884abdd" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "pranay260599@gmail.com",
    "name" : "PRANAY M",
    "rollnum" : 160116733163,
    "sent" : true,
    "year" : 2
  },
  "7b49ed9544dee54b80d7767d4271076b14b5c1c744830f9dcffb748d095f6232" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "reddyvineeth6@gmail.com",
    "name" : "VINEETH REDDY PATI",
    "rollnum" : 160115733060,
    "sent" : true,
    "year" : 3
  },
  "7b53bfb9d13cdd0aa31f99c1513b1eddbd59b04f7a7cefe37b24de96865863b7" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "manojkumarb368@gmail.com",
    "name" : "BADALGAMA MANOJ KUMAR",
    "rollnum" : 160115733093,
    "sent" : true,
    "year" : 3
  },
  "7b6b111eac937983bacae3d93e988605536e520149ee5d86e607d47161be4215" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "komal_kat210@yahoo.co.in",
    "name" : "PURANIK KOMAL",
    "rollnum" : 160115733127,
    "sent" : true,
    "year" : 3
  },
  "7beb16d2a8052ccce221db781519a97ad2950ca2039fb5681e43c07521d93452" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "ganesh.aakula@gmail.com",
    "name" : "GANESH A",
    "rollnum" : 160116733156,
    "sent" : true,
    "year" : 2
  },
  "7c119ae2d9ebfff5f96f3cc5cecb7aefd82e124cfe5af696fa2b8c290d1fdbce" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "vineeth0025@gmail.com",
    "name" : "KANAPARTHI VINEETH RAO",
    "rollnum" : 160115733119,
    "sent" : true,
    "year" : 3
  },
  "7c1a312bed2c172545d3e8a4af8ef1181d2502f54f0ba8843bc053682158c403" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "madhuramesh.bajaj96@gmail.com",
    "name" : "MADHU BAJAJ",
    "rollnum" : 160114733008,
    "sent" : true,
    "year" : 4
  },
  "7c5fb89aaf75a90f7ffbb58c6d2806206a946099ffb84db57bcf16d304431879" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "bandarupallyharika@gmail.com  ",
    "name" : "SAI HARIKA B",
    "rollnum" : 160116733137,
    "sent" : true,
    "year" : 2
  },
  "7c7f87061f584f7f118c3144b3dd1c1bdab36a9cd75a6bb788d545aed6335de4" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "kushali4855@gmail.com",
    "name" : "MUTHYARAGALLA KRISHNAVENI",
    "rollnum" : 160114733069,
    "sent" : true,
    "year" : 3
  },
  "7c8e46c9abd234a23d1e445da7cba0f326ab1d847dde63d5e205effda56c7935" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "srikrishnapradeep99@gmail.com",
    "name" : "SRIKRISHNA PRADEEP J",
    "rollnum" : 160116733173,
    "sent" : true,
    "year" : 2
  },
  "7c8e918e2f41005a45efe43f4b04048cd86bef61d8522294da3db65990e82a90" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "meher.harshini@gmail.com",
    "name" : "BURRU MEHER HARSHINI",
    "rollnum" : 160114733310,
    "sent" : true,
    "year" : 4
  },
  "7cb70d16f9a791e9a4ae87bab4afa035802e284d4160c68cdcdb90f16129dd6c" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "hiranmai17@gmail.com",
    "name" : "N HIRAN MAI",
    "rollnum" : 160114733128,
    "sent" : true,
    "year" : 4
  },
  "7ce2dbfdea1156adb2fccfbac2fc79fa7f9fa822a8724367223f4d90bd1be12c" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "navyagandham@gmail.com",
    "name" : "NAVYA G",
    "rollnum" : 160116733009,
    "sent" : true,
    "year" : 2
  },
  "7dfdd0518c8b77b043f89c95a6db58ee9e4b8e45b49ea2ae22e26a0c80d8924f" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "ramya.bijja@gmail.com",
    "name" : "BIJJA RAMYA",
    "rollnum" : 160115733136,
    "sent" : true,
    "year" : 3
  },
  "7ecb31f8871b93d8ff7a4692ab519098bb4b0e2c540fee3d3d235384a9ad183a" : {
    "email" : "sravani.niharika97@gmail.com",
    "name" : "DUDLA SRAVANI NIHARIKA",
    "rollnum" : 160114733143,
    "sent" : true,
    "year" : 4
  },
  "7f29c8e2b9a55bffca2a3a3b3822ffcd1f4012328f5e35f850d1e6a3f304103b" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "lrahul997@yahoo.in",
    "name" : "LEKKALA RAHUL BABU",
    "rollnum" : 160114733047,
    "sent" : true,
    "year" : 4
  },
  "7f4992bb1c2851ed91f8a717200bb1902e5ea030b1b96637ffcd077822a9e8e0" : {
    "email" : "devnath647@gmail.com",
    "name" : "D DEVENDRANATH",
    "rollnum" : 160115733028,
    "sent" : true,
    "year" : 3
  },
  "7fa269aecaa3e49d24fcb0fd4863724a2f0911d8312fda6973dd08a0d2e29ebd" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "ramesh97015@gmail.com",
    "name" : "RAMESH M",
    "rollnum" : 160116733101,
    "sent" : true,
    "year" : 2
  },
  "80382199f9ad8c6ee2342b8b72297e84af7c6b8517ccadc7c308a24041929399" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "harryharika26@gmail.com",
    "name" : "HARIKA B",
    "rollnum" : 160116733066,
    "sent" : true,
    "year" : 2
  },
  "8050ac86516ade98f7a72162f5ff42432f882ab529694d0f5939473cd27209e3" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "vaishnavipulluri.rs@gmail.com ",
    "name" : "VAISHNAVI P",
    "rollnum" : 160116733150,
    "sent" : true,
    "year" : 2
  },
  "805d9071d93ffd14b7730216fff55caa1e13c2e100eb6182586b29edd5f82235" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "abhinayreddy1278@gmail.com",
    "name" : "KAITHA ABHINAY REDDY",
    "rollnum" : 160114733026,
    "sent" : true,
    "year" : 4
  },
  "80724155d98b66d50d6ce032510aa403b7fad70b427972632914bae1319e1e3a" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "abhishekchaurah.aj@gmail.com",
    "name" : "ABHISHEK JAISWAL C",
    "rollnum" : 160116733094,
    "sent" : true,
    "year" : 2
  },
  "80e6b52c0131bfe8e4e65d2627948699e38cb45786cff2a99009c5c6b115481b" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "pachyuth98@gmail.com ",
    "name" : "POTLAPALLY ACHYUTH",
    "rollnum" : 160115733151,
    "sent" : true,
    "year" : 3
  },
  "83149f643631b06d8cf8fb45ae2c64bdb27df58566b0ab399cba818a050d8ed1" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS484",
        "group" : "5",
        "title" : "Business Intelligence",
        "year" : "4"
      }
    },
    "email" : "nayanapravalika26@gmail.com",
    "name" : "NAYANA PRAVALIKA",
    "rollnum" : 160114733135,
    "sent" : true,
    "year" : 4
  },
  "835bf7c1009760bb67e2e2645cd1d3a1bc974545131e58c02c628100cfb896ec" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "shravyareddyu@gmail.com",
    "name" : "UPPALA SHRAVYA",
    "rollnum" : 160114733077,
    "sent" : true,
    "year" : 3
  },
  "839f07f45a8148bbebe5aa6d2e61ae3310652fa57545f9393cef6da6df64fc93" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "shravanikamatala96@gmail.com",
    "name" : "KAMATALA SHRAVANI",
    "rollnum" : 160115733302,
    "sent" : true,
    "year" : 3
  },
  "844544d3cdc785dc419f2fceeec45edb2b275a384e9a10bdf4f6f3508aba8d29" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "mdaijaaz@outlook.com",
    "name" : "MOHAMMED AIJAAZ",
    "rollnum" : 160114733159,
    "sent" : true,
    "year" : 4
  },
  "84809a4cca35bb04c1c8a48e258d1d88564c09409b3235cb5889558b6708ef90" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "aneesfatima1998@gmail.com",
    "name" : "ANEES FATIMA KHAN",
    "rollnum" : 160116733061,
    "sent" : true,
    "year" : 2
  },
  "84b4925c9bc8194af2a5f96c3a9a424a44d5d5798d97cf2b73ba5e235e5d824c" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "Hardha.hv@gmail.com",
    "name" : "KAVUTURU HARSHA VARDHAN",
    "rollnum" : 160115733156,
    "sent" : true,
    "year" : 3
  },
  "85b41a08ccb349790a5b20be2e49983d69e16d31da1fc6cff3d5beba4e1f0bf3" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "srimouli1998@gmail.com",
    "name" : "CHANDRAMOULI P",
    "rollnum" : 160116733025,
    "sent" : true,
    "year" : 2
  },
  "86600903d174b6d1faa1e3af95e8c441728f7495c92441230cba15cdeae8ca27" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "harichandana281997@gmail.com",
    "name" : "EPURI HARI CHANDANA",
    "rollnum" : 160114733006,
    "sent" : true,
    "year" : 4
  },
  "86687dccbaecd7f0f4f22473b1c60e0725bf7e7cc632fb38f3bda956a3a9d51c" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "uday.chintha95@gmail.com",
    "name" : "CHINTHA UDAYKUMAR",
    "rollnum" : 160114733332,
    "sent" : true,
    "year" : 4
  },
  "869cc3f4026a106d8a799c6fe82882487cd2a28fea246cc5f7fea77930376f8c" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "shashilekkala1@gmail.com",
    "name" : "LEKKALA SHASHIKANTH REDDY",
    "rollnum" : 160115733172,
    "sent" : true,
    "year" : 3
  },
  "86e01514e786d7880e00d44d2ea8d00892d66b1066d2ee99c65eef46d6257646" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "rahul.komaravelly@gmail.com",
    "name" : "KOMARAVELLY RAHUL",
    "rollnum" : 160115733044,
    "sent" : true,
    "year" : 3
  },
  "87476dd894769d24ec9fb8b02959b69b0e5ab7b80033fd83bf0dad0a45f0349b" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "bhanutejabt@gmail.com ",
    "name" : "BHANU TEJA K",
    "rollnum" : 160116733154,
    "sent" : true,
    "year" : 2
  },
  "87590e57754b1a6346e4440d77fe4a81ffe1106935e3ebdb03243aa2d250a712" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "sriakhil.kommu@gmail.com",
    "name" : "KOMMU SRIAKHIL",
    "rollnum" : 160115733174,
    "sent" : true,
    "year" : 3
  },
  "8767c40ebee079be2339c7c61d87188de3f98927f09b616684fbbb8622af9568" : {
    "email" : "",
    "name" : "KONDA NIKHIL AASHRAY REDDY",
    "rollnum" : 160114733161,
    "sent" : false,
    "year" : 3
  },
  "87a7da1cb227db679c30ac7e34bc658ccaa3bb05cd66e0cb1368d322d2f02495" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "deepthi.ravikanti@gmail.com",
    "name" : "RAVIKANTI DEEPTHI",
    "rollnum" : 160114733125,
    "sent" : true,
    "year" : 4
  },
  "87b8ed059f7491dfe3128dac2c7186a8c232771fc0876352d303b2f52ff1b451" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "hamsaraj.tupthi18@gmail.com",
    "name" : "HAMSA RAJ T",
    "rollnum" : 160116733090,
    "sent" : true,
    "year" : 2
  },
  "8873a9065161fdcb74fa5ecd190019e0f717d21a93c86a7ab5341e30f8a82865" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "deepikad6991@gmail.com",
    "name" : "DEEPIKA DAMISETTY",
    "rollnum" : 160114733003,
    "sent" : true,
    "year" : 4
  },
  "88c77d39eb1daedb64b2edc939e4891bb87831d7eb91b6ac226fb2ba45a30387" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "samrat1220@gmail.com",
    "name" : "BINGI SAMRAT",
    "rollnum" : 160115733168,
    "sent" : true,
    "year" : 3
  },
  "88d421f5f2c851d201a37d9a6030876d9f69746d14e0a58e09986096093d25f7" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "ramavathsaikumar3@gmail.com",
    "name" : "RAMAVATH SAI KUMAR",
    "rollnum" : 160115733166,
    "sent" : true,
    "year" : 3
  },
  "89003b32a28b53b19455f3f117e52651bdbd96cf8374866d53ee42667f493263" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "allegala.vishal0211@gmail.com",
    "name" : "ALLEGALA VISHAL YADAV",
    "rollnum" : 160114733308,
    "sent" : true,
    "year" : 4
  },
  "89104f7c46e1476cce6fe45e7de1a1c95a48f6ee3c9cd6b9a08d15a21177cb03" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "madhurig9999@gmail.com",
    "name" : "MADHURI G",
    "rollnum" : 160116733006,
    "sent" : true,
    "year" : 2
  },
  "899478c515b7a0e25f84203a6eb0e5a773684a3b3f388f356eb223831c16a4c1" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "manish.v1997@gmail.com",
    "name" : "VUPPALA MANISH",
    "rollnum" : 160114733100,
    "sent" : true,
    "year" : 4
  },
  "899c4d40e3c1d0cfbad75daba1dff69a2db08a315970fe5a83a536818f7ed828" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "gangamsirichandana@gmail.com",
    "name" : "GANGAM SIRI CHANDANA",
    "rollnum" : 160114733017,
    "sent" : true,
    "year" : 4
  },
  "89cb3f332812e4d2c24c9406c97dfc5c80749a6b2b8f6ac6d19ef0811be9a1fd" : {
    "email" : "swaam999@gmail.com",
    "name" : "ANIL KUMAR K",
    "rollnum" : 160116733083,
    "sent" : true,
    "year" : 2
  },
  "8a945c58ade19e92e9ddeb3fa8519e1dea4ee7d8a8b1b29db96e3d909342c9c2" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "madhukarpateld@gmail.com",
    "name" : "DOMAKONDA MADHUKAR",
    "rollnum" : 160115733159,
    "sent" : true,
    "year" : 3
  },
  "8ba63f8ec8f0d72bb2bc313869d400e90c0693ca85a27df79fef163599ab404f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "kothurushalini99@gmail.com",
    "name" : "SHALINI K",
    "rollnum" : 160116733013,
    "sent" : true,
    "year" : 2
  },
  "8cd32048da496a047221d41dd06dac29a4dc40ecceeda9dd9486d30f6720f9ba" : {
    "email" : "vinaykasam9@gmail.com",
    "name" : "KASAM VINAY",
    "rollnum" : 160114733178,
    "sent" : true,
    "year" : 4
  },
  "8d19d2aa0b4c52c3c72a05016ffb04b90b0ce4630e7d4f2fe75bb5d342fd2baf" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "tarpitha09@gmail.com",
    "name" : "ARPITHA T",
    "rollnum" : 160114733002,
    "sent" : true,
    "year" : 4
  },
  "8d230b7f0a7b32760bb3add5a21e35e02f87b01318a1fd40ab6af8a03c289054" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "jsurajkumar14@gmail.com",
    "name" : "SURAJ KUMAR J",
    "rollnum" : 160116733175,
    "sent" : true,
    "year" : 2
  },
  "8da7046ed621d054980ece846d87896dee285f367351138925cd032d44afeb32" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "shefalishaik@gmail.com",
    "name" : "SHEFALI SHIREEN",
    "rollnum" : 160115733075,
    "sent" : true,
    "year" : 3
  },
  "8db8a82004cea044ba99de333e3ca1ff6069e45d33e0064b8f23a00d526745d1" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "vineethreddy160@gmail.com",
    "name" : "VINEETH REDDY S",
    "rollnum" : 160116733117,
    "sent" : true,
    "year" : 2
  },
  "8e18f8fb62278b9017f7d4dc30c4ca05c540a59272d66f4b15945fbea2b379af" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "praneethch557@gmail.com",
    "name" : "CHINTHAMALLA PRANEETH",
    "rollnum" : 160114733045,
    "sent" : true,
    "year" : 4
  },
  "8e2a3eef27ca759895a0d372054a37815da46da65abf309d6220601383affa25" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "arutladevaksai@gmail.com",
    "name" : "ARUTLA DEVAK SAI",
    "rollnum" : 160115733027,
    "sent" : true,
    "year" : 3
  },
  "8e84193ff4fd34b58ebbf4d11b956a5c0493f8d571068457f4c0a4efee63e14f" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "bhargavmanoj30@gmail.com",
    "name" : "BHAMIDIPATI PAVAN MANOJ BHARGAV",
    "rollnum" : 160114733044,
    "sent" : true,
    "year" : 4
  },
  "8ff79c283fcced6fc6acb4cd80da53982a7e3d925c4b07e54c63b038ff7fb6d8" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "harikahari131@gmail.com",
    "name" : "HARIKA SANTHOSHI P",
    "rollnum" : 160116733126,
    "sent" : true,
    "year" : 2
  },
  "90305f7ca52c040778bd752a0efe6c7eef5642ec99f3a02e534cc7134ecab73d" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "aakanksha172014@gmail.com",
    "name" : "VINNAKOTI AAKANKSHA",
    "rollnum" : 160115733061,
    "sent" : true,
    "year" : 3
  },
  "90aaaa5b53f9f18ab682a91abf330d1bb82a1f1d3c939cf86a62db38c8f8ddac" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "soumith8187@gmail.com",
    "name" : "EDLA SOUMITH REDDY",
    "rollnum" : 160115733113,
    "sent" : true,
    "year" : 3
  },
  "90c313deb5662a64f5a5d1ca3759aa14c9146f42b23ec9627173469fee6eb372" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "srilusrilakshmi13@gmail.com",
    "name" : "SATYASRILAKSHMI V",
    "rollnum" : 160116733074,
    "sent" : true,
    "year" : 2
  },
  "90d2abde20d372bd11ef11401f6e5b7ef031b81e7a1ef33ee54a0188bf9cea36" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "saikumargonuru@gmail.com",
    "name" : "GONURU SAI KUMAR",
    "rollnum" : 160114733302,
    "sent" : true,
    "year" : 4
  },
  "90eaa652f9d2de777fb981c9c0ce11c4343126dc981ee6adb664db22b06b536d" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "immanuel.hemanth@gmail.com",
    "name" : "MOVVA HEMANTH",
    "rollnum" : 160114733037,
    "sent" : true,
    "year" : 4
  },
  "924cc9f6ba64cc114bd3d9d56234d1d370506fe895d49bfede4d8a56bf43848d" : {
    "email" : "",
    "name" : "J ADARSH",
    "rollnum" : 160114733028,
    "sent" : false,
    "year" : 3
  },
  "92622a343e2bab27e27d1fa7f998d3ebcf3e987eb2bd408a56be2b1872f5cd13" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nagamanieslavath@gmail.com",
    "name" : "ESLAVATH NAGALAXMI",
    "rollnum" : 160116733311,
    "sent" : true,
    "year" : 2
  },
  "92c53d0805c35607469028dbd3ad9069fdf846b9206a4b61ced7ae4ddfbf78dd" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "raghavendraraokotha@gmail.com",
    "name" : "KOTHA RAGHAVENDRA RAO",
    "rollnum" : 160115733042,
    "sent" : true,
    "year" : 3
  },
  "93dc0a389094f56c5a3dca645d15bb28086fe9c0adea930f961bb93114f0be93" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "manish.chinnu1996@gmail.com",
    "name" : "MORAMPUDI MANISH CHANDRA",
    "rollnum" : 160116733322,
    "sent" : true,
    "year" : 2
  },
  "948129c73e41202ac0f5eb8f31adfdd37e260842ae1884986626b5ba45c08b19" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nikhil.garepalli@gmail.com",
    "name" : "GAREPALLI NIKHIL KUMAR",
    "rollnum" : 160116733186,
    "sent" : true,
    "year" : 2
  },
  "94df7bba3c381c50da33bd2cd4914a9ccf1ac494129de6a85dcff020f3066b4c" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "jsharavani@gmail.com",
    "name" : "JANAGAMA SHRAVANI",
    "rollnum" : 160115733317,
    "sent" : true,
    "year" : 3
  },
  "9533ee3a6ce1b797f2342177cbad16c01127a8eb208d432cdfa581527f1c908a" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "chiluka.saikrishna16@gmail.com",
    "name" : "SAI KRISHNA CH",
    "rollnum" : 160116733051,
    "sent" : true,
    "year" : 2
  },
  "956dfe4f5abe06e270b121f2808ecc7448011496277d89e8b7179898e24db555" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "shree.avanthika9@gmail.com",
    "name" : "D AVANTHIKA SHREE",
    "rollnum" : 160115733065,
    "sent" : true,
    "year" : 3
  },
  "95df16d90d50289a44cf1e3bffdaaf3fedefea7b6697d7a4ef3878f56a1b3d42" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nikith97@gmail.com",
    "name" : "NIKITH R",
    "rollnum" : 160116733038,
    "sent" : true,
    "year" : 2
  },
  "962c96f3363f0d66599450231b5dfbf288d15c37e27ce5e395467ebe99872c67" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "saianish47@icloud.com",
    "name" : "CHINTHALAPUDI SAI ANISH",
    "rollnum" : 160115733047,
    "sent" : true,
    "year" : 3
  },
  "96ef254597b791aa6d9a1e38290485e2214719c6164bda4162b31da88c07b356" : {
    "elective" : {
      "4" : {
        "code" : "CS475",
        "group" : "4",
        "title" : "Human Machine Interaction",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "bhagee1596@gmail.com",
    "name" : "PALETI BHAGEERADH",
    "rollnum" : 160114733031,
    "sent" : true,
    "year" : 4
  },
  "970d7aa2c2ffed24d52506d9d8058ec10f5244a2d7be9d5b7a18328f2f088496" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "asranaseem98@gmail.com",
    "name" : "ASRA NASEEM",
    "rollnum" : 160115733002,
    "sent" : true,
    "year" : 3
  },
  "971e7e1e2f239467f7568cbc01744b591ab93f94a2dcd0e7d33cec7a0066fe8f" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "greeshmareddygangula@gmail.com",
    "name" : "G GREESHMA",
    "rollnum" : 160114733005,
    "sent" : true,
    "year" : 4
  },
  "97ad54bc81f39daf3df47995077b4e31270aa07376e55c4e19f144b86bb8589e" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "rddharipriya@gmail.com",
    "name" : "HARIPRIYA R",
    "rollnum" : 160116733128,
    "sent" : true,
    "year" : 2
  },
  "97d3036ca0e3fc1bcee07f45751b253bf0fc650f5c1a756a12a3117bf7143c1a" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "monica.srkp@gmail.com",
    "name" : "K MONICA",
    "rollnum" : 160115733006,
    "sent" : true,
    "year" : 3
  },
  "97f8297e6a9c355987660cf9dcc676bb09aee3a952dbdccde3d12a175743e2b3" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "neelaala.harikrishna@gmail.com",
    "name" : "NEELAALA HARIKRISHNA",
    "rollnum" : 160114733331,
    "sent" : true,
    "year" : 4
  },
  "982a55beb650547ab2353e9baab6c84045a22bbe0e4860bc3e39a386808e6b15" : {
    "email" : "sainathreddy500@gmail.com",
    "name" : "SAINATH REDDY",
    "rollnum" : 160114733168,
    "sent" : true,
    "year" : 4
  },
  "98c27242e49078cdfe0ef494e4aeb9e521f95bd2e1c395ae047338c1dc90b6f4" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "siddu.anirudh@gmail.com",
    "name" : "SIDDHARTHA A",
    "rollnum" : 160116733054,
    "sent" : true,
    "year" : 2
  },
  "997a0fab6924c48fbda7e2e77583ff9d7a5b59b0ce62bcd741f6d7e4546b99df" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "vangaripallavi27@gmail.com",
    "name" : "VANGARI PALLAVI",
    "rollnum" : 160115733133,
    "sent" : true,
    "year" : 3
  },
  "998c568b8eedb7eb76ebdf457f865ec9147dd5d6a03442017105efc9abdade92" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "nithi5438@gmail.com",
    "name" : "GURRAM NITHIN",
    "rollnum" : 160115733318,
    "sent" : true,
    "year" : 3
  },
  "99a0341674ac5dbda681ef26a53ce9397c8c46c01f63caee88ac38129948a32f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "jacobchubby@gmail.com",
    "name" : "JACOB ABHISHEK T",
    "rollnum" : 160116733093,
    "sent" : true,
    "year" : 2
  },
  "99de2184bf187db07f73542ed6f89cc21a2f067dfba19a98489b13f1fe6cb6a4" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "ashvikguptamylarapu@gmail.com",
    "name" : "MYLARAPU ASHVIK",
    "rollnum" : 160115733086,
    "sent" : true,
    "year" : 3
  },
  "9a087a29f71843ac9602768229ee6a246c7fd67b0ab0b6386ffd6ee6313ba56f" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "vineela.aari@gmail.com",
    "name" : "A VINEELA",
    "rollnum" : 160114733146,
    "sent" : true,
    "year" : 4
  },
  "9a169b577839ac64c223f7589da98f98fe4219e343a0785665a0ad98f995d187" : {
    "email" : "",
    "name" : "K BHARATH",
    "rollnum" : 160115733025,
    "sent" : false,
    "year" : 3
  },
  "9aad0d64765e9c8ce334e445f04c41c5ca7d05ec990c605e689ac597c77d2a7e" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "ehtesham577@gmail.com",
    "name" : "MOHAMMED EHTESHAMUDDIN",
    "rollnum" : 160116733317,
    "sent" : true,
    "year" : 2
  },
  "9ac86ac32002582f8707a5c8268da58eeb7e28f4e9dddb1ad8def2129df15fcb" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "nikki192398@gmail.com",
    "name" : "NIKITHA KRISHNA VEMULAPALLI",
    "rollnum" : 160115733073,
    "sent" : true,
    "year" : 3
  },
  "9b40b38cbd8372c624881a9164cfc6a7ce59df4902ac3f31fcf6b547f369fe31" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS481",
        "group" : "5",
        "title" : "Pattern Recognition",
        "year" : "4"
      }
    },
    "email" : "kajitsai7@gmail.com",
    "name" : "K AJIT SAI",
    "rollnum" : 160114733086,
    "sent" : true,
    "year" : 4
  },
  "9b437e215b1145de7411d1f6122d1c0c8af60b18eb430871ff6b36fd8d897e39" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "m.shivcheten23@gmail.com",
    "name" : "MEKALA SHIVCHETAN",
    "rollnum" : 160114733114,
    "sent" : true,
    "year" : 4
  },
  "9b6c62cd3696897bc035755023fcd6ee5e1c02f7dd26f3aa8d30a64b207a0ca5" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "akbar6127@gmail.com",
    "name" : "MOHAMMED SYED AKBAR HASHMI",
    "rollnum" : 160116733096,
    "sent" : true,
    "year" : 2
  },
  "9b7eabdf146c0ee4779945a92182cd782adc40ba994f8fe26c38498ce0e12e04" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "dhulipalasreevani@gmail.com",
    "name" : "SREEVANI D",
    "rollnum" : 160116733145,
    "sent" : true,
    "year" : 2
  },
  "9b9425a75f53a33a335779a35dbf70147068369f15670c84e85ae87e7bcd3f7e" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sarfraz1997@yahoo.in",
    "name" : "MOHAMMED SARFRAZ KHAN PATTAN",
    "rollnum" : 160115733096,
    "sent" : true,
    "year" : 3
  },
  "9bddd4ec220f7db3938e49d5c36ec22213d9d9bab6bc19f143f5c5c3700a4c56" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "vamsivutukuri1997@gmail.com",
    "name" : "VENKATA VAMSHI KRISHNA",
    "rollnum" : 160114733119,
    "sent" : true,
    "year" : 4
  },
  "9c1a9bf75037683196bd96823be575a14155f9b79c53832d998fe905c7689dac" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "soundarya.tekkalakota1@gmail.com",
    "name" : "SOUNDARYA TEKKALAKOTA",
    "rollnum" : 160114733019,
    "sent" : true,
    "year" : 4
  },
  "9ca2a4d9e4f42a65e2e06b05ac9663df75e552d08202d47df4fb9fedc0b8eb4b" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sacheth.reddy@gmail.com",
    "name" : "MAMIDI SACHETH REDDY",
    "rollnum" : 160115733163,
    "sent" : true,
    "year" : 2
  },
  "9d583beee09acad367b706a5e5ef985d4efaba555cdf4849bf68f2bb61a05db4" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "velpulasravika@gmail.com",
    "name" : "VELPULA SRAVIKA",
    "rollnum" : 160114733335,
    "sent" : true,
    "year" : 4
  },
  "9dd10d1691ad76a7186f972a4787523d5e097e6f4bec2798fee6ce714c9ccfc4" : {
    "email" : "vishal.vaitla@gmail.com",
    "name" : "VISHAL V",
    "rollnum" : 160116733118,
    "sent" : true,
    "year" : 2
  },
  "9e86ea44ef91d4c4b90200f28e0e54a50c977736132d0621384122a0b99ff448" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sushanth2panasa@gmail.com",
    "name" : "SUSHANTH KUMAR P",
    "rollnum" : 160116733112,
    "sent" : true,
    "year" : 2
  },
  "9e8aba98aa3bd83cd761e9bfec40f52f227031e7271cfb1b4b2eb96e6b58a706" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "mharsh345@gmail.com",
    "name" : "HARSH M",
    "rollnum" : 160115733182,
    "sent" : true,
    "year" : 3
  },
  "9f1dbb66f6973a1c62c92adc7df85ce9763d37fb014d47ff7a0de3acea25b16d" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "sahithiarkiti18@gmail.com",
    "name" : "ARKIT SAHITHI REDDY",
    "rollnum" : 160115733138,
    "sent" : true,
    "year" : 3
  },
  "9f80bc7aaa25185732438464f00d156650de71ee3576b93e3a83572ba6c8bb04" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "amgothraju111@gmail.com",
    "name" : "AMGOTH RAJU",
    "rollnum" : 160116733321,
    "sent" : true,
    "year" : 2
  },
  "9f87521d51d47bddf31ae8d188a75f76e40ac92f187787836d1b21e837798156" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sadhumanishkumar@gmail.com",
    "name" : "S MANISH KUMAR",
    "rollnum" : 160115733092,
    "sent" : true,
    "year" : 3
  },
  "a148ac5d3bc47a07e871b3c9f2f0d33c8df83b10e133b535cc58520878c710b8" : {
    "elective" : {
      "3" : {
        "code" : "CS355",
        "group" : "3",
        "title" : "Realtime Systems",
        "year" : "3"
      }
    },
    "email" : "prasannadanappagari@gmail.com",
    "name" : "D PRASANNA",
    "rollnum" : 160115733308,
    "sent" : true,
    "year" : 3
  },
  "a199b3a45c04b9464b2e2a14b727f5ddd55082458a4931e27b2b04c72c187e80" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sravyabutharaju123@gmail.com",
    "name" : "BUTHARAJU SRAVYA",
    "rollnum" : 160115733076,
    "sent" : true,
    "year" : 3
  },
  "a2df657fc6bfc07e21223bd7ac1f0f4367db70b9d223b5cd7bde4be55e45a8d8" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "nikhilpateljella@gmail.com",
    "name" : "JELLA NIKHIL BABU",
    "rollnum" : 160115733160,
    "sent" : true,
    "year" : 3
  },
  "a2eca3a3be7de1c7c0a3983266fdd7e2872e55830d400a602b87b7c164ad9427" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "deekshithrao1999@gmail.com",
    "name" : "DEEKSHITH RAO V",
    "rollnum" : 160116733087,
    "sent" : true,
    "year" : 2
  },
  "a3a70ce0f3fe53987fc328be6ee4817aebbbd9553c013e204d1ba4a9140e7fd4" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "hemanthteja123@gmail.com",
    "name" : "HEMANTH SURYA THEJA CH",
    "rollnum" : 160114733311,
    "sent" : true,
    "year" : 3
  },
  "a3cce1a486b94e74a2b006f9835637d6de5c1f1848acfbe7c9e923c98ee7052c" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "sriramojinikhitha000@gmail.com",
    "name" : "SRIRAMOJI NIKHITHA",
    "rollnum" : 160114733134,
    "sent" : true,
    "year" : 4
  },
  "a4225d02a6b86d939fa60b7451d877d993e572b8139e323edd137b43c5c793c6" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "btamiz3110@gmail.com",
    "name" : "TAMIZ B",
    "rollnum" : 160116733177,
    "sent" : true,
    "year" : 2
  },
  "a455f0269510ec3679e3b346c22a6b83c2387054a6d76817d72eb08c2cb0fa5c" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "sriramduta@gmail.com",
    "name" : "DUTA SRIRAMULU",
    "rollnum" : 160115733320,
    "sent" : true,
    "year" : 3
  },
  "a4987ef253c510eb07b9843dbb771f6f36c7e66175e4991f99de4fe21d04763e" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "gouthamgundapu36@gmail.com",
    "name" : "GUNDAPU GOUTHAM",
    "rollnum" : 160114733035,
    "sent" : true,
    "year" : 4
  },
  "a524be5921ce9b1fb363cf540bae77dc45cfbc124961e269f58b8924b615dcff" : {
    "email" : "miriyalaravi.123@gmail.com",
    "name" : "RAVI THEJA M",
    "rollnum" : 160116733102,
    "sent" : true,
    "year" : 2
  },
  "a5399efbd0a8bad08879ecbac46bdcf21d00d7bc832e55901c48dab07deb1a81" : {
    "email" : "",
    "name" : "SAIF ABDUL SUBOOR",
    "rollnum" : 160115733334,
    "sent" : false,
    "year" : 3
  },
  "a576d7cc1ac178eb35cf5f55e566683defa287979a02748094729e05426b2360" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "sujithmsjs@gmail.com",
    "name" : "SUJITH MANCHALA",
    "rollnum" : 160114733336,
    "sent" : true,
    "year" : 4
  },
  "a58d71413b0fa9ac9885e9b02e0dcc91eeb1b8740d5072774e3fdd378b98caaf" : {
    "email" : "eshwarchaithanya11@gmail.com",
    "name" : "ESHWAR CHAITANYA G",
    "rollnum" : 160116733089,
    "sent" : true,
    "year" : 2
  },
  "a6413f85cfd227054af33e29de0aad48984c26d8a6966868f26b8d44adbb948e" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "bandarimanoj22@gmail.com",
    "name" : "BANDARI MANOJ KUMAR",
    "rollnum" : 160114733156,
    "sent" : true,
    "year" : 4
  },
  "a64e66eec6c79583cbb379e46009f9ed31091343af5153cf440854bc7653b9a7" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nayazsyed.739@gmail.com",
    "name" : "SYED NAYAZ MOINUDDIN",
    "rollnum" : 160116733059,
    "sent" : true,
    "year" : 2
  },
  "a65d136713d433af33a42717a7620934e3214864f57ca7eddc69b3f865ddc8d4" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sharathkumardaroor@gmail.com",
    "name" : "DAROOR SHARATH KUMAR",
    "rollnum" : 160116733316,
    "sent" : true,
    "year" : 2
  },
  "a77a2bf92cd3009999eac1aff7bd311ab26f857b5c4fbf48dbf8cd2f4c6af7fd" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "aretwinkle14@gmail.com",
    "name" : "AISHWARYA ARE",
    "rollnum" : 160114733062,
    "sent" : true,
    "year" : 4
  },
  "a79dc9fdd0200a4568a85d4fb0fd96177f322a6a923d2880abc2f95051cffc2e" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "minidevayani1999@gmail.com",
    "name" : "MINI DEVAYANI D",
    "rollnum" : 160116733132,
    "sent" : true,
    "year" : 2
  },
  "a7ac39f4b842d543f7accd43b65eca4d00e05a604bac43b7125452f11971b359" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "devikamadupu@gmail.com",
    "name" : "DEVIKA M",
    "rollnum" : 160116733125,
    "sent" : true,
    "year" : 2
  },
  "a9474dc9457eed0ad3cd449c2ed6e053f3f12319d7355903686574aebe9685ec" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "krishnavenirokala@gmail.com",
    "name" : "KRISHNAVENI R",
    "rollnum" : 160116733004,
    "sent" : true,
    "year" : 2
  },
  "a94f69bd3c21313e7a31ae656028b304587714317d62e3acd08306b2ffcd52b5" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "soniyagandamalla33@gmail.com",
    "name" : "GANDAMALLA SONIYA",
    "rollnum" : 160114733018,
    "sent" : true,
    "year" : 4
  },
  "a9bcf6163328ad02443a0da59cc8179ae58eda796afe85a8aca462ad2d2a9f1e" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "yashwantherrabelli@gmail.com",
    "name" : "YASHWANTH E",
    "rollnum" : 160116733179,
    "sent" : true,
    "year" : 2
  },
  "a9c2416ec9648f7efff6296bc6c71e5ef57f387fb56df02d95ae641d82dbdb31" : {
    "email" : "saisreerampopuri@gmail.com",
    "name" : "SAI SREERAM POPURI",
    "rollnum" : 160114733052,
    "sent" : true,
    "year" : 4
  },
  "aa8dfab6bd6903f79eaf9c3b331dd69003f17f4739aa71f0326f9e08577b514b" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "sumeetyedula@gmail.com",
    "name" : "YEDULA SUMEET",
    "rollnum" : 160114733057,
    "sent" : true,
    "year" : 4
  },
  "aaefd4ff5307cdfd67056e0ee2afb9a5521e3c0684930dd10a47bc0f83a6ac4b" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "panguluribhavya@gmail.com",
    "name" : "BHAVYA P",
    "rollnum" : 160116733063,
    "sent" : true,
    "year" : 2
  },
  "ab86c297be4a239ba249c4f571cdb2a6b14609aa08ff3f82e59a2cd117a8c4de" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "saidheerajnvs29@gmail.com",
    "name" : "NARAYANABHATLA VENKATA SAI DHEERAJ",
    "rollnum" : 160115733117,
    "sent" : true,
    "year" : 3
  },
  "ab995d17d35885120ba5a2d6b6292f54ce606b91a32b719f8ae512997643720b" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "27vignesh30@gmail.com",
    "name" : "KYATHAM VISHNUVARDHAN",
    "rollnum" : 160115733179,
    "sent" : true,
    "year" : 3
  },
  "ac4dcc77bea9d7af0b7dc8e35b684b304e38e1e1311843eaa673400b5baa5285" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "chinthakuntlalikhithareddy@gmail.com",
    "name" : "LIKHITHA CH",
    "rollnum" : 160116733068,
    "sent" : true,
    "year" : 2
  },
  "aced89886bc51d1f4400e57aa288dda7d17ca3e53be153ee5544593f35c8927c" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nayakamshivani@gmail.com ",
    "name" : "SHIVANI N",
    "rollnum" : 160116733140,
    "sent" : true,
    "year" : 2
  },
  "ada1e8d6180c6951c78d1ca453920e9aa7a15439931860353a20dcfc5473fad5" : {
    "email" : "hmesineni@gmail.com",
    "name" : "HARSHITH M",
    "rollnum" : 160116733031,
    "sent" : true,
    "year" : 2
  },
  "adb82399efd08981cc4d174c17f003308a20f85feb7fe3e97952b79f4c7f09bb" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nagaom92@gmail.com",
    "name" : "NAGA OMKAR P",
    "rollnum" : 160116733097,
    "sent" : true,
    "year" : 2
  },
  "adefbfd7e1c7efa4cf1e062b5fc51db64fea2673c00d3a169062cb2dc067c68f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "avinashlanka10@gmail.com",
    "name" : "AVINASH L",
    "rollnum" : 160116733153,
    "sent" : true,
    "year" : 2
  },
  "ae2cbeca78412d63a0414204b0bfacf0b4724dc0b5e040c39c3f39b9e91a9da3" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "Swasthik305@gmail.com     ",
    "name" : "NITTURI SWASTHIK",
    "rollnum" : 160116733332,
    "sent" : true,
    "year" : 2
  },
  "ae5c1bded0d12ccbd8b6ac7ead22678549fc2bc39488c6bd754076d1bc9a30ca" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "anilkrishna11@gmail.com",
    "name" : "CHINTAPALLI ANIL KRISHNA",
    "rollnum" : 160115733084,
    "sent" : true,
    "year" : 3
  },
  "aeb10e69348642082ff2a89d257f5624d2f231ca9ebd8b314039bc2f763fa9ea" : {
    "email" : "hakujunnu@gmail.com",
    "name" : "SHAIK JUNAID MOHAMMAD",
    "rollnum" : 160116733053,
    "sent" : true,
    "year" : 2
  },
  "aecc773afe1e44df1cdb450f1ade725fcba793b5f4e401e0351cd4149c94333f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "reddyvinuthna.m@gmail.com",
    "name" : "VINUTHNA REDDY M",
    "rollnum" : 160116733077,
    "sent" : true,
    "year" : 2
  },
  "af01b260a11d8b7407c00b4f0948085db8443552ace6c870a6c0962dfcae6db5" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "npraneeth18@gmail.com  ",
    "name" : "PRANEETH N",
    "rollnum" : 160116733164,
    "sent" : true,
    "year" : 2
  },
  "af0e3fe398b2bccf1bdb597632c87c7b800cee1c58d023e1b89641da0bf01b7e" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "nidhipurohith@gmail.com",
    "name" : "NIDHI PUROHITH",
    "rollnum" : 160114733132,
    "sent" : true,
    "year" : 4
  },
  "af39aca86524dd826d85d4fec9fdf496fe245b7b5b1fe00805c2f5444c11175a" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "lohithgodati97@gmail.com",
    "name" : "G LOHITH NURANI",
    "rollnum" : 160116733183,
    "sent" : true,
    "year" : 2
  },
  "afe014a6a837dc430c79bc593fc84d0b55f38585e873b79bdb7a9544ea7670a1" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "aallasamhita@gmail.com",
    "name" : "SAMHITA ALLA",
    "rollnum" : 160115733013,
    "sent" : true,
    "year" : 3
  },
  "b036b0e42cb460031f94cd85b5e272ac629a3be62678bcf4a46c10c4262d2d8c" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "ankitha7698@gmail.com",
    "name" : "P ANKITHA",
    "rollnum" : 160115733122,
    "sent" : true,
    "year" : 3
  },
  "b0adec8efee52f998bdab693a54dea636697c4f96087fc72ae9c87b9ccb9c378" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "divyakonduru12@gmail.com",
    "name" : "KONDURU DIVYA",
    "rollnum" : 160114733004,
    "sent" : true,
    "year" : 4
  },
  "b0e45b6a49ac93335d3a318c41008e279a071d985a56d8e065b646014f7f3048" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "venkateshellaboina@gmail.com",
    "name" : "ELLABOINA VENKATESH",
    "rollnum" : 160115733118,
    "sent" : true,
    "year" : 3
  },
  "b1123c92bd1004de5d31df57031912b076b7e0cc87e1167690599bd5046bb2e9" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "adityakuppa27@gmail.com",
    "name" : "KUPPA VENKATA ADITYA",
    "rollnum" : 160115733116,
    "sent" : true,
    "year" : 3
  },
  "b13e1954f8e44825a7e80a5c41b3f6b6805d600a52d6ca4b1277bd1e2e745e0b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "vamshika.guthula@gmail.com",
    "name" : "VAMSHIKA GUTHULA",
    "rollnum" : 160114733024,
    "sent" : true,
    "year" : 4
  },
  "b16f8f869221f3a561ecc7bac7ec3d92937072e02a97e28898b35ce629654482" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "srujithraoambati007@gmail.com",
    "name" : "SRUJITH RAO A",
    "rollnum" : 160116733110,
    "sent" : true,
    "year" : 2
  },
  "b178147d68016d4bf611130ac82e2afe7fb525647d45ebadbbbd7478edbd0f48" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "srinivasjatoth048@gmail.com",
    "name" : "JATOTH SRINIVAS",
    "rollnum" : 160114733333,
    "sent" : true,
    "year" : 4
  },
  "b1819d714c62c7d5612ebe88e4fcf6d514edc89ce4616e6b0c9f6f361a16a828" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "touseefahmed151996@gmail.com",
    "name" : "TOUSEEF AHMED",
    "rollnum" : 160114733175,
    "sent" : true,
    "year" : 4
  },
  "b1beb4de45e48ec1ef4be393e423beb418c7ca997f67a6c3024236c57876def2" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "vineelchamakuri99@gmail.com",
    "name" : "VINEEL CH",
    "rollnum" : 160116733115,
    "sent" : true,
    "year" : 2
  },
  "b222fc5926dc42793b987db5034d1ab758f710540ce49c3ebf342280867c28fb" : {
    "email" : "",
    "name" : "GOLI LOKESH",
    "rollnum" : 160114733098,
    "sent" : false,
    "year" : "4"
  },
  "b24a4569fe2e2da50f05ffb2e849e70ebdc71dd72c610b275b4a5f4988b957b6" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "yeshwanthraobompally@gmail.com ",
    "name" : "YESHWANTH RAO B",
    "rollnum" : 160116733180,
    "sent" : true,
    "year" : 2
  },
  "b48892a9ffc32e67216f7a7dcf748c0014a323981b336d1494deefb0fa9cf0b5" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "sai99488@gmail.com",
    "name" : "GUMMADILA SAI KRISHNA",
    "rollnum" : 160115733303,
    "sent" : true,
    "year" : 3
  },
  "b49d9e5b5b1b4e936e8f23b4c301080ba361ca97c6d2d10d7dad3e051f1f42c0" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "kranthikumarisepuri@gmail.com",
    "name" : "SEPURI KRANTHI KUMARI",
    "rollnum" : 160114733007,
    "sent" : true,
    "year" : 4
  },
  "b519581c067cfb2f10450fc1a5405db6864239921d088473bca195c61bd8ef34" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "rahulgarlapati14@gmail.com",
    "name" : "VENKATA RAHUL G",
    "rollnum" : 160116733178,
    "sent" : true,
    "year" : 2
  },
  "b519f8ce60ff7631143f6830a942084dbc1786676c898ed89b75cfe3fb9f4995" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "akhilachowdary98@gmail.com",
    "name" : "SIRIKONDA AKHILA",
    "rollnum" : 160115733001,
    "sent" : true,
    "year" : 3
  },
  "b58c8e24b59e8651859560903e365d224316b4b30762754fc1c36cb51245539b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "sushmithajogula96@gmail.com",
    "name" : "SUSHMITHA JOGULA",
    "rollnum" : 160114733022,
    "sent" : true,
    "year" : 4
  },
  "b5c4e9d09e60009e2369b4fef7ab19b8796f4397ca71c79012fa5ef820dd8a26" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "sujayreddy183@gmail.com",
    "name" : "NAAREDDY SUJAY REDDY",
    "rollnum" : 160114733174,
    "sent" : true,
    "year" : 4
  },
  "b61762ff2e024239faf89be6043bb5ffc52d4beea165dc18a30d74405fe8e2d2" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "harshrathi71@gmail.com",
    "name" : "HARSH RATHI",
    "rollnum" : 160115733030,
    "sent" : true,
    "year" : 3
  },
  "b68103211176894503c9676178e26cc798487f9235bdf61cc5e7ab747fb3932f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "kasaribadavenkatsai334@gmail.com",
    "name" : "VENKATSAI K",
    "rollnum" : 160116733114,
    "sent" : true,
    "year" : 2
  },
  "b684873c84cbc9320da72788b690b19071e88e8739f8fb678c16224cfbbdd1c8" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "preethisunny490@gmail.com",
    "name" : "PREETHI K",
    "rollnum" : 160116733011,
    "sent" : true,
    "year" : 2
  },
  "b68f6b01e73249a8c42e74df794e7cc5d13d6e5f3b8abcca0c277376dbab7891" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "Sangeeth.ragi@gmail.com  ",
    "name" : "SANGEETH R",
    "rollnum" : 160116733170,
    "sent" : true,
    "year" : 2
  },
  "b6ca364bdec3aef311ce54201f243da456135023f2645d1baa07ec511fe1c8ca" : {
    "email" : "spandanak04@gmail.com",
    "name" : "SPANDANA K",
    "rollnum" : 160116733017,
    "sent" : true,
    "year" : 2
  },
  "b7231460f1eae4ff3b694207a6d272d21bfa790eca1570c8dc0f59f6c93540bb" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "gudasuchitrareddy@gmail.com",
    "name" : "GUDA SUCHITRA REDDY",
    "rollnum" : 160114733020,
    "sent" : true,
    "year" : 4
  },
  "b763c0703168e87272419eb7dd428d64d26862bad2b871a0513f6c8418300050" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "chandgopi724@gmail.com",
    "name" : "PENDYALA GOPI CHAND",
    "rollnum" : 160114733152,
    "sent" : true,
    "year" : 4
  },
  "b87d9fea062268b85a46fd06b2e49279b673c6f14a886a24fa082e63ff420ff1" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "srinath.tangalapally@gmail.com",
    "name" : "TANGALLAPALLY SRINATH",
    "rollnum" : 160115733056,
    "sent" : true,
    "year" : 3
  },
  "b898b1dd5b5defb86c7a793245d34f55248ccb5b18ecfb13a0f2d4f7aca7eb1b" : {
    "email" : "msuryacharan@gmail.com",
    "name" : "MALOTH SURYA CHARAN",
    "rollnum" : 160115733114,
    "sent" : true,
    "year" : 3
  },
  "b999cc11cb779567400d77ffadf238e4ce2f55774f4fd29fc0f62dc862031c8d" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "aashishreddy5555@gmail.com",
    "name" : "VUNDHYALA AASHISH REDDY",
    "rollnum" : 160115733150,
    "sent" : true,
    "year" : 3
  },
  "b99b6e500657a820fabec7c4b9e303719d9800e978a22606ba1e4f06bf337a6c" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "vihar.kurama@gmail.com",
    "name" : "KURAMA VIHAR",
    "rollnum" : 160115733178,
    "sent" : true,
    "year" : 3
  },
  "ba8b4c2983de6545b6cbc9b7d0c3a3d7666fc416dee3d9774326f978d521af46" : {
    "email" : "420randykumar@gmail.com",
    "name" : "SAI AJAY KUMAR V",
    "rollnum" : 160116733047,
    "sent" : true,
    "year" : 2
  },
  "baa7d6d683c13f7a459760ce705bccc6c58e4d3db74dce46b36563a97c45b382" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "v.anjali456@gmail.com",
    "name" : "VENNU MADHURI",
    "rollnum" : 160115733130,
    "sent" : true,
    "year" : 3
  },
  "babe6d1371e41f4a0bc8c19351eaf118f01aded05cbd9cae24a213cb4d762cb2" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "kn112796@yahoo.com",
    "name" : "KANDI NYMISHA",
    "rollnum" : 160114733072,
    "sent" : true,
    "year" : 4
  },
  "baef4025ebf56e70885608c398b93e608d9b1b2fd0a240f91edff1f9605729b9" : {
    "email" : "ishaan.1117@gmail.com",
    "name" : "CHANDANALA NISHANTH",
    "rollnum" : 160116733304,
    "sent" : true,
    "year" : 2
  },
  "bbb290a14cf56ea2e4adbad79f88f05839ba2c77fb336116467b2d5ee524aff7" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sukkaprashanth04@gmail.com",
    "name" : "SUKKA PRASHANTH",
    "rollnum" : 160116733302,
    "sent" : true,
    "year" : 2
  },
  "bc0c161087ed2057eca2240b3762873c2e44608126e7b523496a4bb7659810d3" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "eslavathsriteja99@gmail.com",
    "name" : "SRI TEJA E",
    "rollnum" : 160116733056,
    "sent" : true,
    "year" : 2
  },
  "bc18fde753ff854a5641cf2ae4bdc21a93f8f0f7249129222abb3a010f689456" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "loka.adithireddy@gmail.com",
    "name" : "ADITHI LOKA",
    "rollnum" : 160114733061,
    "sent" : true,
    "year" : 4
  },
  "bc708b73315fbce68fed12b09c1a2c74efddf90288d8a70e1b743b8ba4629f0c" : {
    "elective" : {
      "3" : {
        "code" : "CS354",
        "group" : "3",
        "title" : "Simulation and Modeling",
        "year" : "3"
      }
    },
    "email" : "bhargav.g33@gmail.com",
    "name" : "G BHARGAV",
    "rollnum" : 160115733026,
    "sent" : true,
    "year" : 3
  },
  "bce1d0d2b4f1e497d7f7280deaa95ca3e2476f9ff1c8037307df60c9042f0042" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "keerthi.ampili@gmail.com",
    "name" : "AMPILI KEERTHI",
    "rollnum" : 160114733068,
    "sent" : true,
    "year" : 4
  },
  "bd55b96d34198b62e0f682fec424a41685387d7dd68b8c644830199868f89f27" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "cherrygoli@gmail.com",
    "name" : "JAAHNAVI GOLI",
    "rollnum" : 160116733181,
    "sent" : true,
    "year" : 2
  },
  "bd9a36bc6ebe8593a10fff4526afdf2c30920c11fd4ff2fe3840d06604c2350c" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "jithinnani290@gmail.com",
    "name" : "MANDHAPALLI JITHIN",
    "rollnum" : 160114733039,
    "sent" : true,
    "year" : 4
  },
  "bdcef6bc248ab97c3a406dadc0a97b67a074aa777f4aaa76b4f3301181f6ca84" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "saichander60@gmail.com",
    "name" : "A SAI CHANDER",
    "rollnum" : 160116733314,
    "sent" : true,
    "year" : 2
  },
  "be25f06dfbe8d2776fddc5f79a1d823f2fb45b00ab30fefa16dc6828d652c7bc" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "agumamidinithish@gmail.com ",
    "name" : "NITHISH REDDY A",
    "rollnum" : 160116733161,
    "sent" : true,
    "year" : 2
  },
  "be38de1de5ca32080ec92f77d4c90a8fd6e5fcc2789d13eb9c2a686f94937fc9" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "rajumora8@gmail.com",
    "name" : "MORA RAJU",
    "rollnum" : 160114733305,
    "sent" : true,
    "year" : 4
  },
  "beacc01b71324ebbaeb954ae85f1636541aa18cf43daf6286c14a1031bc33255" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "rohithvaddavalli@gmail.com",
    "name" : "ROHITH VADDAVALLI",
    "rollnum" : 160114733050,
    "sent" : true,
    "year" : 4
  },
  "bf2cbe0a737229857ff0ae3f15aac01c62ded8ed990af385070c301ad58d55c6" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "manishram486@gmail.com",
    "name" : "SOMA MANISH RAM GOUD",
    "rollnum" : 160115733034,
    "sent" : true,
    "year" : 3
  },
  "c01e3cade44e9d38abfba4fd0e29e262eeeb3d81e8626a4c3fc627e8bdcc14cf" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "hashmiabrar14@gmail.com",
    "name" : "ABRAR ATHAR HASHMI",
    "rollnum" : 160115733082,
    "sent" : true,
    "year" : 3
  },
  "c0655ffe50566ac979800706ec5d8be0e5305e69813f7bb05f81beec8f4e2a1e" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "mahithakoti98@gmail.com",
    "name" : "KOTI MAHITHA",
    "rollnum" : 160115733333,
    "sent" : true,
    "year" : 3
  },
  "c0b75b30e8f11e2e28bdbce248685449025d9a57fc19af0d3aa6eeaa497f5115" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "vadlamanisubhash1998@gmail.com",
    "name" : "SUBHASH V V S S",
    "rollnum" : 160116733057,
    "sent" : true,
    "year" : 2
  },
  "c13bcae406a25ff340e1d1055992f68f847e5a563d1e12f6e93081f756a13d79" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "dilipbabburi0@gmail.com",
    "name" : "DILEEP B",
    "rollnum" : 160116733155,
    "sent" : true,
    "year" : 2
  },
  "c15349d0fa15557722b943e8b4b5c1afb30aad14fac5a121c66778e2fbb4d638" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "divyakonda2@gmail.com",
    "name" : "KONDA DIVYA",
    "rollnum" : 160115733313,
    "sent" : true,
    "year" : 3
  },
  "c16d62b459d7f560e0049ded4c8cfc312eac3e908fcb9ad6908072ccb6857b02" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "shriyagali11@gmail.com",
    "name" : "G SHRIYA",
    "rollnum" : 160114733078,
    "sent" : true,
    "year" : 4
  },
  "c1d67e85817972b2a9ab72a42b1212df63c0599f6626bd6cdf3e81a210ebbb79" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "gouthamireddygidde@gmail.com",
    "name" : "GIDDE GOUTHAMI REDDY",
    "rollnum" : 160115733305,
    "sent" : true,
    "year" : 3
  },
  "c2722b86e32460e92db237e187f88857f010bfd776bdb466a79cdf299927eed1" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "saikumarr9800@gmail.com",
    "name" : "SARAMPATI SAI KUMAR",
    "rollnum" : 160115733108,
    "sent" : true,
    "year" : 3
  },
  "c29820bb91e02bc897e0a77d8fb943b823cbcbd9ddd8452e116a1894ea03ec04" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "Sohailqureshi1999@gmail.com",
    "name" : "SOHAIL QURESHI",
    "rollnum" : 160116733172,
    "sent" : true,
    "year" : 2
  },
  "c2a07a541f98909cc0185e76bde6f269d6f6075c417211e93702657b4ba52cc8" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "ramlmn00@gmail.com",
    "name" : "DAMERA LAXMAN RAJ",
    "rollnum" : 160116733325,
    "sent" : true,
    "year" : 2
  },
  "c358e253855f071591e47c3be074e864ccdcbd4964d168a5efa59716ec6491ae" : {
    "email" : "nandasangem@gmail.com",
    "name" : "SANGEM NANDHA KISHORE",
    "rollnum" : 160114733160,
    "sent" : true,
    "year" : 4
  },
  "c3741739051e6210ba713c469b9ea6a6ca43f1a55f5bd9d5b325d616f590181d" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "agowtham6090@gmail.com",
    "name" : "GOWTHAM REDDY A",
    "rollnum" : 160116733029,
    "sent" : true,
    "year" : 2
  },
  "c387ceb6af5522568ef4ea7a3a703f15dd2bcad6fe68366c5acc3e8676ab1488" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "markmj2297@gmail.com",
    "name" : "MARK",
    "rollnum" : 160114733101,
    "sent" : true,
    "year" : 4
  },
  "c42c1ce2bd96e04abdf5f13bcd68637d3d4e34be951cf7bc694ec053e64ed22d" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "skedarrock@gmail.com",
    "name" : "PRASAD SAKHAMURU K",
    "rollnum" : 160116733043,
    "sent" : true,
    "year" : 2
  },
  "c5c5005a284c9b5a62929e78792cf215b30867d2bfcfdc1dfb4f2d416cf1669f" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sjoysula@yahoo.com",
    "name" : "JOSYULA SAI SUSHMA MADHAVI",
    "rollnum" : 160115733141,
    "sent" : true,
    "year" : 3
  },
  "c5fd36022eaab652768b61732141e79dd732e642a97cb489067af82d6e7a9126" : {
    "email" : "sabdulhai30@gmail.com",
    "name" : "SHUAIB ABDUL HAI",
    "rollnum" : 160114733172,
    "sent" : true,
    "year" : 4
  },
  "c617261804be37730cf904ce59534fbafab6c4348aecab9d4824f68fe6fd59db" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "kalyan0135@gmail.com",
    "name" : "THAMADA KALYAN KUMAR",
    "rollnum" : 160114733040,
    "sent" : true,
    "year" : 4
  },
  "c674c6a5cd7720eb77014d182a81b0ac6f209c218f846c0fced4af1586a9ccd2" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "supriyagurindapalli@gmail.com",
    "name" : "GURINDAPALLI SUPRIYA",
    "rollnum" : 160115733148,
    "sent" : true,
    "year" : 3
  },
  "c67627449d56a5594a5d0c5876b4fcbdf77090ea0632a482142f91faa52be5d1" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "bejugamsharath@gmail.com",
    "name" : "SHARATH CHANDRA B",
    "rollnum" : 160116733107,
    "sent" : true,
    "year" : 2
  },
  "c6b1a1dc61e34fdd5179f3640f0bb714acf0889405ec29ece47c34948574212b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "nsskakarla@gmail.com",
    "name" : "NAGA SAI SHASHANK",
    "rollnum" : 160114733103,
    "sent" : true,
    "year" : 4
  },
  "c770805db823670a4e32bf6b05aa8a6e4507cc2a237d609f1afbb60eb3d46630" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "meghanachunduru97@gmail.com",
    "name" : "MEGHANA CHUNDURU",
    "rollnum" : 160114733070,
    "sent" : true,
    "year" : 4
  },
  "c81a43fe5c14cc9a89ed5cc333b614c28c4fba77bd26dea81beb011a18fe542e" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "sushanthsamala678@gmail.com",
    "name" : "SAMALA SUSHANTH",
    "rollnum" : 160115733115,
    "sent" : true,
    "year" : 3
  },
  "c820077c280424f74186e964540a6b1c8b3c5cab1f8e9f1ab1c699208e48ac28" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "bhanubtg@gmail.com",
    "name" : "GUJJULA BHANODAYA TILAK",
    "rollnum" : 160115733024,
    "sent" : true,
    "year" : 3
  },
  "c8798cf2500f1cfefbe7e227cfaa1fbb1c609518c7832479c7658cef623d1587" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "abhishek.darana@gmail.com",
    "name" : "DARANA ABHISHEK",
    "rollnum" : 160115733080,
    "sent" : true,
    "year" : 3
  },
  "c8a4f889c755fb579081638ca89c3c0d1a5feee4e7320c1cf5ad09c110d7a59c" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "karrollabeulah@gmail.com",
    "name" : "BEULAH K",
    "rollnum" : 160116733001,
    "sent" : true,
    "year" : 2
  },
  "c968723581777615ca569ce363fd3d3aca7e1de701acfdb1a1ff673e55acd3f1" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "nsricharan19@gmail.com",
    "name" : "NAMPELLY SRICHARAN",
    "rollnum" : 160114733056,
    "sent" : true,
    "year" : 4
  },
  "ca29e47c444f12415139d02006a26c31f6a0643bfed2337b3f92e7647ecd298e" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "harshitha.reddy3599@gmail.com",
    "name" : "HARSHITHA REDDY T",
    "rollnum" : 160116733130,
    "sent" : true,
    "year" : 2
  },
  "ca31518f7e2351047c9e467579ceb286db2d0127e93736e73c6e69b2974088ce" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "sta_genius@windowslive.com",
    "name" : "SYED TAUSEEF AHMED",
    "rollnum" : 160113733123,
    "sent" : true,
    "year" : 3
  },
  "ca9c72561fc3bfdc40104687f7bb9bc3c90344d6f068f2358635565d267b0603" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "eshwar.koka@gmail.com",
    "name" : "KOKA ESHWAR",
    "rollnum" : 160114733094,
    "sent" : true,
    "year" : 4
  },
  "cb086f11f69f1905b159c382c715bb6a5f096c2b57f1792f5f65547393715bae" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "manjari.997@gmail.com",
    "name" : "MADURI MANJARI",
    "rollnum" : 160114733009,
    "sent" : true,
    "year" : 4
  },
  "cc0aa4c0a1fdad675382535e0820a950ec30701b18a92abb8bb9ac0f9d4b9445" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "ravitejagannamaraju@gmail.com",
    "name" : "GANNAMARAJU RAVI TEJA",
    "rollnum" : 160115733045,
    "sent" : true,
    "year" : 3
  },
  "ccc20171dcdf1ed528b7f9922ad817fec085c165f0c588c6ed350130c9652f0f" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "shivasharan32@gmail.com",
    "name" : "MALEGAMA SHIVASHARAN",
    "rollnum" : 160114733328,
    "sent" : true,
    "year" : 4
  },
  "cd098241a6d951b14a8c0d3ae0acb32414db7580bae75ddd5908b0c71d94f581" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "g.srinath14@gmail.com",
    "name" : "GUNNALA SRINATH",
    "rollnum" : 160116733318,
    "sent" : true,
    "year" : 2
  },
  "cd9303eddfdfdb5598931ef31e2056ab94d0c9bf0b9a5a559f17b286a290e4ab" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "ruchieatha97@gmail.com",
    "name" : "SAI RUCHIEATHA MAANVI",
    "rollnum" : 160114733075,
    "sent" : true,
    "year" : 4
  },
  "cdd34a44f36805ef2034054fb3cf8e342cb151425786f977a16c66167ec6f601" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sravanpenthala45@gmail.com       ",
    "name" : "PENTHALA SRAVAN KUMAR",
    "rollnum" : 160116733330,
    "sent" : true,
    "year" : 2
  },
  "cf2738461e5c4bcaccb0e23a2b7fa2c5b3ce26c2b279f211d4771ac77ec17937" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "varshitausem@gmail.com",
    "name" : "USEM VARSHITA",
    "rollnum" : 160115733078,
    "sent" : true,
    "year" : 3
  },
  "cf4437cf3e7ac63acc5ab6ba8ca434bf474e85330ab922d9e5fac4a611ac7f2f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "nalinraj98@gmail.com",
    "name" : "NALIN RAJ G",
    "rollnum" : 160116733037,
    "sent" : true,
    "year" : 2
  },
  "cf57b5ecd24fe551122135fed1d3c9712a8800a46006ebb158d9f288618a4020" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "navyasreecp40@gmail.com",
    "name" : "PENDYALA NAVYA SREE",
    "rollnum" : 160116733336,
    "sent" : true,
    "year" : 2
  },
  "cfd7fca59e99a8595c00bb4d4f2220830700a7e4821a67f345f8ff61f9a1c15d" : {
    "email" : "vikramrao756@gmail.com",
    "name" : "BOLAMALLA THRIVIKRAMA RAO",
    "rollnum" : 160115733176,
    "sent" : true,
    "year" : 3
  },
  "d03e1e49704843d608cb0997e3761c3c7f25ca7a4e9ba3bbe3798c7d320fa079" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "bpallavi46@gmail.com",
    "name" : "BYAGARI PALLAVI",
    "rollnum" : 160115733008,
    "sent" : true,
    "year" : 3
  },
  "d07bbbe4b01f61e559f17d089a1b8a54425dbff46b2dfe2abb1335a6d105918e" : {
    "email" : "",
    "name" : "avaneesh",
    "rollnum" : 160116733024,
    "sent" : false,
    "year" : 2
  },
  "d124f2b4f170689aa4e4c02a6b81cf394660dbebbc5982b518f26e1c3d40d3b3" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "prince.likhitesh@gmail.com",
    "name" : "SATYA VINAYA LIKHITESH",
    "rollnum" : 160114733111,
    "sent" : true,
    "year" : 4
  },
  "d2244a6b714aa8def261593e29040c715027d4c36d29c1a080e0bf02607932f8" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "richakulkarni.98@gmail.com",
    "name" : "RICHA KULKARNI",
    "rollnum" : 160115733137,
    "sent" : true,
    "year" : 3
  },
  "d2398fc6b77ac8273d82aec69401ff3006b24a1c10aaf0b03fb75f2b89bdbf48" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "Surigisadhana@gmail.com",
    "name" : "SURIGI SADHANA",
    "rollnum" : 160116733335,
    "sent" : true,
    "year" : 2
  },
  "d2b34ad1cca436cc5ba76cd4f291d0ccede14c61c410553792684967a9c1854e" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "ammuluaishyadav@gmail.com",
    "name" : "TAMMADAVENI AISHWARYA",
    "rollnum" : 160115733331,
    "sent" : true,
    "year" : 3
  },
  "d3d6bbbdd9eb90c6888a4ec9dae9bfa26a10657123f18b0a8a1d455692a0f249" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "imatrix716@icloud.com",
    "name" : "BOMMAKANTI SAI AVINASH",
    "rollnum" : 160115733048,
    "sent" : true,
    "year" : 3
  },
  "d4ae6cd510ba2a468594c0aa737046573965894ddcca9d0c1d8e44eb6384ca83" : {
    "email" : "newveelabandi@gmail.com",
    "name" : "BANDI NEWVEELA",
    "rollnum" : 160116733329,
    "sent" : true,
    "year" : 2
  },
  "d504715880747945de7bf3f57f52c2d5031b99ede338235dcc722d85d0f7856a" : {
    "email" : "pavankatta11198@gmail.com",
    "name" : "PAVAN KUMAR REDDY K",
    "rollnum" : 160116733039,
    "sent" : true,
    "year" : 2
  },
  "d566bd15b6b31702418cd3de42f48b0e881721658890bfe3a7934f3412528af9" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "dchowdary5@gmail.com",
    "name" : "GOGINENI DINESH CHOWDARY",
    "rollnum" : 160115733154,
    "sent" : true,
    "year" : 3
  },
  "d60aa2a7f2c28dbc8bf21b79564424c3b69b5a6e59bae3d52e982ff347535939" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "dakshatha.nagaraj09@gmail.com",
    "name" : "N DAKSHATHA",
    "rollnum" : 160114733124,
    "sent" : true,
    "year" : 4
  },
  "d68a982a9ad6cc49e882d4b41be417f767aae43f3a2e9e5cec9d308b74b924f1" : {
    "email" : "hariharanreddy.55@gmail.com",
    "name" : "HARIHARAN REDDY ADMALA",
    "rollnum" : 160114733153,
    "sent" : true,
    "year" : 4
  },
  "d6c6af25e98b16157548ffa05b249f2536cb0ee55d113b1d588de69c6752ecf2" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "sunnynalmas@gmail.com",
    "name" : "NALMAS AKHIL",
    "rollnum" : 160114733087,
    "sent" : true,
    "year" : 4
  },
  "d6edb9accf4c52204b4eca2e7c030ffb862fb756d50e344669c40cb75f048341" : {
    "email" : "vamshigujjari7@gmail.com",
    "name" : "GUJJARI VAMSHI KRISHNA",
    "rollnum" : 160114733176,
    "sent" : true,
    "year" : 4
  },
  "d79d7488029c9f19c8620c97b721d321fabc938713518be4c36560a0e0459363" : {
    "email" : "cspp1998@gmail.com",
    "name" : "GAINI PRANAY",
    "rollnum" : 160115733161,
    "sent" : true,
    "year" : 3
  },
  "d82929f43fcd04574e6dcebd5982c08cefa2229f401e3d489966599418e38a89" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "bandirishitha02@gmail.com",
    "name" : "BANDI RISHITHA",
    "rollnum" : 160115733074,
    "sent" : true,
    "year" : 3
  },
  "d84eff909f52ae1c3d4b19324117705b5c263bda00f14f3b8622de4f7701d645" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "saisagar071998@gmail.com",
    "name" : "SAI GNANA GUNA SAGAR J",
    "rollnum" : 160116733048,
    "sent" : true,
    "year" : 2
  },
  "d8aa6291fa1481a906af3ae2018bc0d3dcf3eab7a45d68d4055914c7042336ad" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sahas26@gmail.com",
    "name" : "SAHAS REDDY M",
    "rollnum" : 160116733046,
    "sent" : true,
    "year" : 2
  },
  "d90f8fb35beb64eaea6c987337b6f10c01cdced52f0f320bdc2f334ebaa9d632" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "asifali281997@gmail.com",
    "name" : "MD ASIF ALI",
    "rollnum" : 160115733094,
    "sent" : true,
    "year" : 3
  },
  "d97764a3055538ba2ef1286c5aa122e6d2d21bcac3354921d3642833760e5595" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "nadimirahul@gmail.com",
    "name" : "NADIMIDODDI RAHUL",
    "rollnum" : 160114733164,
    "sent" : true,
    "year" : 4
  },
  "da1fd841114c59ad268e49367f0629c713db01178a31380c0936a9ab81ce8702" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "sandhya97bhukya@gmail.com",
    "name" : "BHUKYA SANDHYA RANI",
    "rollnum" : 160114733076,
    "sent" : true,
    "year" : 4
  },
  "da6a1e90f31a5a0884eaa69226979a0d909535d1d961246e22d372a7b4649314" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "vineethaska@gmail.com",
    "name" : "VINEETH KUMAR A",
    "rollnum" : 160116733116,
    "sent" : true,
    "year" : 2
  },
  "dc85cca4d7175102dfc2909cc6b5837e2282608add27daf3e71234f4a8c7b659" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "jhansijhan67@gmail.com",
    "name" : "MUDU JHANSIBAI",
    "rollnum" : 160115733307,
    "sent" : true,
    "year" : 3
  },
  "dca0ec2704d9eff8b34bc442d271f7a138874c83dfa2a22d3bb6d6027a1eb040" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "tejaswiroopi28@gmail.com",
    "name" : "ARABATI TEJASWI ROOPINI",
    "rollnum" : 160115733077,
    "sent" : true,
    "year" : 3
  },
  "dcb47dc5352b69002132aef772bb79613aba979818c0ce3ba18e40cf4ccecb70" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "chandu24.chandran@gmail.com",
    "name" : "KALLEM RAVI CHANDRAN REDDY",
    "rollnum" : 160115733102,
    "sent" : true,
    "year" : 3
  },
  "dcdb75a7a5688be1cc284e6ffcd6d01db0d2c0c8d3f482b6cb1bc7ab3fb4e323" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "dheerajgurudi@gmail.com",
    "name" : "DHEERAJ REDDY",
    "rollnum" : 160114733151,
    "sent" : true,
    "year" : 4
  },
  "dd5147fcc07cd05cc1a3ffd549549d8f33961aac3bc471c7845154b7d3fe0abc" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "mallelavinay.reddy@gmail.com",
    "name" : "MALLELA VINAY KUMAR REDDY",
    "rollnum" : 160114733179,
    "sent" : true,
    "year" : 4
  },
  "de3d1e7fa2ad6ff60e9a03b2d35d94377b86f84a151cbb0bc8b68c538dc8cf7a" : {
    "elective" : {
      "4" : {
        "code" : "CS475",
        "group" : "4",
        "title" : "Human Machine Interaction",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "patnalasantosh97@gmail.com",
    "name" : "PATNALA SAI SANTHOSH",
    "rollnum" : 160114733051,
    "sent" : true,
    "year" : 4
  },
  "dee35bbcd573386c93172edaaaa9f3387fc08066ac7c5732b496ca5483d2ec66" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "tejasvi.amanaganti@gmail.com",
    "name" : "TEJASVI A",
    "rollnum" : 160116733149,
    "sent" : true,
    "year" : 2
  },
  "df4f146269de20040e4309e0a2df52ec6f7a306b69fd588ee88d1c8238d745f7" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "srikanthdandevena@gmail.com",
    "name" : "DANDEVENA SRIKANTH",
    "rollnum" : 160115733175,
    "sent" : true,
    "year" : 3
  },
  "e05ba82ba2dc93f3a47a0804bcf9331182e5161253289691a0667cea6c7dea76" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sharu2551@gmail.com ",
    "name" : "SHARVANI M",
    "rollnum" : 160116733139,
    "sent" : true,
    "year" : 2
  },
  "e1d5b7787cb2327d5a24a1f29abb51e30dc17a93747fb64e4599d6daa8b75efc" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "shivasrinannuta@gmail.com",
    "name" : "NANNUTA SHIVASRI",
    "rollnum" : 160114733306,
    "sent" : true,
    "year" : 4
  },
  "e2166b17200558eb376a9e9d36799b6801805c8a64797695eb07e0254aa973a9" : {
    "email" : "srinivas.mandula29@gmail.com  ",
    "name" : "SRINIVAS M",
    "rollnum" : 160116733174,
    "sent" : true,
    "year" : 2
  },
  "e23b422bfe93d1ba98465ac457897862d57a4bebb3aebcdda33aae0f9ca49aea" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "ramyakeerthi.nayini@gmail.com",
    "name" : "NAYINI RAMYAKEERTHI",
    "rollnum" : 160115733316,
    "sent" : true,
    "year" : 3
  },
  "e26ed9f3f6ba5d6166a47df42a29e94f2f704310e90b24869441c32a5e70dd9f" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "thotajyothi1697@gmail.com",
    "name" : "THOTA JYOTHI",
    "rollnum" : 160115733070,
    "sent" : true,
    "year" : 3
  },
  "e2d080c8e8274d848f42017238de3288542f3df0dfb82bff8a9b9d5e4e1be0c7" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "doolamramya@gmail.com",
    "name" : "DOOLAM RAMYA",
    "rollnum" : 160114733317,
    "sent" : true,
    "year" : 4
  },
  "e34ecf7554256d53fd8f9b7d125d6f9f501a8482cdbcf4b80f3753ad2f76e27c" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "susmitha.bingi97@gmail.com",
    "name" : "BINGI SUSMITHA",
    "rollnum" : 160114733083,
    "sent" : true,
    "year" : 4
  },
  "e35d42cad9be657046fdbd4ebde0d9a67c13ee45d911f8b4e0b88812259073b7" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "d.susmithatinu@gmail.com",
    "name" : "DHADIGE SUSMITHA",
    "rollnum" : 160115733149,
    "sent" : true,
    "year" : 3
  },
  "e360c8f739429d982fdea7279bfaa323409ff117fddbe0005fe3f070ca96decd" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "sravyajasti6@gmail.com",
    "name" : "SRAVYA JASTI",
    "rollnum" : 160114733144,
    "sent" : true,
    "year" : 4
  },
  "e4d8854b7b9db1dbe4b1822128e99d98e6864972a6535c6f6aea9962e0ca176e" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "mahitharudraraju05@gmail.com",
    "name" : "MAHITHA R",
    "rollnum" : 160116733021,
    "sent" : true,
    "year" : 2
  },
  "e4da0731f844dcb70470390019a2c74212c2add2a1fcff7b64c6e0c872684383" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "b.mowlanica@gmail.com",
    "name" : "BILLA MOWLANICA",
    "rollnum" : 160114733011,
    "sent" : true,
    "year" : 4
  },
  "e506c8918947f8ff2b92794a39861f9aa8111de27f79cdf89559ae1778c1d55f" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "sushmareddykasarla@gmail.com",
    "name" : "SUSHMA REDDY KASARLA",
    "rollnum" : 160114733021,
    "sent" : true,
    "year" : 4
  },
  "e51c2eb23c9a28ee7713f30dbecd6c7d3496d14d650781bbc45871cd565ba953" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "chpreetham322@gmail.com",
    "name" : "CHINTA PREETHAM",
    "rollnum" : 160115733041,
    "sent" : true,
    "year" : 3
  },
  "e60f76b6b59b99581bb3ba0038d710d954edffba5e0c8e39c580298d4ba80b4d" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "saisahiti242@gmail.com",
    "name" : "SAI SAHITI CH",
    "rollnum" : 160116733073,
    "sent" : true,
    "year" : 2
  },
  "e6969095a5132e55d922f28658a86253c193822c6361447dd54221ffb7aacc3f" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "harikareddykolan@yahoo.in",
    "name" : "KOLAN HARIKA",
    "rollnum" : 160114733066,
    "sent" : true,
    "year" : 4
  },
  "e6a1106ae34845b94ca86c978013d6121854535a468fd8b384690c4a87e5c526" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "yashwanth.gajji333@gmail.com",
    "name" : "YASHWANTH G",
    "rollnum" : 160116733119,
    "sent" : true,
    "year" : 2
  },
  "e6ec700ff36a75f7b66969c3e01a9db95c045ef9a50cdbf07e37d96cabc7e478" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "adithyakng@gmail.com",
    "name" : "ADITHYA K N G",
    "rollnum" : 160116733103,
    "sent" : true,
    "year" : 2
  },
  "e70a962e8ad0fe32ee78713f50ed9e0bf620a995ba8b8b001f1c8c153e9f6c2b" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "rishitareddyp@gmail.com",
    "name" : "P RISHITA REDDY",
    "rollnum" : 160114733137,
    "sent" : true,
    "year" : 4
  },
  "e732dfdfe926d3ce1dc9e74361b85b9bbe73f94e2bf0d58fc4b749908acbb69d" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "alekhyareddy.3105@gmail.com",
    "name" : "ALEKHYA MALYALA",
    "rollnum" : 160114733122,
    "sent" : true,
    "year" : 4
  },
  "e75244db11b5a152187c742f969f7c88d32e20fa7df626d327c63db9961e7674" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "jahnavipb@gmail.com",
    "name" : "BEVARA JAHNAVI",
    "rollnum" : 160115733125,
    "sent" : true,
    "year" : 3
  },
  "e784398c1cecd2c9a8de07647b41ba15676bbe21189659663d0b4982826183d8" : {
    "elective" : {
      "2" : {
        "code" : "16CSE02",
        "group" : "2",
        "title" : "Principle of Programming Languages",
        "year" : "2"
      }
    },
    "email" : "nama.sumanjali@gmail.com",
    "name" : "SUMANJALI CHAKRAVARTHI N",
    "rollnum" : 160116733019,
    "sent" : true,
    "year" : 2
  },
  "e7d8f6fbb309db992a8bafc2df9c14c24a855db0a8ef885d33f46c02d7dfe99d" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "saitejabandari27@gmail.com",
    "name" : "BANDARI SAITEJA",
    "rollnum" : 160115733319,
    "sent" : true,
    "year" : 3
  },
  "e8088103381c82a921f9cf02953f83c2bba6d10bee9bafdd1d9e27ee6bcda917" : {
    "email" : "",
    "name" : "POTTALA BHARATHI",
    "rollnum" : 160116733310,
    "sent" : false,
    "year" : 2
  },
  "e88640539945f5291fd3a91ce079bf1e0a0fca93cde77942f1e1e0d72b1030fa" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "sai.sudheepreddy248@gmail.com",
    "name" : "K SAI SUDHEEP REDDY",
    "rollnum" : 160114733053,
    "sent" : true,
    "year" : 4
  },
  "e888ef1fb04f702e7e89fb493969c9ae1f0f6dfde3693073783c7561e249c2f4" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "shreyaraj1234@gmail.com",
    "name" : "SHREYA RAJ K",
    "rollnum" : 160116733142,
    "sent" : true,
    "year" : 2
  },
  "ea6984d9f3b6624f5fed46f9f9842453a67391dd147c4080eba2de95a8fd670c" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "saisaurabhk@gmail.com",
    "name" : "SAI SAURABH KAUSHIK",
    "rollnum" : 160115733110,
    "sent" : true,
    "year" : 3
  },
  "ea7c26ede0b08fdf72926b5d6041f3835c129164578d5fcfbbb969c0ba1a943a" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "saicharanvancha1774@gmail.com",
    "name" : "SAICHARAN V",
    "rollnum" : 160116733052,
    "sent" : true,
    "year" : 2
  },
  "ea9cc42d0a81b92a6a44f8709cfe90bb3bda9e3f929b38ccec0a6e083a9dcf9d" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "kallasoundarya311@gmail.com",
    "name" : "KALLA SOUNDARYA",
    "rollnum" : 160115733311,
    "sent" : true,
    "year" : 3
  },
  "eac6fc74a3d73634d675e221ef9ce65c030a05fbfac109d2299d185a737a5baa" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "chandanasureddi01@gmail.com",
    "name" : "SIRI CHANDANA SUREDDI",
    "rollnum" : 160114733141,
    "sent" : true,
    "year" : 4
  },
  "eb54cb86f2a6c7685e3bce2b2859b4f24f67dcf70bc390bd3d00ae878f5d488c" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "bavyasrithunder@gmail.com",
    "name" : "BAVYA SRI J",
    "rollnum" : 160116733062,
    "sent" : true,
    "year" : 2
  },
  "ebad2a3a7070d9f6fa01ba086648001cb4bf20df2aae8b95135d1e8dc18696a5" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "nagarajrajula05@gmail.com",
    "name" : "RAJULA NAGARAJU",
    "rollnum" : 160114733319,
    "sent" : true,
    "year" : 4
  },
  "ec0664062dd1e4784836910d10add6ce6b60c8966cc347b632e3225a8f8cfc93" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "nagavineshreddy@gmail.com",
    "name" : "VINESH REDDY NAGA",
    "rollnum" : 160114733180,
    "sent" : true,
    "year" : 4
  },
  "ec3a52d04a18803ec1aad8961680e6fa78529dde15b80892ad52690fa30b1001" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "shakeebsyed7827@gmail.com",
    "name" : "SYED SHAKEEB ASSIL",
    "rollnum" : 160116733176,
    "sent" : true,
    "year" : 2
  },
  "ed96f08d0d16940e6f6e122e304ddf5f27a2a8ef0afaddcfade68749374513e4" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "gowthamvarma1997@gmail.com",
    "name" : "KOSURI GOWTHAM VARMA",
    "rollnum" : 160114733036,
    "sent" : true,
    "year" : 3
  },
  "edd20d263638c64445e4b78a9620a18305a40323568aa8b73c76058bd30d7217" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "akhilesh.bastha@gmail.com",
    "name" : "B AKHILESH DATTA",
    "rollnum" : 160114733088,
    "sent" : true,
    "year" : 4
  },
  "ee4ee937a01f423184d30d877bf417e3909ca5da03f1a8c6ed2766aa6e309e25" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "veerapagabuchibabu@gmail.com",
    "name" : "VEERAPAGA BUCHAIAH",
    "rollnum" : 160114733312,
    "sent" : true,
    "year" : 4
  },
  "eed7a196b28223e420db9f605fd72b2f55dcd3e81ed074419fc9187726bbb1af" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "mohammedsayeed783@gmail.com",
    "name" : "MOHAMMED BIN SAYEED BASULEMAN",
    "rollnum" : 160114733325,
    "sent" : true,
    "year" : 4
  },
  "ef313d26254774e63139ef514974827407a2bd84f9bffc8780b7fe7dfd7208be" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "gayatritawada20@gmail.com",
    "name" : "TAWADA GAYATRI",
    "rollnum" : 160115733124,
    "sent" : true,
    "year" : 3
  },
  "efda0c3fa0e34be0a061b0b88f6c737ee60796761a6d1806abc375ae4d62a085" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "dmahesh1598@gmail.com",
    "name" : "DESINEEDI UMA MAHESHWARA SWAMY",
    "rollnum" : 160115733177,
    "sent" : true,
    "year" : 3
  },
  "f02ea23db401045211d65796d50da3c9c19b0e86b041090ed44fecca8aa63050" : {
    "email" : "charita19997@gmail.com",
    "name" : "CHARITA DONTIREDDY",
    "rollnum" : 160115733067,
    "sent" : true,
    "year" : 3
  },
  "f057708689d93ef07ad72f57a4ec82eb5cc002016faaa6ae9ad494d1ecb9b8f6" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "13cp227@gmail.com",
    "name" : "KUDALA SUMEERAJA",
    "rollnum" : 160116733301,
    "sent" : true,
    "year" : 2
  },
  "f0e938a3a17d5e63ea7963c79abe54f9c4c25bc92ddb2d89a6d258b4ba07e7ec" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "zainur98@yahoo.co.in",
    "name" : "ZAIN UR RAHMAN MOHAMMED",
    "rollnum" : 160115733120,
    "sent" : true,
    "year" : 3
  },
  "f14f79548b8c40a50104b9df70af1c1892b1e5df6aa8d53a494445e1a0886a83" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "adeelahmedakheel@gmail.com",
    "name" : "ADEEL AHMED AKHEEL",
    "rollnum" : 160116733033,
    "sent" : true,
    "year" : 2
  },
  "f1b25161389b96c1e0c985eb9eaaefeddd098bada22a32b625e35eb01dbf0297" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "karthikmsdian78@gmail.com",
    "name" : "KEDAM KARTHIK",
    "rollnum" : 160115733089,
    "sent" : true,
    "year" : 3
  },
  "f1ebea52533d7f560673af4f7711409a748ebf2fbafb18c01dc4d1c319d79adc" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "mehrajmd31@gmail.com",
    "name" : "MOHAMMED MEHRAJ",
    "rollnum" : 160115733328,
    "sent" : true,
    "year" : 3
  },
  "f23527dd6e485484c0fcb380f936eafad2776c7601d0985034103b7e925ef34b" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "sagi.nithish@gmail.com",
    "name" : "SAGI SAI NITHISH VARMA",
    "rollnum" : 160115733167,
    "sent" : true,
    "year" : 3
  },
  "f28a74eb367754b2c9e2507c5ae6e61019f6875168061c5c71015f29ad63efc6" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "boosakeerthana@gmail.com",
    "name" : "BOOSA KEERTHANA",
    "rollnum" : 160116733331,
    "sent" : true,
    "year" : 2
  },
  "f32c201754eb16d0c4306f3d63c026efe14cc11aeb332ea6295e332a925880c4" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "bhavya1998reddy@gmail.com    ",
    "name" : "SRISAIBHAVYA REDDY G",
    "rollnum" : 160116733146,
    "sent" : true,
    "year" : 2
  },
  "f34fcd48c32de6fd2eb830769940d94d4d9e694ac34acdc96f1548cc9b12cfe3" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "kambhampatiaditya0@gmail.com",
    "name" : "ADITYA K",
    "rollnum" : 160116733080,
    "sent" : true,
    "year" : 2
  },
  "f3744521ce637b1b3c880a8fb64adde570f6477b6c12ec3cf77efdb11162fcaf" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "kharishk1998@gmail.com",
    "name" : "HARISH KUMAR K",
    "rollnum" : 160115733087,
    "sent" : true,
    "year" : 3
  },
  "f3d08d6114e3c0fa7e41f27ebcdff6a97376aec32a9d69e6f1f017cdd406e861" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "kannuriajay5@gmail.com",
    "name" : "KANNURI AJAY",
    "rollnum" : 160115733020,
    "sent" : true,
    "year" : 3
  },
  "f3d3b520fa34d4cd57821f43e17bfe900a9fd57faeab0ccbbf8d7899592ab11c" : {
    "elective" : {
      "4" : {
        "code" : "CS472",
        "group" : "4",
        "title" : "Cloud Computing",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "samyasulthana304@gmail.com",
    "name" : "MD SAMYA SULTHANA",
    "rollnum" : 160114733304,
    "sent" : true,
    "year" : 4
  },
  "f40722063e0a12d9966938803423a9b50af49234d046f451aaf3e4a00fd4eceb" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "Priyankaporika777@gmail.com  ",
    "name" : "PRIYANKA GANDHI P",
    "rollnum" : 160116733136,
    "sent" : true,
    "year" : 2
  },
  "f41e2b6c3499c3d7eabcfbdb8c2911445216cd55c12e267be12f6e18d8720f52" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "deekshitha1425@gmail.com  ",
    "name" : "DEEKSHITHA G",
    "rollnum" : 160116733124,
    "sent" : true,
    "year" : 2
  },
  "f44e366cd7b10d16bb695c2ccec812ad474c5f072006886f7bb012b8460e8c43" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "cbitshiva@gmail.com",
    "name" : "PAPIGARI SHIVA",
    "rollnum" : 160114733113,
    "sent" : true,
    "year" : 4
  },
  "f4a9127053875686341ea4d9e8c9e9ad2a6ac8d119bf2af4f6f573c5111e8374" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "narsidanishenaz@gmail.com",
    "name" : "NARSIDANI SHENAZ",
    "rollnum" : 160114733016,
    "sent" : true,
    "year" : 4
  },
  "f744772a128319c94f658d8b28ed034cce7af0dc313780c04279d11fd31f76cc" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "harshavardhanrao45@gmail.com",
    "name" : "SANKINENI HARSHA VARDHAN RAO",
    "rollnum" : 160115733326,
    "sent" : true,
    "year" : 3
  },
  "f7bba5138f0a817104b8e3073440cd66dd1da21f195b61d08b22d48dec7b1f9c" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "ranjithnaik51@gmail.com",
    "name" : "AJMEERA RANJITH KUMAR",
    "rollnum" : 160115733101,
    "sent" : true,
    "year" : 3
  },
  "f8e253855687564fa34aef9e3eddd2fea178c859a7a6c1ea224ce364311b2961" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "kalyanjithendra27@gmail.com",
    "name" : "PRATHI JITENDRA KALYAN",
    "rollnum" : 160114733096,
    "sent" : true,
    "year" : 4
  },
  "f9bbacdd129c7126198c41fb2e9296281e4f8d766f20b45e721f4c5c834cf68f" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "sagarkolipaka923@gmail.com",
    "name" : "KOLIPAKA SAGAR",
    "rollnum" : 160116733303,
    "sent" : true,
    "year" : 2
  },
  "fa1e98df343ebb91684d289ecf84d78c885e7237a442690e148b111b1a92a289" : {
    "elective" : {
      "4" : {
        "code" : "CS476",
        "group" : "4",
        "title" : "Software Reuse Techniques",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "manojveligeti@gmail.com",
    "name" : "VELIGETI MANOJ",
    "rollnum" : 160114733301,
    "sent" : true,
    "year" : 4
  },
  "fa83f167cd8eec4e5b6ed3ccd33c6d3d9b56039ac5cb90c03d6852fd245177bb" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "datla.shivani@gmail.com",
    "name" : "SHIVANI D",
    "rollnum" : 160116733015,
    "sent" : true,
    "year" : 2
  },
  "faad6564fd56f947ca0e88dbdb6c276111e929962b6f2a7c97ec781d1ee726fd" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "ynandini1997@gmail.com",
    "name" : "Y NANDINI",
    "rollnum" : 160114733131,
    "sent" : true,
    "year" : 4
  },
  "fb8dcb6e48438f84f710cf8215dd897ae443cb26a7e848779d5feb5c16ae3909" : {
    "elective" : {
      "2" : {
        "code" : "16CSE03",
        "group" : "2",
        "title" : "Shell Scripting",
        "year" : "2"
      }
    },
    "email" : "ramlmn@outlook.com",
    "name" : "DAMERA RAM RAJ",
    "rollnum" : 160116733328,
    "sent" : true,
    "year" : 2
  },
  "fbc026f9f084d86463d632d94c3d7ba3e11f10e1c4c6a4aedc457324bf6fa534" : {
    "elective" : {
      "3" : {
        "code" : "CS351",
        "group" : "3",
        "title" : "Information Storage Management",
        "year" : "3"
      }
    },
    "email" : "kavyathati333@gmail.com",
    "name" : "THATI KAVYA",
    "rollnum" : 160115733071,
    "sent" : true,
    "year" : 3
  },
  "fc18ba4890aab3977c3efe7e1fe464610e3416d2db9ea7cc070f3375871fd439" : {
    "elective" : {
      "4" : {
        "code" : "CS474",
        "group" : "4",
        "title" : "Cyber Forensics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "koppularajender18@gmail.com",
    "name" : "KOPPULA RAJENDER",
    "rollnum" : 160114733107,
    "sent" : true,
    "year" : 4
  },
  "fc544c3bc90deb1c073ebb241c9026ad3f871ba227c28046c4667c74d3d9f9e5" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "ashokreddyscios@gmail.com",
    "name" : "VENKATA ASHOK REDDY K",
    "rollnum" : 160116733113,
    "sent" : true,
    "year" : 2
  },
  "fc641b167c3f795f47660260a3d8b7497c60ce6847eb492fc09aad4e9fc1f9b5" : {
    "elective" : {
      "3" : {
        "code" : "CS356",
        "group" : "3",
        "title" : "Soft Computing",
        "year" : "3"
      }
    },
    "email" : "s19v1997@gmail.com",
    "name" : "VIDIYALA SHASHANK",
    "rollnum" : 160115733053,
    "sent" : true,
    "year" : 3
  },
  "fc82e45dea1c90f5638284fea3cb7afc18481eab4ae2b000d60a82cce9a6ba64" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "venukarthik333@gmail.com",
    "name" : "BODDU VENU KARTHIK",
    "rollnum" : 160114733177,
    "sent" : true,
    "year" : 4
  },
  "fc8bf74251465f1fa53e3ee1a6794939f9228becfddf15e4898ee6dab3ac0aba" : {
    "email" : "vsrinivasanikhil@gmail.com",
    "name" : "VEMULA SRINIVASA NIKHIL",
    "rollnum" : 160114733173,
    "sent" : true,
    "year" : 4
  },
  "fcadf5847462967192f4a29aff17d91df844064f41b8cd9860f2f747f618f0fc" : {
    "elective" : {
      "3" : {
        "code" : "CS352",
        "group" : "3",
        "title" : "Image Processing",
        "year" : "3"
      }
    },
    "email" : "venkilucky5@gmail.com",
    "name" : "KONUDULA VENKATARAMI REDDY",
    "rollnum" : 160115733058,
    "sent" : true,
    "year" : 3
  },
  "fcc2653d524f7378c400fd62a5bbfffd0ca64b9bfe4dd621148c3dd0e1aad100" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "sravanthiaddula@gmail.com",
    "name" : "SRAVANTHI A",
    "rollnum" : 160116733144,
    "sent" : true,
    "year" : 2
  },
  "fcdb09bb5a20da5af2550f3da660f156aae4681cff29126234e720c5623e5cf8" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CS483",
        "group" : "5",
        "title" : "Machine Learning",
        "year" : "4"
      }
    },
    "email" : "susmitharajuri97@gmail.com",
    "name" : "RAJURI SUSMITHA",
    "rollnum" : 160114733023,
    "sent" : true,
    "year" : 4
  },
  "fd59601e3a23f1afb80907b0c006b59d11bfeaa91c2d39868e9767958aa52b30" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "ahmedhasib89@gmail.com ",
    "name" : "MOHAMEMD HASIBUDDIN",
    "rollnum" : 160116733159,
    "sent" : true,
    "year" : 2
  },
  "fe087449bca458250b9d7f295380c5949b8311101b3823214b8cece1f57145b3" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "hephzibahsaidu98@gmail.com",
    "name" : "HEPHZIBAH S",
    "rollnum" : 160116733002,
    "sent" : true,
    "year" : 2
  },
  "fe66c177a64783b16da608c7d98cd51bed6e401c1bf48c4d4fe1aa8cb4628188" : {
    "elective" : {
      "4" : {
        "code" : "CS471",
        "group" : "4",
        "title" : "Data science and big data analytics",
        "year" : "4"
      },
      "5" : {
        "code" : "CE422",
        "group" : "5",
        "title" : "Disaster Mitigation and Management",
        "year" : "4"
      }
    },
    "email" : "sameerakatta96@gmail.com",
    "name" : "KATTA DHEERA SAMEERA",
    "rollnum" : 160114733126,
    "sent" : true,
    "year" : 4
  },
  "ff45e7bef5c9eddebfdfca677ace8fde4a011ea7124f681576b11ddb947132d0" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "gsaikoushik333@gmail.com",
    "name" : "SAI KOUSHIK G",
    "rollnum" : 160116733167,
    "sent" : true,
    "year" : 2
  },
  "ff8b35415cf157ddd788f2bee613c23d7ce8b45610a0a34437b3372bbf0b0cb7" : {
    "elective" : {
      "2" : {
        "code" : "16CSE01",
        "group" : "2",
        "title" : "Linux Programming and Scripting Languages",
        "year" : "2"
      }
    },
    "email" : "lalithareddy6066@gmail.com",
    "name" : "LALITHA T",
    "rollnum" : 160116733078,
    "sent" : true,
    "year" : 2
  }
}
EOL;
		$elective_data = json_decode($elective_data);

		foreach (\App\Student::all() as $student){
			$student->email = '';
			$student->save();
		}

    	foreach ($elective_data as $elective_datum){

    		$student = Student::where('rollnum', $elective_datum->rollnum)->first();

    		if( ! empty( $student) ){
    			$student->email = $elective_datum->email;
    			$student->save();
		    }
	    }
    }
}
