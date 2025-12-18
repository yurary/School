using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace zad_4_tsk
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            float a = float.Parse(textBox1.Text);
            float b = float.Parse(textBox2.Text);
            if (a > 0 || b > 0)
            {
                label3.Text = "liczba a lub b jest dodatnia";
            }

        }

        private void button2_Click(object sender, EventArgs e)
        {
            float a = float.Parse(textBox1.Text);
            float b = float.Parse(textBox2.Text);
            if (a < b)
            {
                label3.Text = b.ToString() + " jest większe od " + a.ToString();
            }
            else if (b < a)
            {
                label3.Text = a.ToString() + " jest większe od " + b.ToString();
            }
            else {
                label3.Text = a.ToString() + " jest równe" + b.ToString();
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            float a = float.Parse(textBox1.Text);
            float b = float.Parse(textBox2.Text);
            if (a == 0)
            {
                label3.Text = a.ToString() + " jest równe zero";
            }
            else if (b == 0)
            {
                label3.Text = b.ToString() + " jest równe zero";
            }
            else { label3.Text = b.ToString() + "/" + a.ToString() + " = " + (b/a).ToString(); }
       
        }
    }
}
