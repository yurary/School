namespace zad_13_tsk
{
    public partial class Form1 : Form
    {
        float a = 0, b = 0, w = 0;
        enum Dzialanie
        {
            brak,
            Dodawanie,
            Odejmowanie,
            dzielenie,
            mnozenie
        };
        Dzialanie dzialanie = Dzialanie.brak;


        public Form1()
        {
            InitializeComponent();
        }



        private void button1_Click(object sender, EventArgs e)
        {
            Control C = (Control)sender;
            textBox1.Text += C.Text;

        }

        private void button2_click(object sender, EventArgs e)
        {
            if (textBox1.Text.Length > 1) return;
            a = (float)Convert.ToDouble(textBox1.Text);
            textBox1.Text = "";
            Control c = (Control)sender;
            switch (c.Text)
            {
                case "/":
                    dzialanie = Dzialanie.dzielenie;
                    break;
                case "*":
                    dzialanie = Dzialanie.mnozenie;
                    break;
                case "-":
                    dzialanie = Dzialanie.Odejmowanie;
                    break;
                case "+":
                    dzialanie = Dzialanie.Dodawanie;
                    break;
                default:
                    dzialanie = Dzialanie.brak;
                    break;
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            if (textBox1.Text.Length > 0) b = (float)Convert.ToDouble(textBox1.Text);
            else b = 0;
            switch (dzialanie)
            {
                case Dzialanie.Dodawanie:
                    w = a + b;
                    break;
                case Dzialanie.Odejmowanie:
                    w = a - b;
                    break;
                case Dzialanie.dzielenie:
                    if (b != 0) w = a / b;
                    else
                    {
                        
                        w = 404;
                    }
                    break;
                case Dzialanie.mnozenie:
                    w = a * b;
                    break;
                default:
                    w = a;
                    break;
            }
            textBox1.Text = w.ToString();
            a = 0; b = 0; w = 0;
            dzialanie = Dzialanie.brak;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            if (textBox1.Text.Length < 1) return;
            string zrodlo = textBox1.Text;
            textBox1.Text = zrodlo.Substring(0, zrodlo.Length - 1);


        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            textBox1.Clear();
            a = 0; b = 0; w = 0;
        }
    }
}
