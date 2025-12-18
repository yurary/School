using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace zad_1_tsk
{
    public partial class Form1 : Form
    {
        int licznit = 0;
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            this.WindowState = FormWindowState.Minimized;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.WindowState |= FormWindowState.Maximized;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            licznit++;
            label1.Text= "suma: " + licznit.ToString();

        }
    }
}
