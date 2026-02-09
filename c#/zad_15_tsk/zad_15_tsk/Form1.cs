using System;
using System.Windows.Forms;

namespace zad_13_tsk
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            string s;
            int n = Convert.ToInt32(textBox4.Text);
            if (n > 256) n = 256;
            int b = Convert.ToInt32(textBox7.Text);
            int c = 0, r = 0;
            int i = 1;
            textBox6.Clear();
            while (i <= n)
            {
                c = i / b;
                r = i % b;
                s = i.ToString() + "/" + b.ToString() + "=" + c.ToString() + "; "
                  + i.ToString() + "%" + b.ToString() + "=" + r.ToString();
                textBox6.AppendText(s + Environment.NewLine);
                i++;
            }
        }
    }
}
