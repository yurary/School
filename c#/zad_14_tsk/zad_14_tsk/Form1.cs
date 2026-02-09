namespace zad_14_tsk
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void tabPage2_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            string s;
            if (textBox2.Text == "") return;
            int n = Convert.ToInt16(textBox2.Text);
            textBox7.Clear();
            for (int i = 1; i < n; i++)
            {
                s = "znak nr. " + i.ToString() + " to: " + (char)i;
                textBox7.AppendText(s + Environment.NewLine);

            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            string s;
            if (textBox3.Text == "") return;
            int n = Convert.ToInt16(textBox3.Text);
            if (n > 256) n = 256;
            textBox6.Clear();
            int i = 0;
            do
            {
                i++;
                s = i.ToString() + "x" + i.ToString() + "= " + (i * i).ToString();
                textBox6.AppendText(s + Environment.NewLine);
            } while (i < n);
        }

        private void button1_Click(object sender, EventArgs e)
        {
       
            string s;

            
            if (textBox1.Text == "" || textBox4.Text == "" || textBox5.Text == "0")
                return;

            int n = Convert.ToInt32(textBox1.Text);
            if (n > 256)
                n = 256;
            int b = Convert.ToInt32(textBox4.Text);
            int c = 0, r = 0;

            int i = 1;
            textBox5.Clear();

       
            while (i <= n)
            {
                c = i / b;   
                r = i % b;  

                s = i.ToString() + "/" + b.ToString() + "=" + c.ToString() + "; "
                  + i.ToString() + "%" + b.ToString() + "=" + r.ToString();

                textBox5.AppendText(s + Environment.NewLine);
                i++;
            }
        }
    }
}
