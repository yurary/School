using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace zad_5_tsk
{
    public partial class Form1 : Form
    {
        
        public Form1()
        {
            InitializeComponent();
        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            float a, b, c, p, pole;
             a = float.Parse(textBox1.Text);
             b = float.Parse(textBox2.Text);
             c = float.Parse(textBox3.Text);
            if (a+b>c && b+c>a&& a+c>b) {
                p = (a + b + c) / 2;
                pole = (float)Math.Sqrt(p *(p-a) *(p-b)* (p-c));
                label4.Text = "pole trójkąta = " + pole.ToString();
            }
            else
            {
                label4.Text = "padanne danny nie tworzą trójkąta";
            }

        }
    }
}
