using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace zad_11_tsk
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            label1.Text = Convert.ToString(sizeof(float)) + "bytes";
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string s = "typ "+ comboBox1.Text+ "; rozmiar: ";
            switch (comboBox1.SelectedIndex)
            {
                case 0: label1.Text =  s +  Convert.ToString(sizeof(bool)) + "bytes"; break;
                case 1: label1.Text = s +
                        Convert.ToString(sizeof(byte)) +
                        " bytes; Min: " +
                        byte.MinValue.ToString() +
                        " Max " +
                        byte.MaxValue.ToString();
                    break;
                case 2:
                    label1.Text = s +
                        Convert.ToString(sizeof(char)) +
                        " bytes; Min: " +
                        char.MinValue.ToString() +
                        " Max " +
                        char.MaxValue.ToString();
                    break;
                case 3:
                    label1.Text = s +
                        Convert.ToString(sizeof(decimal)) +
                        " bytes; Min: " +
                        decimal.MinValue.ToString() +
                        " Max " +
                        decimal.MaxValue.ToString();
                    break;
                case 4:
                    label1.Text = s +
                        Convert.ToString(sizeof(double)) +
                        " bytes; Min: " +
                        double.MinValue.ToString() +
                        " Max " +
                        double.MaxValue.ToString();
                    break;
                case 5:
                    label1.Text = s +
                        Convert.ToString(sizeof(float)) +
                        " bytes; Min: " +
                        float.MinValue.ToString() +
                        " Max " +
                        float.MaxValue.ToString();
                    break;
                case 6:
                    label1.Text = s +
                        Convert.ToString(sizeof(int)) +
                        " bytes; Min: " +
                        int.MinValue.ToString() +
                        " Max " +
                        int.MaxValue.ToString();
                    break;
            }
        }
    }
}
